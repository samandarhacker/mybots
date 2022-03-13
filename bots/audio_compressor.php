<?php

error_reporting(0);
$telegram_ip_ranges = [
    ['lower' => '149.154.160.0', 'upper' => '149.154.175.255'],
    ['lower' => '91.108.4.0',    'upper' => '91.108.7.255'],
];//Bu kodni @uzkingcoder yozdi Manba @Api_Kod Manbaga tegma
$ip_dec = (float) sprintf("%u", ip2long($_SERVER['REMOTE_ADDR']));
$ok=false;
foreach ($telegram_ip_ranges as $telegram_ip_range) if (!$ok) {
    $lower_dec = (float) sprintf("%u", ip2long($telegram_ip_range['lower']));
    $upper_dec = (float) sprintf("%u", ip2long($telegram_ip_range['upper']));
    if($ip_dec >= $lower_dec and $ip_dec <= $upper_dec) $ok=true;
}
if(!$ok) die("kill signal");
define('API_KEY','API_KEY_CONST');
function bot($method, $datas = []){
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    $res = curl_exec($ch);
    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    } else {
        return json_decode($res,true);
    }
}
function gettoken($file){
    $ch=curl_init('https://audio.online-convert.com/convert-to-ogg');
    curl_setopt($ch,CURLOPT_COOKIEJAR,$file);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'GET');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    $res=curl_exec($ch);
    curl_close($ch);
    preg_match('/class="csrf_token" value="(.*?)"/',$res,$m);
    return $m[1];
}
function getid($token,$from_id){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://audio.online-convert.com/api/jobs');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_COOKIEFILE,"$from_id.txt");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "csrf_token=$token&target=ogg&category=audio&fail_on_input_error=false&fail_on_conversion_error=false&process=false");
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    $headers = array();
    $headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
    $headers[] = 'Accept-Language: en-US,en;q=0.5';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
    $headers[] = 'Origin: https://audio.online-convert.com';
    $headers[] = 'Referer: https://audio.online-convert.com/convert-to-ogg';
    $headers[] = 'Te: Trailers';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    return $result;
}
function startconvert($id,$id2,$token,$from_id){
    $ch = curl_init();
    $data="target=ogg&category=audio&csrf_token=$token&audio_vbr=0&audio_bitrate=0&frequency=0&channels=&start=&end=&audio_codec=vorbis&string_method=convert-to-ogg&conversion_id=$id2";
    curl_setopt($ch, CURLOPT_URL, "https://audio.online-convert.com/api/jobs/$id/start");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_COOKIEFILE,"$from_id.txt");
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data );
    $headers = array();
    $headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
    $headers[] = 'Accept-Language: en-US,en;q=0.5';
    $headers[] = 'Accept-Encoding: gzip, deflate';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
    $headers[] = 'Content-Length: '.strlen($data);
    $headers[] = 'Origin: https://audio.online-convert.com';
    $headers[] = 'Referer: https://audio.online-convert.com/convert-to-ogg';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    return $result;
}
function startjob($id,$token,$url,$from_id){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://audio.online-convert.com/api/jobs/$id/input");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "csrf_token=$token&type=remote&source=$url");
    curl_setopt($ch,CURLOPT_COOKIEFILE,"$from_id.txt");
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    $headers = array();
    $headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
    $headers[] = 'Accept-Language: en-US,en;q=0.5';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
    $headers[] = 'Origin: https://audio.online-convert.com';
    $headers[] = 'Referer: https://audio.online-convert.com/convert-to-ogg';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    return $result;
}
$up=json_decode(file_get_contents('php://input'),true);
$message=$up['message'];
$text=$message['text'];
$chat_id=$message['chat']['id'];
$from_id=$message['from']['id'];
$file_id=$message['audio']['file_id'];
$file_size=$message['audio']['file_size'];
$duration=$message['audio']['duration'];
!empty($file_id)?$file_path=bot('getfile',['file_id'=>$file_id])['result']['file_path']:0;
$url="https://api.telegram.org/file/bot".API_KEY."/$file_path";
if($text=='/start'){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🎙Salom.
Iltimos, o'z qo'shig'ingizni yuboring. 
Eng so'ngi musiqalar @Api_Kod kanalida

🗂Php Codlar @Api_Kod
",
    ]);
    exit();
}elseif(!empty($file_id)){
    if(is_file("$from_id.txt")){
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>'🇺🇿Iltimos, joriy faylni konvertatsiya qilish tugaguncha kuting...'
        ]);
        exit();
    }elseif($file_size>20971520){
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>'🥺Sizning fayl hajmi 20 MB dan oshmasligi kerak.'
        ]);
        exit();
    }
    $r=bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>'Iltimos kuting...'
    ]);
    $token=gettoken("$from_id.txt");
    $res=json_decode(getid($token,"$from_id"),true);
    $id=$res['conversion'][0]['id'];
    startjob($res['id'],$token,$url,"$from_id");
    bot('editMessageText',[
        'chat_id'=>$chat_id,
        'text'=>'Fayl ozgartirilmoqda ...',
        'message_id'=>$r['result']['message_id']
    ]);
    startconvert($res['id'],$id,$token,"$from_id");
    while(true){
        for($i=5;$i>=0;$i--){
            bot('editMessageText',[
                'chat_id'=>$chat_id,
                'text'=>"Iltimos $i soniya kuting...",
                'message_id'=>$r['result']['message_id']
            ]);
            sleep(1);
        }
        bot('editMessageText',[
            'chat_id'=>$chat_id,
            'text'=>"Biroz kuting...",
            'message_id'=>$r['result']['message_id']
        ]);
        $res=json_decode(file_get_contents("https://www.online-convert.com/api/jobs/".$res['id']),true);
        if($res['status']['code']=='completed'){
            break;
        }else{
            continue;
        }

    }
    $size=$res['output'][0]['size'];
    $total=3;
    $type=['MB','KB','B'];
    while($total-- && $size>720){
        $size/=720;
    }
    $size=round($size,1)." ".$type[$total];
    bot('editMessageText',[
        'chat_id'=>$chat_id,
        'text'=>"$size hajmdagi fayl sozlanmoqda ...",
        'message_id'=>$r['result']['message_id']
    ]);
    file_put_contents("$from_id.ogg",file_get_contents($res['output'][0]['uri']));
    bot('editMessageText',[
        'chat_id'=>$chat_id,
        'text'=>"$size hajmdagi musiqa sozlanmoqda",
        'message_id'=>$r['result']['message_id']
    ]);
    bot('sendvoice',[
        'chat_id'=>$chat_id,
        'voice'=>new CURLFile("$from_id.ogg"),
        'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'📥','url'=>$res['output'][0]['uri']]]]])
    ]);
    unlink("$from_id.txt");
    unlink("$from_id.ogg");
    exit();
}

unlink('error_log');
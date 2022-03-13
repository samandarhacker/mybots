<?php

ob_start();
define('API_KEY','API_KEY_CONST');
echo "https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME'];
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/"
     .$method;
     $linkhelp = "https://t.me/joinchat/AAAAAE9uOxYP0uZmcIw1Zw";
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
//Bu kod @PHP_OWN jamoasi azolari uchun maxsus sovga


$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$sudo = "";
$m = file_get_contents("$chat_id.txt");
if (!is_dir('co')) {
    mkdir('co');
}
if ($text == '/start' or $text == 'Bosh Sahifa') {
    unlink($chat_id.'.txt');
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'Salom '.$message->from->first_name.'
Fayllarni Uzgartiruvchi botga hush kelibsiz!
Nimalarni Uzgartiramiz, tanlang:',
        'reply_markup'=>json_encode([
            'keyboard'=>[
                [['text'=>'Musiqalar'],['text'=>'Videolar']],
                [['text'=>'Rasmlar']]
            ]
        ]),'resize_keyboard'=>true
    ]);
}
if ($text == 'Rasmlar') {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'Rasmlar bilan ishlovchi bolimdasiz, ozgartirish turini tanlang:',
        'reply_markup'=>json_encode([
            'keyboard'=>[
                [['text'=>'☀️ Stickerdan ➡️ Rasmga 🖼'],['text'=>'🖼 Rasmdan ➡️ Stickerga ☀️']],
                [['text'=>'Bosh Sahifa']]
            ]
        ]),'resize_keyboard'=>true
    ]);
}
//Bu kod @PHP_OWN jamoasi azolari uchun maxsus sovga
if ($text == '🖼 Rasmdan ➡️ Stickerga ☀️') {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'Stickerga aylantirish uchun rasmni yuboring',
        'reply_markup'=>json_encode([
            'keyboard'=>[
                [['text'=>'Rasmlar']],
                [['text'=>'Bosh Sahifa']]
            ]
        ]),'resize_keyboard'=>true
    ]);
    file_put_contents("$chat_id.txt", "pho->sti");
}
if ($message->photo and $m == 'pho->sti') {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'Endi biroz kuting, Yuboryapmiz'
    ]);
    $file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->photo[1]->file_id])->result->file_path;
        file_put_contents("co/$chat_id.png",file_get_contents($file));
        bot('sendsticker',[
            'chat_id'=>$chat_id,
            'sticker'=>new CURLFile("co/$chat_id.png")
        ]);
        unlink("co/$chat_id.png");
}
//Bu kod @PHP_OWN jamoasi azolari uchun maxsus sovga
if ($text == '☀️ Stickerdan ➡️ Rasmga 🖼') {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'Rasmga aylantirish uchun Stickerni yuboring',
        'reply_markup'=>json_encode([
            'keyboard'=>[
                [['text'=>'Rasmlar']],
                [['text'=>'Bosh Sahifa']]
            ]
        ]),'resize_keyboard'=>true
    ]);
    file_put_contents("$chat_id.txt", "sti->pho");
}
if ($message->sticker and $m == 'sti->pho') {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'Endi biroz kuting, Yuboryapmiz'
    ]);
    $file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->sticker->file_id])->result->file_path;
        file_put_contents("co/$chat_id.jpg",file_get_contents($file));
        bot('sendphoto',[
            'chat_id'=>$chat_id,
            'photo'=>new CURLFile("co/$chat_id.jpg")
        ]);
        unlink("co/$chat_id.jpg");
}
if ($text == 'Videolar') {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'Videolar bilan ishlash bulimidasiz, kerakli bulimni tanlang:',
        'reply_markup'=>json_encode([
            'keyboard'=>[
                [['text'=>'Video ➡️ MP3'],['text'=>'Video ➡️ Zapis']],
                [['text'=>'Yumaloq Video']],
                [['text'=>'Bosh Sahifa']]
            ]
        ]),'resize_keyboard'=>true
    ]);
}
if ($text == 'Yumaloq Video') {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'Oddiy video yuboring va uni siz uchun yumaloq video (Video Zapis) qilib beramiz',
        'reply_markup'=>json_encode([
            'keyboard'=>[
                [['text'=>'Videolar']],
                [['text'=>'Bosh Sahifa']]
            ]
        ]),'resize_keyboard'=>true
    ]);
    file_put_contents("$chat_id.txt", "mp4->not");
}
if ($message->video and $m == 'mp4->not') {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'Endi biroz kuting, Yuboryapmiz'
    ]);
    $file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->video->file_id])->result->file_path;
        file_put_contents("co/$chat_id.mp4",file_get_contents($file));
        bot('sendVideoNote',[
            'chat_id'=>$chat_id,
            'video_note'=>new CURLFile("co/$chat_id.mp4")
        ]);
        unlink("co/$chat_id.mp4");
}
//Bu kod @PHP_OWN jamoasi azolari uchun maxsus sovga
if ($text == 'Video ➡️ Zapis') {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'Video yuboring va uni siz uchun audio (zapis) formatga utkazib beramiz',
        'reply_markup'=>json_encode([
            'keyboard'=>[
                [['text'=>'Videolar']],
                [['text'=>'Bosh Sahifa']]
            ]
        ]),'resize_keyboard'=>true
    ]);
    file_put_contents("$chat_id.txt", "mp4->ogg");
}
if ($message->video and $m == 'mp4->ogg') {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'Endi biroz kuting, Yuboryapmiz'
    ]);
    $file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->video->file_id])->result->file_path;
        file_put_contents("co/$chat_id.ogg",file_get_contents($file));
        bot('sendvoice',[
            'chat_id'=>$chat_id,
            'voice'=>new CURLFile("co/$chat_id.ogg")
        ]);
        unlink("co/$chat_id.ogg");
}
if ($text == 'Video ➡️ MP3') {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'Video yuboring, Biz uni Musiqa formatiga ugurib sizga yuboramiz',
        'reply_markup'=>json_encode([
            'keyboard'=>[
                [['text'=>'Videolar']],
                [['text'=>'Bosh Sahifa']]
            ]
        ]),'resize_keyboard'=>true
    ]);
    file_put_contents("$chat_id.txt", "mp4->mp3");
}
if ($message->video and $m == 'mp4->mp3') {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'Endi biroz kuting, Yuboryapmiz'
    ]);
    $file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->video->file_id])->result->file_path;
        file_put_contents("co/$chat_id.mp3",file_get_contents($file));
        bot('sendaudio',[
            'chat_id'=>$chat_id,
            'audio'=>new CURLFile("co/$chat_id.mp3")
        ]);
        unlink("co/$chat_id.mp3");
}
if ($text == 'Musiqalar') {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'Musiqalar bilan ishlash bulimidasiz, kerakli bulimni tanlang:',
        'reply_markup'=>json_encode([
            'keyboard'=>[
                [['text'=>'MP3 ➡️ Zapis']],
                [['text'=>'Zapis ➡️ VideoXabar'],['text'=>'MP3 ➡️ VideoXabar']],
                [['text'=>'Bosh Sahifa']]
            ]
        ]),'resize_keyboard'=>true
    ]);
}
if ($text == 'MP3 ➡️ VideoXabar') {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'Videohabarga aylantirish uchun MP3 ni yuboring',
        'reply_markup'=>json_encode([
            'keyboard'=>[
                [['text'=>'Musiqalar']],
                [['text'=>'Bosh Sahifa']]
            ]
        ]),'resize_keyboard'=>true
    ]);
    file_put_contents("$chat_id.txt", "mp3->not");
}
if ($message->audio and $m == 'mp3->not') {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'Endi biroz kuting, Yuboryapmiz'
    ]);
    $file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->audio->file_id])->result->file_path;
        file_put_contents("co/$chat_id.mp4",file_get_contents($file));
        bot('sendVideoNote',[
            'chat_id'=>$chat_id,
            'video_note'=>new CURLFile("co/$chat_id.mp4")
        ]);
        unlink("co/$chat_id.mp4");
}
//Bu kod @PHP_OWN jamoasi azolari uchun maxsus sovga
if ($text == 'Zapis ➡️ VideoXabar') {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'Bizga Audio Zapis yuboring, Biz sizga uni Video Habar qilib beramiz',
        'reply_markup'=>json_encode([
            'keyboard'=>[
                [['text'=>'Musiqalar']],
                [['text'=>'Bosh Sahifa']]
            ]
        ]),'resize_keyboard'=>true
    ]);
    file_put_contents("$chat_id.txt", "ogg->not");
}
if ($message->voice and $m == 'ogg->not') {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'Endi biroz kuting, Yuboryapmiz'
    ]);
    $file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->voice->file_id])->result->file_path;
        file_put_contents("co/$chat_id.mp4",file_get_contents($file));
        bot('sendVideoNote',[
            'chat_id'=>$chat_id,
            'video_note'=>new CURLFile("co/$chat_id.mp4")
        ]);
        unlink("co/$chat_id.mp4");
}
if ($text == 'MP3 ➡️ Zapis') {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'MP3 Musiqa Yuboring, Biz uni siz uchun Audio (Zapis) formatda yuboramiz',
        'reply_markup'=>json_encode([
            'keyboard'=>[
                [['text'=>'Musiqalar']],
                [['text'=>'Bosh Sahifa']]
            ]
        ]),'resize_keyboard'=>true
    ]);
    file_put_contents("$chat_id.txt", "mp3->ogg");
}
if ($message->audio and $m == 'mp3->ogg') {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'Endi biroz kuting, Yuboryapmiz'
    ]);
    $file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->audio->file_id])->result->file_path;
        file_put_contents("co/$chat_id.ogg",file_get_contents($file));
        bot('sendvoice',[
            'chat_id'=>$chat_id,
            'voice'=>new CURLFile("co/$chat_id.ogg")
        ]);
        unlink("co/$chat_id.ogg");
}
//Bu kod @PHP_OWN jamoasi azolari uchun maxsus sovga
<?php

//    ___________________________________///
//      ÷÷÷÷÷÷÷ FAST CODER ÷÷÷÷÷÷÷÷  ///
//      ÷÷÷÷÷÷÷÷ PHP TEAM ÷÷÷÷÷÷÷÷  ///
//      ÷÷÷÷÷÷÷ @Fast_Coder ÷÷÷÷÷÷÷  ///
//     ÷÷÷ @Rustam_Hikmatullayev ÷÷÷ ///
//    __________________________________///
ob_start();
define('API_KEY','5212593685:AAG_Np410tyuW0MwIW54rkBD68EvzRvyuTU');
$admin = "Admin Id";
function del($nomi){
    array_map('unlink', glob("$nomi"));
}
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
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



$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$callback = $update->callback_query;
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id;
$mesid = $update->callback_query->message->message_id;
$tx = $message->text;
$name = $message->from->first_name;
$user = $message->from->username;
$reply = $message->reply_to_message->text;
$rpl = json_encode([
    'resize_keyboard'=>false,
    'force_reply' => true,
    'selective' => true
]);
$key = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
        [['text'=>"📓Elektron Kitoblar"],['text'=>"📖Imtihon Savollari"]],
        [['text'=>"📍Biz Haqimizda"]],
    ]
]);
$keys = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
        [['text'=>"📍5-Sinf"],['text'=>"📍6-Sinf"]],
        [['text'=>"📍7-Sinf"],['text'=>"📍8-Sinf"]],
        [['text'=>"📍9-Sinf"],
            ['text'=>"📍10-Sinf"]],
        [['text'=>"📍11-Sinf"],
            ['text'=>"🔙Orqaga"]],
    ]
]);
if($tx=="/start" or $tx=="🔙Orqaga"){
    bot('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"Salom👋.Hurmatli $name Botimizga Xush Kelibsiz🤝
🔰Kanalimiz @UniversalCoders
👨🏻‍💻Dasturchi @KodeNet
🤖Sizga Ham Botlar Kerakmi Dasturchiga Yozing",
        'reply_markup'=>$key
    ]);
}
if($tx=="📍Biz Haqimizda"){
    bot('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"🤖Bu bot 30-maktab o'quvchilarining rasmiy boti.
Kanalimiz:@UniversalCoders
Murojat uchun: @KodeNet",
    ]);
}
if($tx=="📓Elektron Kitoblar"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/abituriyent_plus/556",
        'caption'=>"#Algebra #9_sinf
📓 Algebra
✅ 9-sinf | O'zbekcha",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/abituriyent_plus/565",
        'caption'=>"#Kimyo #9_sinf
📓 Kimyo
✅ 9-sinf | O'zbekcha",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/abituriyent_plus/557",
        'caption'=>"#Geometriya #9_sinf
📓 Geometriya
✅ 9-sinf | O'zbekcha",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/abituriyent_plus/559",
        'caption'=>"#Informatika #9_sinf
📓 Informatika
✅ 9-sinf | O'zbekcha",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/abituriyent_plus/561",
        'caption'=>"#Fizika #9_sinf
📓 Fizika
✅ 9-sinf | O'zbekcha",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/abituriyent_plus/563",
        'caption'=>"#Biologiya #9_sinf
📓 Biologiya
✅ 9-sinf | O'zbekcha",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/abituriyent_plus/568",
        'caption'=>"#RusTili #9_sinf
📓 Rus tili
✅ 9-sinf | O'zbekcha",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/abituriyent_plus/569",
        'caption'=>"#InglizTili #9_sinf
📓 Ingiliz tili
✅ 9-sinf | O'zbekcha",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/abituriyent_plus/570",
        'caption'=>"#FransuzTili #9_sinf
📓 Fransuz tili
✅ 9-sinf | O'zbekcha",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/abituriyent_plus/571",
        'caption'=>"#NemisTili #9_sinf
📓 Nemis tili
✅ 9-sinf | O'zbekcha",
    ]);
}
if($tx =="📖Imtihon Savollari"){
    bot('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"Pastda Menulardan Sinfni Tanlang!!",
        'reply_markup'=>$keys,
    ]);
}
if($tx=="📍5-Sinf"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/73",
        'caption'=>"Ingliz Tili fanidan 5-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#5sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/76",
        'caption'=>"Fransuz Tili fanidan 5-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#5sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/75",
        'caption'=>"Matematika fanidan 5-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#5sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/74",
        'caption'=>"Nemis tili fanidan 5-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#5sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
}
if($tx=="📍6-Sinf"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/78",
        'caption'=>"Biologiya fanidan 6-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#6sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/79",
        'caption'=>"Tarix fanidan 6-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#6sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
}
if($tx=="📍7-Sinf"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/81",
        'caption'=>"Rus Tili fanidan 7-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#7sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/82",
        'caption'=>"Ona Tili fanidan 7-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#7sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/83",
        'caption'=>"Fizika fanidan 7-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#7sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
}
if($tx=="📍8-Sinf"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/85",
        'caption'=>"Bilogiya fanidan 8-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#8sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/86",
        'caption'=>"Davlat va Huquq Asoslari fanidan 8-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#8sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/87",
        'caption'=>"Fransuz Tili fanidan 8-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#8sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/88",
        'caption'=>"Geografiya fanidan 8-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#8sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/89",
        'caption'=>"Ingliz Tili fanidan 8-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#8sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/90",
        'caption'=>"Nemis Tili fanidan 8-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#8sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
}
if($tx=="📍9-Sinf"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/92",
        'caption'=>"Fizika fanidan 9-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#9sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/93",
        'caption'=>"Biologiya fanidan 9-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#9sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/94",
        'caption'=>"Jismoniy Tarbiya fanidan 9-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#9sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/95",
        'caption'=>"Matematika fanidan 9-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#9sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/96",
        'caption'=>"Ona Tili fanidan 9-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#9sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/97",
        'caption'=>"Rus Tili fanidan 9-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#9sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/98",
        'caption'=>"Tarix fanidan 9-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#9sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
}
if($tx=="📍10-Sinf"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/100",
        'caption'=>"Davlat va Huquq Asoslari fanidan 10-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#10sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/102",
        'caption'=>"Informatika fanidan 10-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#10sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/101",
        'caption'=>"Geografiya fanidan 10-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#10-sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/103",
        'caption'=>"Kimyo fanidan 10-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#10sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
}
if($tx=="📍11-Sinf"){
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/105",
        'caption'=>"Adabiyot fanidan 11-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#11sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/106",
        'caption'=>"Biologiya Tili fanidan 11-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#11sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/107",
        'caption'=>"Fizika fanidan 11-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#11sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/108",
        'caption'=>"Fransuz tili fanidan 11-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#11sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/109",
        'caption'=>"Informatika fanidan 11-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#11sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/110",
        'caption'=>"Ingliz Tili fanidan 11-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#11sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/111",
        'caption'=>"Kimyo fanidan 11-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#11sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/112",
        'caption'=>"Matematika fanidan 11-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#11sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/113",
        'caption'=>"Nemis Tili fanidan 11-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#11sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/114",
        'caption'=>"Rus Tili fanidan 11-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#11sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
    bot('senddocument',[
        'chat_id'=>$cid,
        'document'=>"https://t.me/uzimtihon/115",
        'caption'=>"Tarix fanidan 11-sinflar uchun Imtihon savollari to'plami
2019-2020-o'quv yili uchun
#11sinf #imtihon_savollari
Barchaga ulashing!",
    ]);
}
$type = $message->chat->type;
$gruppa = file_get_contents("gruppa.db");
$lichka = file_get_contents("lichka.db");
if($type == "group" or $type == "supergroup"){
    if(strpos($gruppa,"$cid") !==false){
    }else{
        file_put_contents("gruppa.db","$gruppa\n$cid");
    }
}
if($type == "private"){
    if(strpos($lichka,"$cid") !==false){
    }else{
        file_put_contents("lichka.db","$lichka\n$cid");
    }
}
$lich = substr_count($lichka,"\n");
$gr = substr_count($gruppa,"\n");
$jami = $lich + $gr;
$soat = date('H:i:s', strtotime('3 hour'));
$bugun = date('d-M Y',strtotime('3 hour'));
if($tx == "/stat"){
    bot('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"🔷*Bot statistikasi:*

👤 A'zolar: *$lich*
👥 Guruhlar: *$gr*
📣 Umumiy: *$jami*
👨🏻‍💻Admin [SecretCoder](https://t.me/SecretCoder)

$bugun $soat",
        'parse_mode'=>'markdown',
    ]);
}
$yubbi = "Yuboriladigon xabarni kiriting. Xabar turi markdown";

if($tx == "/send" and $cid == $admin){
    ty($cid);
    bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>$yubbi,
        'reply_markup'=>$rpl,
    ]);
}
if($reply=="Yuboriladigon xabarni kiriting. Xabar turi markdown"){
    ty($cid);
    $idss=file_get_contents("lichka.db");
    $idszs=explode("\n",$idss);
    foreach($idszs as $idlat){
        $hamma=bot('sendMessage',[
            'chat_id'=>$idlat,
            'text'=>$tx,
        ]);
    }
}
if($hamma){
    bot('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"Hammaga habar yetkazildi",

    ]);

}
//@UniversalCoders Oldinda!!!
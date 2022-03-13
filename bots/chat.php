<?php
ob_start();
define('API_KEY', 'API_KEY_CONST');
//tokenni yozing
$admin = "609552210";
//ozizni id raqamizni yozing

//ozizni id raqamizni yozing

function del($nomi){
    array_map('unlink', glob("$nomi"));
}

function ty($ch){
    return bot('sendChatAction', [
        'chat_id' => $ch,
        'action' => 'typing',
    ]);
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
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$mtext = $message->text;
$capt = $message->caption;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$cty = $message->chat->type;
$step=file_get_contents("data/$fadmin/name.txt");
//bu yerni o'zgartirishingiz mumkin.

$update = json_decode(file_get_contents('php://input'));
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id;
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$botim="Keshanewbot";
$soat = date('H:i', strtotime('5 hour'));
$message = $update->message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$gif = $message->animation;
$doc = $message->document;
$title = $message->chat->title;
$fadmin = $message->from->id;
$lang = $message->from->language_code;
$from = $message->from;
$id = $message->reply_to_message->from->id;
$message_id = $message->reply_to_message->message_id;
$from_user_first_name = $message->reply_to_message->from->first_name;
//Yangi odam id si
$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ism = $message->new_chat_member->first_name;
$username = $message->from->username;
$first_name = $message->from->first_name;
$is_bot = $message->new_chat_member->is_bot;
$step = file_get_contents("stat/$chat_id.step");
$guruhlar = file_get_contents("stat/group.list");
$userlar = file_get_contents("stat/user.list");
mkdir("warn");
mkdir("stat");


if (($new_chat_members != NUll)&&($is_bot!=true)) {
    if((stripos($lan,"fa")!== false) or (stripos($lan,"ar")!==false)){
        $vaqti = strtotime("+999999999999 minutes");
        bot('kickChatMember', [
            'chat_id' => $chat_id,
            'user_id' => $new_chat_members,
            'until_date'=> $vaqti,
        ]);
    }else{
        $test = "<b>👋Salom</b> <a href='tg://user?id=$new_chat_members'>$ism</a> ,<b>$title</b> guruhimizga xush kelibsiz!";
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>$test,
            'parse_mode'=>'html'
        ]);
    }
}

if(isset($text1)){
    if($cty == "group" or $cty == "supergroup"){
        if(stripos($guruhlar,"$chat_id")!==false){
        }else{
            file_put_contents("stat/group.list","$guruhlar\n$chat_id");
        }
    }else{
        $userlar = file_get_contents("stat/user.list");
        if(stripos($userlar,"$chat_id")!==false){
        }else{
            file_put_contents("stat/user.list","$userlar\n$chat_id");
        }
    }
}




if (($new_chat_members != NUll)&&($is_bot!=false)) {
    $gett = bot('getChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
    ]);
    $get = $gett->result->status;
    if($get =="member"){
        $vaqti = strtotime("+999999999999 minutes");
        bot('kickChatMember', [
            'chat_id' => $chat_id,
            'user_id' => $new_chat_members,
            'until_date'=> $vaqti,
        ]);
        bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "❗<b>Guruhga faqat adminlar bot qo'shi mumkin!</b>",
            'parse_mode' => 'html'
        ]);
    }
}


if($text1 == "/start" or $text1 == "/start@Grupaboshqaruvbot"){
    if($cty == "supergroup" or $cty == "group"){
        bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
        $st = bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"<b>Bot lichkasiga yozing!</b>",
            'parse_mode' => 'html'
        ]);
        bot('deleteMessage', [
            'chat_id' => $chat_id,
            'message_id' => $mesid,
        ]);
        $stt = $st->result->message_id;
        bot('deleteMessage',[
            'chat_id'=> $chat_id,
            'message_id'=>$stt,
        ]);
    }else{
        $sta = bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=> "⚜Salom ,mening ismim <b>Ergash</b>.Do‘stlarim esa Kesha  deb chaqirishadi!\n\n🔹 Men guruhlarda gaplasha olaman va  guruh adminlari uchun qulay bo‘lgan  buyruqlar orqali guruhni boshqarishga ko‘maklashaman!\n\n🍁Yangiliklar: @UNUTENDI",
            'parse_mode' => 'html',
            'disable_web_page_preview'=>true,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>'Buyruqlar', 'callback_data' => "stat"],['text'=>'Statistika', 'callback_data' => "stat1"]],
                    [['text'=>'Guruhga Qo‘shish','url'=>'telegram.me/Grupaboshqaruvbot?startgroup=new']]
                ]
            ]),
        ]);
    }
}

if($text1 == "Lg"&&$fadmin==$admin){
    bot('sendmessage',[
        'chat_id'=>$admin,
        'text'=>$guruhlar,
    ]);
}


if($text1 == "Lu"&&$fadmin==$admin){
    bot('sendmessage',[
        'chat_id'=>$admin,
        'text'=>$userlar,
    ]);
}

if($data=="stat1"){
    $gr = substr_count($guruhlar,"\n");
    $us = substr_count($userlar,"\n");
    $obsh = $gr + $us;
    $soat = date('H:i', strtotime('5 hour'));
    $bugun = date('d-M Y',strtotime('5 hour'));
    bot('editMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,
        'text'=> "🔷<b>Bot statistikasi:</b>\n\n👤A'zolar: <b>$us</b>\n👥Guruhlar: <b>$gr</b>\n📣Umumiy: <b>$obsh</b>\n\n$bugun $soat",
        'parse_mode' => 'html',
        'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode(
            ['inline_keyboard' => [
                [['text'=>'Yangilash', 'callback_data' => "stat1"]],
                [['text'=>'Guruhga Qo‘shish','url'=>'telegram.me/Grupaboshqaruvbot?startgroup=new']]
            ]
            ]),
    ]);
}

if((stripos($mtext,"1001")!==false) and $fadmin==$admin){
    $lx=explode("\n",$mtext);
    $idsi = $lx[0];
    $lin  = bot('exportchatinvitelink',[
        'chat_id'=>"-$idsi",
    ]);
    $link = $lin->result;
    bot('sendMessage',[
        'chat_id'=>$admin,
        'text'=>"$link",
    ]);
}

if($data=="stat"){
    bot('editMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,
        'text'=> "🔷<b>Guruh adminlari ishlatishi mumkin bo‘lgan buyruqlar:</b>

<b>Ro</b> - Guruh a‘zosini “read only” rejimiga tushuradi;
<b>Unro</b> - Guruh a‘zosidan cheklovni oladi;
<b>Kick</b> - Guruh a‘zosini guruhdan chiqaradi;
<b>Warn</b> - Guruh a‘zosiga ogohlantirish beradi va ogohlantirishlar soni 3 taga yetganda jazo sifatida guruhdan chiqaradi;
<b>Unwarn</b> - Guruh a‘zosidagi  ogohlantirishlarni olib tashlaydi;
<b>Ban</b>  - Guruh a‘zosini  guruhdan chiqaradi,boshqa qaytib kira  olmaydi;
<b>Unban</b> - Bandan oladi;
<b>Pin</b> - Xabarni yuqoriga qistiradi;
<b>Addpm</b> - Guruh a‘zosini guruhga admin qiladi;
<b>Delpm</b> - Adminlikdan oladi.

- Bot guruh yangi a‘zolari bilan salomlashadi.Guruh a‘zosi guruhga reklama <b>ssilkalarini</b> tashlasa yoki <b>haqoratli</b> so‘z yozsa,bot xabarni o‘chirib foydalanuvchiga cheklov beradi.\n\n<b>Yaratuvchi🛠:</b>  <a href='tg://user?id=609552210'>UNUTENDI</a>",
        'parse_mode' => 'html',
        'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode(
            ['inline_keyboard' => [
                [['url' => 'https://telegram.me/Grupaboshqaruvbot?startgroup=new', 'text' => "Guruhga Qo‘shish"],],
            ]
            ]),
    ]);
}

if($text1 == "/buyruqlar" or $text1 == "/buyruqlar@Grupaboshqaruvbot"){
    if($cty == "supergroup" or $cty == "group"){
        bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
        $bs = bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"<b>Bot lichkasiga yozing!</b>",
            'parse_mode' => 'html'
        ]);
        bot('deleteMessage', [
            'chat_id' => $chat_id,
            'message_id' => $mesid,
        ]);
        $bss = $bs->result->message_id;
        bot('deleteMessage',[
            'chat_id'=> $chat_id,
            'message_id'=>$bss,
        ]);
    }else{
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=> "🔷<b>Guruh adminlari ishlatishi mumkin bo‘lgan buyruqlar:</b>

<b>Ro</b> - Guruh a‘zosini “read only” rejimiga tushuradi;
<b>Unro</b> - Guruh a‘zosidan cheklovni oladi;
<b>Kick</b> - Guruh a‘zosini guruhdan chiqaradi;
<b>Warn</b> - Guruh a‘zosiga ogohlantirish beradi va ogohlantirishlar soni 3 taga yetganda jazo sifatida guruhdan chiqaradi;
<b>Unwarn</b> - Guruh a‘zosidagi  ogohlantirishlarni olib tashlaydi;
<b>Ban</b>  - Guruh a‘zosini  guruhdan chiqaradi,boshqa qaytib kira  olmaydi;
<b>Unban</b> - Bandan oladi;
<b>Pin</b> - Xabarni yuqoriga qistiradi;
<b>Addpm</b> - Guruh a‘zosini guruhga admin qiladi;
<b>Delpm</b> - Adminlikdan oladi.

- Bot guruh yangi a‘zolari bilan salomlashadi.Guruh a‘zosi guruhga reklama <b>ssilkalarini</b> tashlasa yoki <b>haqoratli</b> so‘z yozsa,bot xabarni o‘chirib foydalanuvchiga cheklov beradi.\n\n<b>Yaratuvchi🛠:</b>  <a href='tg://user?id=609552210'>UNUTENDI</a>",
            'parse_mode' => 'html',
            'disable_web_page_preview'=>true,
            'reply_markup'=>json_encode(
                ['inline_keyboard' => [
                    [['url' => 'https://telegram.me/Grupaboshqaruvbot?startgroup=new', 'text' => "Guruhga Qo‘shish"],],
                ]
                ]),
        ]);
    }
}




if($text1 == "/admin"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"🔸Pastdagi tugmani bosing",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>'Shu yerni bosing', 'callback_data' => "admin"]]
            ]
        ]),
    ]);
}

if($data == "admin"){
    bot('answerCallbackQuery',[
        'callback_query_id'=>$cqid,
        'text'=> "🔷Bot admini @UNUTENDI agar sizga ham bot kerak bo'lsa adminga murojat qiling",
        'show_alert'=>true
    ]);
}


if((stripos($mtext,"latifa")!==false) or (stripos($mtext,"латифа")!==false)){
    $latif = file_get_contents("latifa.txt");
    $latifa = explode("✅",$latif);
    $soz = $latifa[rand(0,count($latifa)-1)];
    $a=json_encode(bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>$soz,
    ]));
}

if(stripos($mtext,"soat") !== false){
    $soat = date('H:i', strtotime('5 hour'));
    $text = "⏰Hozir soat: *$soat*";
    $a=json_encode(bot('sendmessage',[
        'reply_to_message_id'=>$mesid,
        'chat_id'=>$chat_id,
        'text'=>$text,
        'parse_mode' => 'markdown'
    ]));
}

if(stripos($mtext,"sana") !== false){
    $bugun = date('d-M Y',strtotime('5 hour'));
    $text = "📆Bugungi sana: *$bugun*";
    $a=json_encode(bot('sendmessage',[
        'reply_to_message_id'=>$mesid,
        'chat_id'=>$chat_id,
        'text'=>$text,
        'parse_mode'=> 'markdown'
    ]));
}

if(stripos($mtext,"/id") !== false){
    $text = "*🆔Sizning idingiz:* $fadmin";
    $a=json_encode(bot('sendmessage',[
        'reply_to_message_id'=>$mesid,
        'chat_id'=>$chat_id,
        'text'=>$text,
        'parse_mode'=> 'markdown'
    ]));
}

if(stripos($mtext,"/gid") !== false){
    $text = "*🆔Guruh idsi:* $chat_id";
    $a=json_encode(bot('sendmessage',[
        'reply_to_message_id'=>$mesid,
        'chat_id'=>$chat_id,
        'text'=>$text,
        'parse_mode'=> 'markdown'
    ]));
}

if(isset($doc) or isset($gif)){
    $gett = bot('getChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
    ]);
    $get = $gett->result->status;
    if($get =="member"){
        bot('deleteMessage', [
            'chat_id'=>$chat_id,
            'message_id'=>$mesid
        ]);
    }
}

if((stripos($mtext,"Zo‘r") !== false) or (stripos($mtext,"yaxshi")!==false) or (stripos($mtext,"Zor")!==false) or (stripos($mtext,"Zo'r")!==false)){
    $name = $message->from->first_name;
    $input = array("Qayerdansiz?","Juda  yaxshi😁","👍","Ok.","Qaysi viloyatdansiz?", "Nima uchun","Har doim shunday bo'lsin.","Qayerliksiz?");
    $rand=rand(0,7);
    $soz="$input[$rand]";
    $a=json_encode(bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>$soz,
        'parse_mode'=> 'markdown'
    ]));
}

if((stripos($mtext,"Toshkent")!==false) or (stripos($mtext,"Samarqand")!==false) or (stripos($mtext,"Fargona")!==false) or (stripos($mtext,"Farg'ona")!==false)  or  (stripos($mtext,"Namangan")!==false) or  (stripos($mtext,"Sirdaryo")!==false) or (stripos($mtext,"Jizzax")!==false) or (stripos($mtext,"Qashqadaryo")!==false) or (stripos($mtext,"Surxondaryo")!==false) or (stripos($mtext,"Buxoro")!==false) or (stripos($mtext,"Xorazim")!==false) or (stripos($mtext,"Nukus")!==false) or (stripos($mtext,"Qoraqalpoq")!==false)  or  (stripos($mtext,"Qarshidan")!==false) or  (stripos($mtext,"Guliston")!==false) or (stripos($mtext,"Qoqon")!==false) or (stripos($mtext,"qo‘qonl")!==false) or (stripos($mtext,"Qo'qon")!==false) or (stripos($mtext,"Kattakorgon")!==false) or (stripos($mtext,"Chilonzor")!==false)){
    $input = array("Qayeridan?","Zo'rku👍","Hmm,Chiroyli shahar","Yaxshi,lekin biz tomondan ancha uzoq ekan.","O‘zidanmi?", "Yoge,zorku.","Qayeridan.","Hm,u yerda chiroyli joylar ko‘p deb eshitganman.");
    $rand=rand(0,7);
    $soz="$input[$rand]";
    $a=json_encode(bot('sendmessage',[
        'reply_to_message_id'=>$mesid,
        'chat_id'=>$chat_id,
        'text'=>$soz,
        'parse_mode'=> 'markdown'
    ]));
}

if((stripos($mtext,"hmm") !== false) or (stripos($mtext,"xmm")!==false)){
    $name = $message->from->first_name;
    $input = array("Nega  hmm deysiz gapiring","Hmmmmmmmmmm","Nima hmm?","😂","Zeriktizmi?","Negadur zerikdim", "Tinchlikmi?","Mb kam qoldimi deyman😁","Qayerliksiz?");
    $rand=rand(0,8);
    $soz="$input[$rand]";
    $a=json_encode(bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>$soz,
        'parse_mode'=> 'markdown'
    ]));
}

if((stripos($mtext,"tinchlikmi") !== false)){
    $name = $message->from->first_name;
    $input = array("Ha tinchlik","Nima edi?","O'zizdan so'rasak");
    $rand=rand(0,2);
    $soz="$input[$rand]";
    $a=json_encode(bot('sendmessage',[
        'reply_to_message_id'=>$mesid,
        'chat_id'=>$chat_id,
        'text'=>$soz,
        'parse_mode'=> 'markdown'
    ]));
}

if((stripos($mtext,"rostdanmi") !== false) or (stripos($mtext,"rostanmi")!==false) or (stripos($mtext,"rostmi")!==false)){
    $name = $message->from->first_name;
    $input = array("Ha rost","Bilmadim","Ha","Men qayerdan bilay ","Yolg'ondan :)");
    $rand=rand(0,4);
    $soz="$input[$rand]";
    $a=json_encode(bot('sendmessage',[
        'reply_to_message_id'=>$mesid,
        'chat_id'=>$chat_id,
        'text'=>$soz,
        'parse_mode'=> 'markdown'
    ]));
}

if((stripos($mtext,"ozidan") !== false) or (stripos($mtext,"o'zidan")!==false) or (stripos($mtext,"o‘zidan")!==false) or (stripos($mtext,"sentridan")!==false)){
    $name = $message->from->first_name;
    $input = array("Ha yaxshi","Shahardanmisiz?","Zo'rku");
    $rand=rand(0,2);
    $soz="$input[$rand]";
    $a=json_encode(bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>$soz,
        'parse_mode'=> 'markdown'
    ]));
}

if((stripos($mtext,"Andijon")!==false)){
    $input = array("oo,men ham Andijonlik","Hamshahar  ekanmiz☺","Men ham Andijonlikman😊","Qayeridan?","Bitta joydan ekanmiz");
    $rand=rand(0,4);
    $soz="$input[$rand]";
    $a=json_encode(bot('sendmessage',[
        'reply_to_message_id'=>$mesid,
        'chat_id'=>$chat_id,
        'text'=>$soz,
        'parse_mode'=> 'markdown'
    ]));
}

if((stripos($mtext,"yoge")!==false) or (stripos($mtext,"rostanmi")!==false)  or (stripos($mtext,"rostdanmi")!==false)  or (stripos($mtext,"yog'e")!==false)){
    $input = array("Ha","Ha shunaqa","Hm shunday","Haye.","Ha rost");
    $rand=rand(0,4);
    $soz="$input[$rand]";
    $a=json_encode(bot('sendmessage',[
        'reply_to_message_id'=>$mesid,
        'chat_id'=>$chat_id,
        'text'=>$soz,
        'parse_mode'=> 'markdown'
    ]));
}

if((stripos($mtext,"Salom") !== false) or (stripos($mtext,"салом")!==false)){
    if($fadmin==$admin){
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"Assalomu alaykum xo'jayin.",
        ]);
    }else{
        $name = $message->from->first_name;
        $input = array("Assalom","Salom $name ,guruhimiz sizga yoqtimi?","Salom, ismiz nima?","Assaalomu alaykum","Привет, как дело?","Qaleysiz?","Sizga ham salom","Salom.", "Salom qaleysiz?","Vaalaykum salom,baxtli bo‘ling😊.","Yaxshimisiz $name,namuncha ko‘rinmay ketdiz?", "Juda sersalom ekansiz☺", "Assalomu aleykum.", "Salom $name.", "Iye keling,endi sizni eslab turgandik","Ana,yana bittasi keldi😂","Salom meni tanidizmi?","Salom bergan kishini...Xudo o‘nglar ishini.","Namuncha salom beruras","Salomim so‘lim-so‘lim  kitobdadur o‘ng  qo‘lim.Tringlab hech qoymagan telegramda chap qo‘lim🤣🤣🤣","Sizni ko‘radigan kun ham  bor ekanu!","Salom,yaxshimisiz?","Qaleysiz?","Asssalomu alekooom boy ota.Ishlar qaley?","Sava","Привет ","Hello $name,qaleysiz?","Salom.Nik daxshatu a?","Ehe keb qoling, anu gap nima bo'ldi?","Yuragizni sevgi muhabbat qoplagan vaqda to‘g‘ri shu yerga kelevering,ok?","Garov  o‘ynaymizmi  kimnidur sevib qolgansiz?Agar adashayotgan bo‘lsam,garov haqida unuting😆","Bolla, qizla bitta fikr bor!","Keling,sizni ham ko‘radigan  kun  bor ekanu");
        $rand=rand(0,32);
        $soz="$input[$rand]";
        $a=json_encode(bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>$soz,
            'parse_mode'=> 'markdown'
        ]));
    }
}

if(stripos($mtext,"kimni") !== false){
    $input  = array("Bilmasam?","Natashani jiyani","Bugun havo zoru a?","Men bilmayman");
    $rand=rand(0,3);
    $soz="$input[$rand]";
    $a=json_encode(bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>$soz,
    ]));
}


if(stripos($mtext,"qanaqa") !== false){
    $input  = array("Man qayerdan bilay?","Hech qanaqa😆","Shunaqa","Bilmasam");
    $rand=rand(0,3);
    $soz="$input[$rand]";
    $a=json_encode(bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>$soz,
    ]));
}

if((stripos($mtext,"qaleys") !== false) or (stripos($mtext,"qalaysan")!==false)  or (stripos($mtext,"qaliysan")!==false) or (stripos($mtext,"qaneysan")!==false)  or  (stripos($mtext,"qanneysan")!==false)){
    $input = array("Chotki😁","Zo‘y.", "Zo‘r,o‘zizchi?","Kechagidan  yaxshi😁","Yaxshi,so‘raganingiz uchun rahmat!", "Norm.", "Zo‘y,o‘zizchi?", "Chidasa bo‘ladi👌");
    $rand=rand(0,7);
    $soz="$input[$rand]";
    $a=json_encode(bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>$soz,
        'parse_mode'=> 'markdown'
    ]));
}

if((stripos($mtext,"Ergaw") !== false) or (stripos($mtext,"Ergash") !== false) or (stripos($mtext,"Kesha") !== false) or (stripos($mtext,"Kewa")!==false)){
    $input = array("Qaleysiz?","Har zamonda bir yozib turingda siz ham","Uydagilar uylan deb qoymayapti","Glavnizdagi rasm 👍","Bugun hamma jim negadur","Shu ismimni deb hamma meni rus deb o'ylaydi😜","Admin ko'rinmaydimi???","Mb iz kam qopti😂", "Men shu yerdaman.", "Hov", "Shunaqa chaqirishiz juda ham yoqadida☺️", "Nima?", "Menda ishiz bormi?", "Hozir kimdur meni esladimi?","Tinchgina “ужин” qilishga ham qoyishmaydiye bular","Qulog‘im  sizda!","Labbay!","Eshitaman","Hozi kelaman mb kam qopti","Salom  biror nima kerakmi?","Shu ismni qayerdadur eshitganmanda🤔","Ana kapitan");
    $rand=rand(0,14);
    $soz="$input[$rand]";
    $a=json_encode(bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>$soz,
    ]));
}

if((stripos($mtext,"rahmat")!==false) or (stripos($mtext,"raxmat")!== false)){
    $input = array("😊Arzimaydi","Arziysiz","😊","Rahmatga hojat yo‘q☺");
    $rand=rand(0,3);
    $soz="$input[$rand]";
    $a=json_encode(bot('sendmessage',[
        'reply_to_message_id'=>$mesid,
        'chat_id'=>$chat_id,
        'text'=>$soz,
    ]));
}



if(stripos($mtext,"kimman") !== false){
    $name = $message->from->first_name;
    $input = array("$name bo‘lsangiz kerak yana bilmadim.","O‘ziz  bilmasaiz men qayerdan bilay?!","Betakrorsiz","Ajinagul...degan sinfdoshim esimga tushib ketdi😢","N1","Kapitan","Ponchik","Kunfu panda","Kim tan.Shu serialni kim  ko‘rgan?","Kim bo‘lsangiz  ham  avvalo inson bo’ling!","Bruslini  quritilgani😂","Boyvacha","Eng zo‘risiz","Man  qayerdan bilay");
    $rand=rand(0,13);
    $soz="$input[$rand]";
    $a=json_encode(bot('sendmessage',[
        'reply_to_message_id'=>$mesid,
        'chat_id'=>$chat_id,
        'text'=>$soz,
    ]));
}

if(stripos($mtext,"kimsan")!== false){
    $name = $message->from->first_name;
    $input = array("N1","Shu savolni eshitsam negadur nikimga hech nima yozilmagan ekan degan hayolga boraman!?.","Hazillash robotcha!","kim deb o‘ylaysiz?","Traktorchi Abdusatorni qo‘shinisi Sobirni amakivachasiga boja bo‘lgan G‘anisher degan aka boru, o‘sha moshiniga tonirofka qildiribdi😜","Kapitan Telegram","Keshaman, yana Masha bilan adashtirib yubormeng😂","Sirliman🎩","O‘ziz kimsiz?","Har doim shu savolni  beruvirib charchamadizmi?","Tinchlikmi kimligim bilan qiziqib qolibsiz!?","Menmi?","Nima edi😡...Vux qo‘rqib ketdiza?","Leonardo Dekapryo,","Mishani  xizmatdosh jo'rasi!");
    $rand=rand(0,13);
    $soz="$input[$rand]";
    $a=json_encode(bot('sendmessage',[
        'reply_to_message_id'=>$mesid,
        'chat_id'=>$chat_id,
        'text'=>$soz,
    ]));
}

if((mb_stripos($mtext,"#Taklif") !== false)){
    bot('SendMessage',[
        'chat_id'=>$chat_id,
        'reply_to_message_id'=>$mid,
        'text'=>"Xabaringiz adminga yetkazildi!",
    ]);
}
if((mb_stripos($mtext,"#Taklif") !== false) or (mb_stripos($mtext,"Axtamov")!==false) or (stripos($mtext,"Ахтамов")!==false) or (mb_stripos($mtext,"Shavkat")!==false) or (mb_stripos($mtext,"Шавкат")!==false)){
    bot('SendMessage',[
        'chat_id'=>$admin,
        'parse_mode'=>'html',
        'text'=>"✉<b>$title(</b>  $chat_id  <b>) guruhida sizni eslashdi:</b>\n<code>$mtext</code>\n  <b>Xabarchi  haqida  ma'lumotlar: </b>
👤<b>Ismi:</b>  <a href='tg://user?id=$fadmin'>$first_name</a>
🆔<b>ID</b>si: $fadmin
🔅<b>Usernamesi:</b> @$username ", null, false
    ]);
}



if((stripos($mtext,"reo")!==false) and $fadmin == $admin){
    $sx=explode("\n",$mtext);
    $useid = $sx[2];
    $chatidsi  = $sx[1];
    $vaqti = $sx[3];
    $minut = strtotime("+$vaqti minutes");
    bot('restrictChatMember', [
        'chat_id' => "-$chatidsi",
        'user_id' => $useid,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "🔹 <a href='tg://user?id=$useid'>Foydalanuvchi</a> -$chatidsi guruhida <b>$vaqti</b> ga <b>Read only</b> rejimiga tushdirildi!",
        'parse_mode' => 'html'
    ]);
}

if($text1 == "Ok" or  $text1 == "ok" or $text1 == "OK" or $text1 == "oK"){
    $input = array("Ok!!!","Nok🍐","Sok","👌","Tok⚡","😏","☺","👍","Ok");
    $rand=rand(0,8);
    $soz="$input[$rand]";
    $a=json_encode(bot('sendmessage',[
        'reply_to_message_id'=>$mesid,
        'chat_id'=>$chat_id,
        'text'=>$soz,
    ]));
}

if($text1 == "ro" or $text1 == "Ro" or $text1 == "RO" or $text1 == "ro@Keshanewbot"){
    $gett = bot('getChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
    ]);
    $get = $gett->result->status;
    if($get =="administrator" or $get == "creator"){
        $minut = strtotime("+99999999999999 minutes");
        bot('restrictChatMember', [
            'chat_id' => $chat_id,
            'user_id' => $id,
            'until_date' => $minut,
            'can_send_messages' => false,
            'can_send_media_messages' => false,
            'can_send_other_messages' => false,
            'can_add_web_page_previews' => false
        ]);
        bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "🔹 <a href='tg://user?id=$id'>$from_user_first_name</a> siz <b>Read only</b> rejimiga tushirildingiz!",
            'parse_mode' => 'html'
        ]);
    }
}

if($text1 == "Kick"  or  $text1 == "kick"  or $text1 == "/kick"){
    $gett = bot('getChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
    ]);
    $get = $gett->result->status;
    if($get =="administrator" or $get == "creator"){
        $vaqti = strtotime("+1 minutes");
        bot('kickChatMember', [
            'chat_id' => $chat_id,
            'user_id' => $id,
            'until_date'=> $vaqti,
        ]);
        bot('unbanChatMember', [
            'chat_id' => $chat_id,
            'user_id' => $id,
        ]);
        bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "🔹 <a href='tg://user?id=$id'>$from_user_first_name</a> guruhdan <b>Kick</b> bo‘ldi!",
            'parse_mode' => 'html'
        ]);
    }
}

if($text1 =="Banan" or $text1 == "Xayr"&&$fadmin==$admin){
    $vaqti = strtotime("+10800000 minutes");
    bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "🔹 <a href='tg://user?id=$id'>$from_user_first_name</a> guruhdan <b>ban</b> bo‘ldiz!",
        'parse_mode'=>'html'
    ]);
}

if((stripos($capt,"https://")!==false)  or (stripos($capt,"http://")!==false) or (stripos($capt,"@")!==false) or (stripos($capt,"bot?start=")!==false)  or (stripos($mtext,"bot?start=")!==false)  or  (stripos($mtext,"http://") !==false) or  (stripos($mtext,"https://")!==false)){
    if((stripos($capt,"☣")!==false) or (stripos($mtext,"☣")!==false)){
    }else{
        $gett = bot('getChatMember', [
            'chat_id' => $chat_id,
            'user_id' => $fadmin,
        ]);
        $get = $gett->result->status;
        if($get =="member"){
            $minut = strtotime("+120 minutes");
            bot('restrictChatMember', [
                'chat_id' => $chat_id,
                'user_id' => $fadmin,
                'until_date' => $minut,
                'can_send_messages' => false,
                'can_send_media_messages' => false,
                'can_send_other_messages' => false,
                'can_add_web_page_previews' => false
            ]);
            bot('deleteMessage', [
                'chat_id' => $chat_id,
                'message_id' => $mid,
            ]);
            bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
            bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' => "🔹 <a href='tg://user?id=$fadmin'>$first_name</a> siz <b>2 soat</b>ga <b>Read only</b> rejimiga tushdingiz.\n⚠ <b>Sabab:</b> <i>Reklama!</i> ",
                'parse_mode' => 'html'
            ]);
        }
    }
}

if((stripos($mtext,"dalbayop")!==false)  or (stripos($mtext,"oneni")!==false)  or (stripos($mtext,"skaman")!==false) or (stripos($mtext,"sikaman")!==false) or (stripos($mtext,"Axmoq")!==false) or (stripos($mtext,"chumo")!==false)  or  (stripos($mtext,"dalbayob")!==false) or  (stripos($mtext,"skay")!==false) or (stripos($mtext,"seks")!==false) or (stripos($mtext,"dalban")!==false) or (stripos($mtext,"yiban")!==false) or (stripos($mtext,"jalab")!==false) or (stripos($mtext,"скаман")!==false) or (stripos($mtext,"qanjiq")!==false) or (stripos($mtext,"чумо")!==false)  or  (stripos($mtext,"далбаёб")!==false) or  (stripos($mtext,"скай")!==false) or (stripos($mtext,"секс")!==false) or (stripos($mtext,"далбан")!==false) or (stripos($mtext,"йибан")!==false) or (stripos($mtext,"haqorat")!==false) or (stripos($mtext,"жалаб")!==false) or (stripos($mtext,"кутинга")!==false) or (stripos($mtext,"kotinga")!==false) or  (stripos($mtext,"куток")!==false)  or  (stripos($mtext,"qotoq")!==false) or  (stripos($mtext,"naxuy")!==false) or (stripos($mtext,"хуй")!==false) or (stripos($mtext,"сучка")!==false) or (stripos($mtext,"suchka")!==false) or (stripos($mtext,"омини")!==false) or (stripos($mtext,"омнга")!==false) or  (stripos($mtext,"сикаман")!==false)  or  (stripos($mtext,"гандон")!==false) or  (stripos($mtext,"сука")!==false) or (stripos($mtext,"жопа")!==false) or (stripos($mtext,"omingni")!==false) or (stripos($mtext,"ominga")!==false) or (stripos($mtext,"gandon")!==false) and $fadmin !== $admin){
    $gett = bot('getChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
    ]);
    $get = $gett->result->status;
    if($get =="member"){
        $minut = strtotime("+10800 minutes");
        bot('restrictChatMember', [
            'chat_id' => $chat_id,
            'user_id' => $fadmin,
            'until_date' => $minut,
            'can_send_messages' => false,
            'can_send_media_messages' => false,
            'can_send_other_messages' => false,
            'can_add_web_page_previews' => false
        ]);
        bot('deleteMessage', [
            'chat_id' => $chat_id,
            'message_id' => $mid
        ]);
        bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "🔹 <a href='tg://user?id=$fadmin'>$first_name</a> <b>3 kun</b>ga <b>Read only</b> rejimiga tushdirildi.\n⚠ <b>Sabab:</b> <i>Haqorat qildi!</i> ",
            'parse_mode' => 'html'
        ]);
    }
}

if($text1 == "Addpm" or $text1 == "addpm"){
    $gett = bot('getChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
    ]);
    $get = $gett->result->status;
    if($get =="administrator" or $get == "creator"){
        bot('promoteChatMember',[
            'chat_id'=>$chat_id,
            'user_id'=>$id,
            'can_change_info'=>true,
            'can_post_messages'=>false,
            'can_edit_messages'=>false,
            'can_delete_messages'=>true,
            'can_invite_users'=>true,
            'can_restrict_members'=>true,
            'can_pin_messages'=>true,
            'can_promote_members'=>false
        ]);
        bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"✅ <a href='tg://user?id=$id'>$from_user_first_name</a> sizni tabriklayman , siz guruh <b>adminstratorisiz❗️</b>",
            'parse_mode'=>'html'
        ]);
    }
}

if($text1 == "Delpm" or $text1 == "delpm"){
    $gett = bot('getChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
    ]);
    $get = $gett->result->status;
    if($get == "administrator" or $get == "creator"){
        bot('promoteChatMember',[
            'chat_id'=>$chat_id,
            'user_id'=>$id,
            'can_change_info'=>false,
            'can_post_messages'=>false,
            'can_edit_messages'=>false,
            'can_delete_messages'=>false,
            'can_invite_users'=>false,
            'can_restrict_members'=>false,
            'can_pin_messages'=>false,
            'can_promote_members'=>false
        ]);
        bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
        bot('sendmessage',[
            'chat_id'=> $chat_id,
            'text'=>"☑ <a href='tg://user?id=$id'>$from_user_first_name</a> siz endi guruh adminstratori <b>emassiz</b>❗️",
            'parse_mode'=>'html'
        ]);
    }
}

if($text1 == "Unro" or $text1 == "UNRO" or $text1 == "unro"){
    $gett = bot('getChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
    ]);
    $get = $gett->result->status;
    if($get =="administrator" or $get == "creator"){
        bot('restrictChatMember',[
            'chat_id'=>$chat_id,
            'user_id'=>$id,
            'can_send_messages'=>true,
            'can_send_media_messages'=>true,
            'can_send_other_messages'=>true,
            'can_add_web_page_previews'=>true
        ]);
        bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"☑ <a href='tg://user?id=$id'>$from_user_first_name</a> sizdan cheklov olindi, guruhda <b>yozishingiz mumkin!</b>\nEndi qoidani <b>buzmaysiz</b> degan umiddaman❗️",
            'parse_mode'=>'html'
        ]);
    }
}

if($text1=="Pmadd"&&$fadmin==$admin) {
    bot('promoteChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$id,
        'can_change_info'=>true,
        'can_post_messages'=>false,
        'can_edit_messages'=>false,
        'can_delete_messages'=>true,
        'can_invite_users'=>true,
        'can_restrict_members'=>true,
        'can_pin_messages'=>true,
        'can_promote_members'=>false
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage',[
        'chat_id'=> $chat_id,
        'text'=>"✅ <a href='tg://user?id=$id'>$from_user_first_name</a> sizni tabriklayman , siz guruh <b>adminstratorisiz❗️</b>",
        'parse_mode'=>'html'
    ]);
}

if($text1=="Pmme"&&$fadmin==$admin) {
    bot('promoteChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$admin,
        'can_change_info'=>true,
        'can_post_messages'=>false,
        'can_edit_messages'=>false,
        'can_delete_messages'=>true,
        'can_invite_users'=>true,
        'can_restrict_members'=>true,
        'can_pin_messages'=>true,
        'can_promote_members'=>true
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    $ms = bot('sendmessage',[
        'chat_id'=> $chat_id,
        'text'=>"✅",
        'parse_mode'=>'html'
    ]);
    $nat = $ms->result->message_id;
    bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $nat,
    ]);
    bot('deleteMessage', [
        'chat_id'=>$chat_id,
        'message_id'=>$mesid
    ]);
}

if($text1=="Pmu"&&$fadmin==$admin) {
    bot('promoteChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$id,
        'can_change_info'=>true,
        'can_post_messages'=>false,
        'can_edit_messages'=>false,
        'can_delete_messages'=>true,
        'can_invite_users'=>true,
        'can_restrict_members'=>true,
        'can_pin_messages'=>true,
        'can_promote_members'=>true
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    $ms = bot('sendmessage',[
        'chat_id'=> $chat_id,
        'text'=>"✅",
        'parse_mode'=>'html'
    ]);
    $nat = $ms->result->message_id;
    bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $nat,
    ]);
    bot('deleteMessage', [
        'chat_id'=>$chat_id,
        'message_id'=>$mesid
    ]);
}

if ($text1=='Del'&&$fadmin==$admin) {
    bot('deleteMessage', [
        'chat_id'=>$chat_id,
        'message_id'=>$mesid
    ]);
    bot('deleteMessage', [
        'chat_id'=>$chat_id,
        'message_id'=>$message_id
    ]);
}

if($text1 == "pin" or $text1 == "Pin" or $text1 == "PIn" or $text1 == "PIN" or $text1 == "piN" or $text1 == "pIN" or $text1 == "pIn" or $text1 == "pIN@Keshanewbot"){
    $gett = bot('getChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
    ]);
    $get = $gett->result->status;
    if($get =="administrator" or $get == "creator"){
        bot('pinChatMessage',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id
        ]);
    }
}

if($text1=="bye"&&$fadmin==$admin) {
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "<b>Ho‘p xo‘jayin</b>.",
        'parse_mode' => 'html'
    ]);
    bot('leaveChat',[
        'chat_id'=>$chat_id
    ]);
}

if((stripos($mtext,"Sw")!==false) and $fadmin == $admin){
    $sx=explode("\n",$text1);
    $matn = $sx[2];
    $idsi  = $sx[1];
    bot('sendMessage',[
        'chat_id'=>$idsi,
        'text'=>$matn,
        'parse_mode'=>'markdown',
        'disable_web_page_preview' => true,
    ]);
    bot('sendMessage',[
        'chat_id'=>$admin,
        'text'=>"✅",
    ]);
}

if($text1 == "ban" or $text1 == "Ban" or $text1== "/Ban" or  $text1 == "/ban"){
    $gett = bot('getChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
    ]);
    $get = $gett->result->status;
    if($get =="administrator" or $get == "creator"){
        $vaqti = strtotime("+108000000 minutes");
        bot('kickChatMember', [
            'chat_id' => $chat_id,
            'user_id' => $id,
            'until_date' => $vaqti,
        ]);
        bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
        bot('sendMessage', [
            'chat_id'=>$chat_id,
            'text' => "🔹 <a href='tg://user?id=$id'>$from_user_first_name</a> guruhdan <b>ban</b> bo‘ldi!",
            'parse_mode'=>'html'
        ]);
    }
}

if($text1 == "Unban"  or  $text1 == "/unban"){
    $gett = bot('getChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
    ]);
    $get = $gett->result->status;
    if($get =="administrator" or $get == "creator"){
        bot('unbanChatMember', [
            'chat_id' => $chat_id,
            'user_id' => $id,
        ]);
        bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
        bot('sendMessage', [
            'chat_id'=>$chat_id,
            'text' => "🔹 <a href='tg://user?id=$id'>$from_user_first_name</a> <b>ban</b>dan olindi!",
            'parse_mode'=>'html'
        ]);
    }
}

if($text1 == "warn" or $text1 == "Warn" or $text1 == "/warn"){
    $gett = bot('getChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
    ]);
    $get = $gett->result->status;
    if($get =="administrator" or $get == "creator"){
        $warn = file_get_contents("warn/$chat_id&$id.dat");
        if($warn){
            $warn +=1;
            file_put_contents("warn/$chat_id&$id.dat","$warn");
            if($warn !=3){
                bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
                $oldi = bot('sendmessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> <b>ogohlantirish oldi.</b>\nEndi undagi ogohlantirishlar soni <b>$warn</b>/3.",
                    'parse_mode'=>'html'
                ]);
            }else{
                bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
                bot('sendmessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> shu vaqtgacha unga berilgan ogohlantirishlarga <b>befarq bo‘ldi</b>, jazo sifatida esa guruhdan <b>chetlatiladi!</b>",
                    'parse_mode'=>'html'
                ]);
                $vaqti = strtotime("+10800000 minutes");
                bot('kickChatMember', [
                    'chat_id' => $chat_id,
                    'user_id' => $id,
                    'until_date' => $vaqti,
                ]);
                $warn = 0;
                file_put_contents("warn/$chat_id&$id.dat","$warn");
            }
        }else{
            $warn = 1;
            file_put_contents("warn/$chat_id&$id.dat","$warn");
            bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
            bot('sendmessage',[
                'chat_id'=>$chat_id,
                'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> <b>ogohlantirish oldi.</b>\nEndi undagi ogohlantirishlar soni <b>$warn</b>/3.",
                'parse_mode'=>'html'
            ]);
        }
    }
}

if($text1 == "unwarn" or $text1 == "Unwarn" or $text1 == "/unwarn"){
    $gett = bot('getChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
    ]);
    $get = $gett->result->status;
    if($get =="administrator" or $get == "creator"){
        $warn = 0;
        file_put_contents("warn/$chat_id&$id.dat","$warn");
        bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> dan barcha <b>ogohlantirishlar</b> olib tashlandi.\nEndi undagi ogohlantirishlar soni <b>$warn</b>/3.",
            'parse_mode'=>'html'
        ]);
    }
}

$replyik = $message->reply_to_message->text;
$yubbi = "📨Yuboriladigan xabar matnini kiriting. Xabar turi markdown";

if($text1 == "/sendu" and $chat_id == $admin){
    ty($chat_id);
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$yubbi,
    ]);
    file_put_contents("stat/$chat_id.step","user");
}

if($step == "user" and $chat_id == $admin){
    if($text1 == "/otmen"){
        file_put_contents("stat/$chat_id.step","");
    }else{
        $idszs=explode("\n",$userlar);
        foreach($idszs as $idlat){
            $userr = bot('sendMessage',[
                'chat_id'=>$idlat,
                'text'=>$text1,
                'parse_mode'=>'markdown',
                'disable_web_page_preview' => true,
            ]);
        }
        if($userr){
            bot('sendmessage',[
                'chat_id'=>$admin,
                'text'=>"Userlarga yuborildi!",
            ]);
            file_put_contents("stat/$chat_id.step","");
        }
    }
}

if($text1 == "/sendg" and $chat_id == $admin){
    ty($chat_id);
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$yubbi,
    ]);
    file_put_contents("stat/$chat_id.step","guruh");
}

if($step == "guruh" and $chat_id == $admin){
    if($text1 == "/otmen"){
        file_put_contents("stat/$chat_id.step","");
    }else{
        $idszs=explode("\n",$guruhlar);
        foreach($idszs as $idlat){
            $guruu =  bot('sendMessage',[
                'chat_id'=>$idlat,
                'text'=>$text1,
                'parse_mode'=>'markdown',
                'disable_web_page_preview' => true,
            ]);
        }
        if($guruu){
            bot('sendmessage',[
                'chat_id'=>$admin,
                'text'=>"Guruhlarga yuborildi!",
            ]);
            file_put_contents("stat/$chat_id.step","");
        }
    }
}
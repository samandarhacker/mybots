<?php

ob_start();

$API_KEY = '5212593685:AAG_Np410tyuW0MwIW54rkBD68EvzRvyuTU';
//// Bizni telegramda @FAST_CODER kanalda kuzating
//////////// @FAST_CODER kanali uchun maxsus tarqatildi
///////////  manba bilan olinglar
///////////  @Rustam_Hikmatullayev
define('API_KEY',$API_KEY);
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
function sendmessage($chat_id, $text, $model){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$text,
        'parse_mode'=>$model
    ]);
}
function sendaction($chat_id, $action){
    bot('sendchataction',[
        'chat_id'=>$chat_id,
        'action'=>$action
    ]);
}
function Forward($Abror,$Abroriy,$Qitmirvoy)
{
    bot('ForwardMessage',[
        'chat_id'=>$Abror,
        'from_chat_id'=>$Abroriy,
        'message_id'=>$Qitmirvoy
    ]);
}
function sendphoto($chat_id, $photo, $action){
    bot('sendphoto',[
        'chat_id'=>$chat_id,
        'photo'=>$photo,
        'action'=>$action
    ]);
}
function objectToArrays($object)
{
    if (!is_object($object) && !is_array($object)) {
        return $object;
    }
    if (is_object($object)) {
        $object = get_object_vars($object);
    }
    return array_map("objectToArrays", $object);
}
//======ᴏᴍᴀʀ ʜᴀѕʜᴍ ‏ ⌯┆-‏𖤍=========//
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
mkdir("data/$from_id");
$message_id = $message->message_id;

$text = $message->text;
$ali = file_get_contents("data/$from_id/ali.txt");
$ADMIN = 115056828;
$to =  file_get_contents("data/$from_id/token.txt");
$url =  file_get_contents("data/$from_id/url.txt");
//// Bizni telegramda @FAST_CODER kanalda kuzating
//////////// @FAST_CODER kanali uchun maxsus tarqatildi
///////////  manba bilan olinglar
///////////  @Rustam_Hikmatullayev
if($text == "/start"){

    if (!file_exists("data/$from_id/ali.txt")) {
        mkdir("data/$from_id");
        file_put_contents("data/$from_id/ali.txt","none");
        $myfile2 = fopen("Member.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "$from_id\n");
        fclose($myfile2);
    }

    sendAction($chat_id, 'typing');
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"Assalom Alaykum! @WebHooklash_bot ga Hush Kelibsiz! Kerakli bo’limni tanlang:",
        'reply_markup'=>json_encode([
            'resize_keyboard'=>true,
            'keyboard'=>[
                [['text'=>"Webhookni sozlash 🔧"],['text'=>"Token haqida ma’lumot 📝"]],
                [['text'=>"Tokenni o’chirish 💧"]]
            ]
        ])
    ]);
}
elseif($text == "🏠 Bosh Menyu"){
    file_put_contents("data/$from_id/ali.txt","no");
    file_put_contents("data/$from_id/token.txt","no");
    file_put_contents("data/$from_id/url.txt","no");
    sendAction($chat_id, 'typing');
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"🏠 Bosh Menyuga Qaytdingiz",
        'parse_mode'=>'MarkDown',
        'reply_markup'=>json_encode([
            'resize_keyboard'=>true,
            'keyboard'=>[
                [['text'=>"Webhookni sozlash 🔧"],['text'=>"Token haqida ma’lumot 📝"]],
                [['text'=>"Tokenni o’chirish 💧"]]
            ]
        ])
    ]);
}
//// Bizni telegramda @FAST_CODER kanalda kuzating
//////////// @FAST_CODER kanali uchun maxsus tarqatildi
///////////  manba bilan olinglar
///////////  @Rustam_Hikmatullayev
elseif($text == "Webhookni sozlash 🔧"){
    sendAction($chat_id, 'typing');
    file_put_contents("data/$from_id/ali.txt","to");
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"Marhamat, Tokenni yuboring 📊",
        'reply_markup'=>json_encode([
            'resize_keyboard'=>true,
            'keyboard'=>[
                [
                    ['text'=>"🏠 Bosh Menyu"]
                ],
            ]
        ])
    ]);
}
elseif($ali == "to"){
    $token = $text;

    $ali1 = json_decode(file_get_contents("https://api.telegram.org/bot" . $token . "/getwebhookinfo"));
    $ali2 = json_decode(file_get_contents("https://api.telegram.org/bot" . $token . "/getme"));
    //==================
    $tik2 = objectToArrays($ali1);
    $ur = $tik2["result"]["url"];
    $ok2 = $tik2["ok"];
    $tik1 = objectToArrays($ali2);
    $un = $tik1["result"]["username"];
    $fr = $tik1["result"]["first_name"];
    $id = $tik1["result"]["id"];
    $ok = $tik1["ok"];
    if ($ok != 1) {
        //Token Not True
        SendMessage($chat_id, "");
    } else{
        file_put_contents("data/$from_id/ali.txt","url");
        file_put_contents("data/$from_id/token.txt",$text);
        SendAction($chat_id,'typing');
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"Juda Soz! Endi esa serveringizdagi bot fayli manzilini kiriting:",
        ]);
    }
}
elseif($ali == "url"){
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$text))
    {
        SendAction($chat_id,'typing');
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"🚫 bir necha xato xabarlari mavjud",
        ]);
    }
    else {
        file_put_contents("data/$from_id/ali.txt","no");
        file_put_contents("data/$from_id/url.txt",$text);
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"• Biroz kutib turing 📡 Iltimos, 🍥",
        ]);
        sleep(1);
        bot('editmessagetext',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id + 1,
            'text'=>"• Bir oz kutib turing ⚡️ On",
        ]);
        bot('editmessagetext',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id + 1,
            'text'=>" 🔍 Kiritgan ma’lumotlaringizni tekshirib oling:
    
•🤖 Tokeningiz •
    $to
•📍 Sayt manzili •
    $text
    
•🔰 To'g'ri kiritgan bo'lsangiz:
/setwebhook 👈 bosing",
        ]);
    }
}
elseif($text == "/setwebhook" ){
    if($to != "no"){
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"• Biroz kutib turing 📡 Iltimos, 🍥",
        ]);
        sleep(1);
        bot('editmessagetext',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id + 1,
            'text'=>"• Biroz kutib turing 📡 Iltimos, 🍥",
        ]);
        file_get_contents("https://api.telegram.org/bot$to/setwebhook?url=$url");
        sleep(1);
        bot('editmessagetext',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id + 1,
            'text'=>"• Bir oz kutib turing ⚡️ On",
        ]);
        sleep(1);
        file_put_contents("data/$from_id/ali.txt","no");
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id + 1,
            'text'=>"✅ Webhookni sozlash muvaffaqqiyatli bajarildi!",
            'parse_mode'=>'MarkDown',
            'reply_markup'=>json_encode([
                'resize_keyboard'=>true,
                'keyboard'=>[
                    [['text'=>"Webhookni sozlash 💎"],['text'=>" Token haqida ma’lumot 📝"]],
                    [['text'=>"Tokenni o’chirish 💧"]]
                ]
            ])
        ]);
    }

}
///////// Bizni telegramda @FAST_CODER kanalda kuzating
//////////// @FAST_CODER kanali uchun maxsus tarqatildi
///////////  manba bilan olinglar
///////////  @Rustam_Hikmatullayev
elseif($text == "Token haqida ma’lumot 📝" ){
    file_put_contents("data/$from_id/ali.txt","token");
    sendaction($chat_id,'typing');
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"Marhamat, Tokenni yuboring 📊",
        'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'keyboard'=>[
                [['text'=>'🏠 Bosh Menyu']],
            ],'resize_keyboard'=>true])
    ]);
}
elseif($ali == "token"){
    $token = $text;

    $ali1 = json_decode(file_get_contents("https://api.telegram.org/bot" . $token . "/getwebhookinfo"));
    $ali2 = json_decode(file_get_contents("https://api.telegram.org/bot" . $token . "/getme"));
    //==================
    $tik2 = objectToArrays($ali1);
    $ur = $tik2["result"]["url"];
    $ok2 = $tik2["ok"];
    $tik1 = objectToArrays($ali2);
    $un = $tik1["result"]["username"];
    $fr = $tik1["result"]["first_name"];
    $id = $tik1["result"]["id"];
    $ok = $tik1["ok"];
    if ($ok != 1) {
        //Token Not True
        SendMessage($chat_id, "Token noto’g’ri yuborildi📬");
    } else{
        file_put_contents("data/$from_id/ali.txt","no");

        SendAction($chat_id,'typing');
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"• Biroz kutib turing 📡 Iltimos, 🍥",
        ]);
        sleep(1);
        bot('editmessagetext',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id + 1,
            'parse_mode'=>'html',
            'text'=>"• Ma’lumot mavjud

• Bot Useri • @$un
• Bot IDsi • $id
• Botning nomi <b> $fr </b> ekan• 
• Fayl havolasi ⤵️
$ur
",
        ]);
    }
}
elseif($text == "Tokenni o’chirish 💧" ){
    file_put_contents("data/$from_id/ali.txt","del");
    sendaction($chat_id,'typing');
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"Marhamat, Tokenni yuboring 📊",
        'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'keyboard'=>[
                [['text'=>'🏠 Bosh Menyu']],
            ],'resize_keyboard'=>true])
    ]);
}
elseif($ali == "del"){
    $token = $text;

    $ali1 = json_decode(file_get_contents("https://api.telegram.org/bot" . $token . "/getwebhookinfo"));
    $ali2 = json_decode(file_get_contents("https://api.telegram.org/bot" . $token . "/getme"));
    //==================
    $tik2 = objectToArrays($ali1);
    $ur = $tik2["result"]["url"];
    $ok2 = $tik2["ok"];
    $tik1 = objectToArrays($ali2);
    $un = $tik1["result"]["username"];
    $fr = $tik1["result"]["first_name"];
    $id = $tik1["result"]["id"];
    $ok = $tik1["ok"];
    if ($ok != 1) {
        //Token Not True
        SendMessage($chat_id, "Token noto’g’ri yuborildi");
    } else{
        file_put_contents("data/$from_id/ali.txt","no");

        SendAction($chat_id,'typing');
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"• Biroz kutib turing 📡 Iltimos, 🍥",
        ]);
        sleep(1);
        bot('editmessagetext',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id + 1,
            'text'=>"• Bir oz kutib turing ⚡️ O’chirish ⚙",
        ]);
    }
    file_get_contents("https://api.telegram.org/bot$text/deletewebhook");
    sleep(1);
    bot('editmessagetext',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id + 1,
        'text'=>"• ⚡️ Webhook muvaffaqiyatli o’chirildi! 🗒 •",
    ]);
    sleep(1);
    file_put_contents("data/$from_id/ali.txt","no");
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id + 1,
        'text'=>"🏠 Bosh Menyuga Qaytdingiz",
        'parse_mode'=>'MarkDown',
        'reply_markup'=>json_encode([
            'resize_keyboard'=>true,
            'keyboard'=>[
                [['text'=>"Webhookni sozlash 🔧"],['text'=>"Token haqida ma’lumot 📝"]],
                [['text'=>"Tokenni o’chirish 💧"]]
            ]
        ])
    ]);
}
//// Bizni telegramda @FAST_CODER kanalda kuzating
//////////// @FAST_CODER kanali uchun maxsus tarqatildi
///////////  manba bilan olinglar
///////////  @Rustam_Hikmatullayev
elseif($text == "/panel" && $chat_id == $ADMIN){
    sendaction($chat_id, "typing");
    bot('sendmessage', [
        'chat_id' =>$chat_id,
        'text' =>"Salom Abroriy, Siz Admin Paneldasiz!",
        'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'keyboard'=>[
                [
                    ['text'=>"Bot a’zolari soni"],['text'=>"Abonentlarga xabar"],['text'=>"To’g’ridan-to’g’ri abonentlar 💎"]
                ]
            ],'resize_keyboard'=>true
        ])
    ]);
}
elseif($text == "Bot a’zolari soni" && $chat_id == $ADMIN){
    sendaction($chat_id,'typing');
    $user = file_get_contents("Member.txt");
    $member_id = explode("\n",$user);
    $member_count = count($member_id) -1;
    sendmessage($chat_id , "Ro’yxatdan soni: $member_count" , "html");
}
elseif($text == "Abonentlarga xabar" && $chat_id == $ADMIN){
    file_put_contents("data/$from_id/ali.txt","send");
    sendaction($chat_id,'typing');
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"Siz yubormoqchi bo’lgan xabarni matn shaklida yuboring",
        'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'keyboard'=>[
                [['text'=>'/panel']],
            ],'resize_keyboard'=>true])
    ]);
}
elseif($ali == "send" && $chat_id == $ADMIN){
    file_put_contents("data/$from_id/ali.txt","no");
    SendAction($chat_id,'typing');
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"Umumiy xabar yuborildi",
    ]);
    $all_member = fopen( "Member.txt", "r");
    while( !feof( $all_member)) {
        $user = fgets( $all_member);
        SendMessage($user,$text,"html");
    }
}
elseif($text == "To’g’ridan-to’g’ri abonentlar 💎" && $chat_id == $ADMIN){
    file_put_contents("data/$from_id/ali.txt","fwd");
    sendaction($chat_id,'typing');
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"Yo’lingizni nashr eting 👣",
        'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'keyboard'=>[
                [['text'=>'/panel']],
            ],'resize_keyboard'=>true])
    ]);
}
elseif($ali == "fwd" && $chat_id == $ADMIN){
    file_put_contents("data/$from_id/ali.txt","no");
    SendAction($chat_id,'typing');
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"Hammaga Shunday Yetkazildi 👇",
    ]);
    $forp = fopen( "Member.txt", 'r');
    while( !feof( $forp)) {
        $fakar = fgets( $forp);
        Forward($fakar, $chat_id,$message_id);
    }
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"Habaringiz Hammaga Yuborildi",
    ]);
}
//// Bizni telegramda @FAST_CODER kanalda kuzating
//////////// @FAST_CODER kanali uchun maxsus tarqatildi
///////////  manba bilan olinglar
///////////  @Rustam_Hikmatullayev
?>
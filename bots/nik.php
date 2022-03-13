<?php
//    ___________________________________///
//      ÷÷÷÷÷÷÷ FAST CODER ÷÷÷÷÷÷÷÷  ///
//      ÷÷÷÷÷÷÷÷ PHP TEAM ÷÷÷÷÷÷÷÷  ///
//      ÷÷÷÷÷÷÷ @Fast_Coder ÷÷÷÷÷÷÷  ///
//     ÷÷÷ @Rustam_Hikmatullayev ÷÷÷ ///
//    __________________________________///
ob_start();
$API_KEY = "API_KEY_CONST";#توكن البوت
define('API_KEY',$API_KEY);
#---
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{return json_decode($res);}}

#-----------------(PHPCreate_BOTs)--------------------#

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;

$info = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@botBOTS&user_id=".$from_id));
$per = $info->result->status;
if ($per == 'left') {
    if (!in_array($chat_id, $user)) {
        file_put_contents("gm.txt", $chat_id."\n",FILE_APPEND);
    }
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"
 ⚠️ عليك الأشتراك في القناة اولآ
bot yaratuvchi @PHPCreate_BOT
"
    ]);
} else {

#-----------------(Start)--------------------#

    if($text == '/start'){
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"
َ$name botga hush kelibsiz siz bot yordamida turli ko'rinishdagi niglar yaratishinggiz mumkun buning uchun istalgan matinni yubiring
ℓ🌹- [Bot yaratuvchi](t.me/Mybots_uz_bot )

ℓ📌- [manashunday bot yaratish](t.me/Mybots_uz_bot )
ℓ📌- Yanada koproq qiziqarli bot ochishga harakat qilamiz
-
ℓ👨🏼‍💻- [Bizni jamoamiz](t.me/python3600)
",
        ]);
    }
    if($_GET['s']){
        $text = 'sssasa';
        echo $count = count($text);
    }

#-----------------(PHP_master_class)--------------------#

    if($text != '/start'and$text!='/us' and $text != "/admin" and $text != "Foydalanuvchilarga xabar yuborish"){
#-----------------(Mroan-1)--------------------#
        $bot = str_replace('a', 'α', $text);
        $bot = str_replace('b', 'в', $bot);
        $bot = str_replace('c', '¢', $bot);
        $bot = str_replace('d', '∂', $bot);
        $bot = str_replace('e', 'є', $bot);
        $bot = str_replace('f', 'ƒ', $bot);
        $bot = str_replace('g', 'g', $bot);
        $bot = str_replace('h', 'н', $bot);
        $bot = str_replace('i', 'ι', $bot);
        $bot = str_replace('j', 'נ', $bot);
        $bot = str_replace('k', 'к', $bot);
        $bot = str_replace('l', 'ℓ', $bot);
        $bot = str_replace('m', 'м', $bot);
        $bot = str_replace('n', 'η', $bot);
        $bot = str_replace('o', 'σ', $bot);
        $bot = str_replace('p', 'ρ', $bot);
        $bot = str_replace('q', 'q', $bot);
        $bot = str_replace('r', 'я', $bot);
        $bot = str_replace('s', 'ѕ', $bot);
        $bot = str_replace('t', 'т', $bot);
        $bot = str_replace('u', 'υ', $bot);
        $bot = str_replace('v', 'ν', $bot);
        $bot = str_replace('w', 'ω', $bot);
        $bot = str_replace('x', 'χ', $bot);
        $bot = str_replace('y', 'у', $bot);
        $bot = str_replace('z', 'z', $bot);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot." "
        ]);
#-----------------(Mroan-2)--------------------#
        $bot = $text;
        $bot = str_replace('a', 'Á', $bot);
        $bot = str_replace('b', 'ß', $bot);
        $bot = str_replace('c', 'Č', $bot);
        $bot = str_replace('d', 'Ď', $bot);
        $bot = str_replace('e', 'Ĕ', $bot);
        $bot = str_replace('f', 'Ŧ', $bot);
        $bot = str_replace('g', 'Ğ', $bot);
        $bot = str_replace('h', 'Ĥ', $bot);
        $bot = str_replace('i', 'Ĩ', $bot);
        $bot = str_replace('j', 'Ĵ', $bot);
        $bot = str_replace('k', 'Ķ', $bot);
        $bot = str_replace('l', 'Ĺ', $bot);
        $bot = str_replace('m', 'M', $bot);
        $bot = str_replace('n', 'Ń', $bot);
        $bot = str_replace('o', 'Ő', $bot);
        $bot = str_replace('p', 'P', $bot);
        $bot = str_replace('q', 'Q', $bot);
        $bot = str_replace('r', 'Ŕ', $bot);
        $bot = str_replace('s', 'Ś', $bot);
        $bot = str_replace('t', 'Ť', $bot);
        $bot = str_replace('u', 'Ú', $bot);
        $bot = str_replace('v', 'V', $bot);
        $bot = str_replace('w', 'Ŵ', $bot);
        $bot = str_replace('x', 'Ж', $bot);
        $bot = str_replace('y', 'Ŷ', $bot);
        $bot = str_replace('z', 'Ź', $bot);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot." "
        ]);
#-----------------(Mroan-3)--------------------#
        $bot = $text;
        $bot = str_replace('a', 'ค', $bot);
        $bot = str_replace('b', '๒', $bot);
        $bot = str_replace('c', 'ς', $bot);
        $bot = str_replace('d', '๔', $bot);
        $bot = str_replace('e', 'є', $bot);
        $bot = str_replace('f', 'Ŧ', $bot);
        $bot = str_replace('g', 'g', $bot);
        $bot = str_replace('h', 'ђ', $bot);
        $bot = str_replace('i', 'เ', $bot);
        $bot = str_replace('j', 'ן', $bot);
        $bot = str_replace('k', 'к', $bot);
        $bot = str_replace('l', 'l', $bot);
        $bot = str_replace('m', '๓', $bot);
        $bot = str_replace('n', 'ภ', $bot);
        $bot = str_replace('o', '๏', $bot);
        $bot = str_replace('p', 'ק', $bot);
        $bot = str_replace('q', 'ợ', $bot);
        $bot = str_replace('r', 'г', $bot);
        $bot = str_replace('s', 'ร', $bot);
        $bot = str_replace('t', 't', $bot);
        $bot = str_replace('u', 'ย', $bot);
        $bot = str_replace('v', 'ש', $bot);
        $bot = str_replace('w', 'ฬ', $bot);
        $bot = str_replace('x', 'א', $bot);
        $bot = str_replace('y', 'ץ', $bot);
        $bot = str_replace('z', 'z', $bot);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot." "
        ]);
#-----------------(Mroan-4)--------------------#
        $bot = $text;
        $bot = str_replace('a', 'ä', $bot);
        $bot = str_replace('b', 'b', $bot);
        $bot = str_replace('c', 'ċ', $bot);
        $bot = str_replace('d', 'd', $bot);
        $bot = str_replace('e', 'ë', $bot);
        $bot = str_replace('f', 'f', $bot);
        $bot = str_replace('g', 'ġ', $bot);
        $bot = str_replace('h', 'h', $bot);
        $bot = str_replace('i', 'ï', $bot);
        $bot = str_replace('j', 'j', $bot);
        $bot = str_replace('k', 'k', $bot);
        $bot = str_replace('l', 'l', $bot);
        $bot = str_replace('m', 'm', $bot);
        $bot = str_replace('n', 'n', $bot);
        $bot = str_replace('o', 'ö', $bot);
        $bot = str_replace('p', 'p', $bot);
        $bot = str_replace('q', 'q', $bot);
        $bot = str_replace('r', 'r', $bot);
        $bot = str_replace('s', 's', $bot);
        $bot = str_replace('t', 't', $bot);
        $bot = str_replace('u', 'ü', $bot);
        $bot = str_replace('v', 'v', $bot);
        $bot = str_replace('w', 'w', $bot);
        $bot = str_replace('x', 'x', $bot);
        $bot = str_replace('y', 'ÿ', $bot);
        $bot = str_replace('z', 'ż', $bot);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot." "
        ]);
#-----------------(Mroan-5)--------------------#
        $bot = $text;
        $bot = str_replace('a', 'ɑ̝̚', $bot);
        $bot = str_replace('b', 'в̝̚', $bot);
        $bot = str_replace('c', 'c̝̚', $bot);
        $bot = str_replace('d', 'd̝̚', $bot);
        $bot = str_replace('e', 'ǝ̝̚', $bot);
        $bot = str_replace('f', 'г̵̵', $bot);
        $bot = str_replace('g', 'G̝̚', $bot);
        $bot = str_replace('h', 'н̝̚', $bot);
        $bot = str_replace('i', 'ı̝̚', $bot);
        $bot = str_replace('j', 'τ', $bot);
        $bot = str_replace('k', 'к̝', $bot);
        $bot = str_replace('l', 'l̝̚', $bot);
        $bot = str_replace('m', 'м̝̚', $bot);
        $bot = str_replace('n', 'и̝̚', $bot);
        $bot = str_replace('o', 'σ̝̚', $bot);
        $bot = str_replace('p', 'ρ̝̚', $bot);
        $bot = str_replace('q', 'Q̝̚', $bot);
        $bot = str_replace('r', 'я̝̚', $bot);
        $bot = str_replace('s', 'ƨ̝̚', $bot);
        $bot = str_replace('t', 'т̝̚', $bot);
        $bot = str_replace('u', 'υ̝̚', $bot);
        $bot = str_replace('v', 'ν̝̚', $bot);
        $bot = str_replace('w', 'ω̝̚', $bot);
        $bot = str_replace('x', 'x̝̚', $bot);
        $bot = str_replace('y', 'ч̝̚', $bot);
        $bot = str_replace('z', 'z̝̚', $bot);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot." "
        ]);
#-----------------(Mroan-6)--------------------#
        $bot = $text;
        $bot = str_replace('a', 'ɑ̃̾', $bot);
        $bot = str_replace('b', 'в̃̾', $bot);
        $bot = str_replace('c', 'c̃̾', $bot);
        $bot = str_replace('d', 'd̃̾', $bot);
        $bot = str_replace('e', 'ǝ̃̾', $bot);
        $bot = str_replace('f', 'г̵̵', $bot);
        $bot = str_replace('g', 'G̃̾', $bot);
        $bot = str_replace('h', 'н̃̾', $bot);
        $bot = str_replace('i', 'ı̃̾', $bot);
        $bot = str_replace('j', 'τ̃̾', $bot);
        $bot = str_replace('k', 'к̃̾', $bot);
        $bot = str_replace('l', 'l̃̾', $bot);
        $bot = str_replace('m', 'м̃̾', $bot);
        $bot = str_replace('n', 'и̃̾', $bot);
        $bot = str_replace('o', 'σ̃̾', $bot);
        $bot = str_replace('p', 'ρ̃̾', $bot);
        $bot = str_replace('q', 'Q̃̾', $bot);
        $bot = str_replace('r', 'я̃̾', $bot);
        $bot = str_replace('s', 'ƨ̃̾', $bot);
        $bot = str_replace('t', 'т̃̾', $bot);
        $bot = str_replace('u', 'υ̃̾', $bot);
        $bot = str_replace('v', 'ν̃̾', $bot);
        $bot = str_replace('w', 'ω̃̾', $bot);
        $bot = str_replace('x', 'x̃̾', $bot);
        $bot = str_replace('y', 'ч̃̾', $bot);
        $bot = str_replace('z', 'z̃̾', $bot);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot." "
        ]);
#-----------------(Mroan-7)--------------------#
        $bot  = $text;
        $bot  = str_replace('a', '[̲̅a̲̅]', $text);
        $bot  = str_replace('b', '[̲̅b̲̅]', $bot);
        $bot  = str_replace('c', '[̲̅c̲̅]', $bot);
        $bot  = str_replace('d', '[̲̅d̲̅]', $bot);
        $bot  = str_replace('e', '[̲̅e̲̅]', $bot);
        $bot  = str_replace('f', '[̲̅f̲̅]', $bot);
        $bot  = str_replace('g', '[̲̅g̲̅]', $bot);
        $bot  = str_replace('h', '[̲̅h̲̅]', $bot);
        $bot  = str_replace('i', '[̲̅i̲̅]', $bot);
        $bot  = str_replace('j', '[̲̅j̲̅]', $bot);
        $bot  = str_replace('k', '[̲̅k̲̅]', $bot);
        $bot  = str_replace('l', '[̲̅l̲̅]', $bot);
        $bot  = str_replace('m', '[̲̅m̲̅]', $bot);
        $bot  = str_replace('n', '[̲̅n̲̅]', $bot);
        $bot  = str_replace('o', '[̲̅o̲̅]', $bot);
        $bot  = str_replace('p', '[̲̅p̲̅]', $bot);
        $bot  = str_replace('q', '[̲̅q̲̅]', $bot);
        $bot  = str_replace('r', '[̲̅r̲̅]', $bot);
        $bot  = str_replace('s', '[̲̅s̲̅]', $bot);
        $bot  = str_replace('t', '[̲̅t̲̅]', $bot);
        $bot  = str_replace('u', '[̲̅u̲̅]', $bot);
        $bot  = str_replace('v', '[̲̅v̲̅]', $bot);
        $bot  = str_replace('w', '[̲̅w̲̅]', $bot);
        $bot  = str_replace('x', '[̲̅x̲̅]', $bot);
        $bot  = str_replace('y', '[̲̅y̲̅]', $bot);
        $bot    = str_replace('z', 'z', $bot);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot." "
        ]);
#-----------------(Mroan-8)--------------------#
        $bot = $text;
        $bot = str_replace('a', 'ɐ', $bot);
        $bot = str_replace('b', 'q', $bot);
        $bot = str_replace('c', 'ɔ', $bot);
        $bot = str_replace('d', 'p', $bot);
        $bot = str_replace('e', 'ǝ', $bot);
        $bot = str_replace('f', 'ɟ', $bot);
        $bot = str_replace('g', 'ƃ', $bot);
        $bot = str_replace('h', 'ɥ', $bot);
        $bot = str_replace('i', 'ı', $bot);
        $bot = str_replace('j', 'ſ', $bot);
        $bot = str_replace('k', 'ʞ', $bot);
        $bot = str_replace('l', 'ן', $bot);
        $bot = str_replace('m', 'ɯ', $bot);
        $bot = str_replace('n', 'u', $bot);
        $bot = str_replace('o', 'o', $bot);
        $bot = str_replace('p', 'd', $bot);
        $bot = str_replace('q', 'b', $bot);
        $bot = str_replace('r', 'ɹ', $bot);
        $bot = str_replace('s', 's', $bot);
        $bot = str_replace('t', 'ʇ', $bot);
        $bot = str_replace('u', 'n', $bot);
        $bot = str_replace('v', 'ʌ', $bot);
        $bot = str_replace('w', 'ʍ', $bot);
        $bot = str_replace('x', 'x', $bot);
        $bot = str_replace('y', 'ʎ', $bot);
        $bot = str_replace('z', 'z', $bot);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot." "
        ]);
#-----------------(Mroan-9)--------------------#
        $bot = $text;
        $bot = str_replace('a', 'ⓐ', $bot);
        $bot = str_replace('b', 'ⓑ', $bot);
        $bot = str_replace('c', '©', $bot);
        $bot = str_replace('d', 'ⓓ', $bot);
        $bot = str_replace('e', 'ⓔ', $bot);
        $bot = str_replace('f', 'ⓕ', $bot);
        $bot = str_replace('g', 'ⓖ', $bot);
        $bot = str_replace('h', 'ⓗ', $bot);
        $bot = str_replace('i', 'ⓘ', $bot);
        $bot = str_replace('j', 'ⓙ', $bot);
        $bot = str_replace('k', 'ⓚ', $bot);
        $bot = str_replace('l', 'ⓛ', $bot);
        $bot = str_replace('m', 'ⓜ', $bot);
        $bot = str_replace('n', 'ⓝ', $bot);
        $bot = str_replace('o', 'ⓞ', $bot);
        $bot = str_replace('p', 'ⓟ', $bot);
        $bot = str_replace('q', 'ⓠ', $bot);
        $bot = str_replace('r', 'ⓡ', $bot);
        $bot = str_replace('s', 'ⓢ', $bot);
        $bot = str_replace('t', 'ⓣ', $bot);
        $bot = str_replace('u', 'ⓤ', $bot);
        $bot = str_replace('v', 'ⓥ', $bot);
        $bot = str_replace('w', 'ⓦ', $bot);
        $bot = str_replace('x', 'ⓧ', $bot);
        $bot = str_replace('y', 'ⓨ', $bot);
        $bot = str_replace('z', 'ⓩ', $bot);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot." "
        ]);
#-----------------(Mroan-10)--------------------#
        $bot = $text;
        $bot = str_replace('a', 'Ā', $bot);
        $bot = str_replace('b', '乃', $bot);
        $bot = str_replace('c', 'Ċ', $bot);
        $bot = str_replace('d', 'Ɖ', $bot);
        $bot = str_replace('e', 'Ē', $bot);
        $bot = str_replace('f', '₣', $bot);
        $bot = str_replace('g', 'Ǥ', $bot);
        $bot = str_replace('h', 'Ħ', $bot);
        $bot = str_replace('i', 'Ī', $bot);
        $bot = str_replace('j', 'J', $bot);
        $bot = str_replace('k', '₭', $bot);
        $bot = str_replace('l', 'Ŀ', $bot);
        $bot = str_replace('m', 'M', $bot);
        $bot = str_replace('n', '₦', $bot);
        $bot = str_replace('o', 'Ō', $bot);
        $bot = str_replace('p', 'P', $bot);
        $bot = str_replace('q', 'Ǭ', $bot);
        $bot = str_replace('r', 'Ṝ', $bot);
        $bot = str_replace('s', 'Ƨ', $bot);
        $bot = str_replace('t', 'Ŧ', $bot);
        $bot = str_replace('u', 'Ū', $bot);
        $bot = str_replace('v', '∀', $bot);
        $bot = str_replace('w', 'ฬ', $bot);
        $bot = str_replace('x', 'Ж', $bot);
        $bot = str_replace('y', 'Ȳ', $bot);
        $bot = str_replace('z', 'Ƶ', $bot);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot." "
        ]);
#-----------------(Mroan-11)--------------------#
        $bot = $text;
        $bot = str_replace('a', 'ᾋ', $bot);
        $bot = str_replace('b', 'ϐ', $bot);
        $bot = str_replace('c', 'Ƈ', $bot);
        $bot = str_replace('d', 'Ɖ', $bot);
        $bot = str_replace('e', 'Ἕ', $bot);
        $bot = str_replace('f', 'Ғ', $bot);
        $bot = str_replace('g', 'Ɠ', $bot);
        $bot = str_replace('h', 'Ἤ', $bot);
        $bot = str_replace('i', 'Ἷ', $bot);
        $bot = str_replace('j', 'Ј', $bot);
        $bot = str_replace('k', 'Ḱ', $bot);
        $bot = str_replace('l', 'Ŀ', $bot);
        $bot = str_replace('m', 'Ṃ', $bot);
        $bot = str_replace('n', 'Ɲ', $bot);
        $bot = str_replace('o', 'Ὃ', $bot);
        $bot = str_replace('p', 'Ƥ', $bot);
        $bot = str_replace('q', 'Q', $bot);
        $bot = str_replace('r', 'Ȓ', $bot);
        $bot = str_replace('s', 'Ṩ', $bot);
        $bot = str_replace('t', 'Ҭ', $bot);
        $bot = str_replace('u', 'Ȗ', $bot);
        $bot = str_replace('v', 'V', $bot);
        $bot = str_replace('w', 'Ẃ', $bot);
        $bot = str_replace('x', 'Ẋ', $bot);
        $bot = str_replace('y', 'Ὓ', $bot);
        $bot = str_replace('z', 'Ẕ', $bot);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot." "
        ]);
#-----------------(Mroan-12)--------------------#
        $bot = $text;
        $bot = str_replace('a', 'მ', $bot);
        $bot = str_replace('b', 'ჩ', $bot);
        $bot = str_replace('c', 'ƈ', $bot);
        $bot = str_replace('d', 'ძ', $bot);
        $bot = str_replace('e', 'ε', $bot);
        $bot = str_replace('f', 'բ', $bot);
        $bot = str_replace('g', 'ց', $bot);
        $bot = str_replace('h', 'հ', $bot);
        $bot = str_replace('i', 'ἶ', $bot);
        $bot = str_replace('j', 'ʝ', $bot);
        $bot = str_replace('k', 'ƙ', $bot);
        $bot = str_replace('l', 'l', $bot);
        $bot = str_replace('m', 'ო', $bot);
        $bot = str_replace('n', 'ղ', $bot);
        $bot = str_replace('o', 'օ', $bot);
        $bot = str_replace('p', 'ր', $bot);
        $bot = str_replace('q', 'գ', $bot);
        $bot = str_replace('r', 'ɾ', $bot);
        $bot = str_replace('s', 'ʂ', $bot);
        $bot = str_replace('t', 'է', $bot);
        $bot = str_replace('u', 'մ', $bot);
        $bot = str_replace('v', 'ν', $bot);
        $bot = str_replace('w', 'ω', $bot);
        $bot = str_replace('x', 'ჯ', $bot);
        $bot = str_replace('y', 'ყ', $bot);
        $bot = str_replace('z', 'z', $bot);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot." "
        ]);
#-----------------(Mroan-13)--------------------#
        $bot = $text;
        $bot = str_replace('a', 'ᴬ', $bot);
        $bot = str_replace('b', 'ᴮ', $bot);
        $bot = str_replace('c', 'ᶜ', $bot);
        $bot = str_replace('d', 'ᴰ', $bot);
        $bot = str_replace('e', 'ᴱ', $bot);
        $bot = str_replace('f', 'ᶠ', $bot);
        $bot = str_replace('g', 'ᴳ', $bot);
        $bot = str_replace('h', 'ᴴ', $bot);
        $bot = str_replace('i', 'ᴵ', $bot);
        $bot = str_replace('j', 'ᴶ', $bot);
        $bot = str_replace('k', 'ᴷ', $bot);
        $bot = str_replace('l', 'ᴸ', $bot);
        $bot = str_replace('m', 'ᴹ', $bot);
        $bot = str_replace('n', 'ᴺ', $bot);
        $bot = str_replace('o', 'ᴼ', $bot);
        $bot = str_replace('p', 'ᴾ', $bot);
        $bot = str_replace('q', 'ᵠ', $bot);
        $bot = str_replace('r', 'ᴿ', $bot);
        $bot = str_replace('s', 'ˁ', $bot);
        $bot = str_replace('t', 'ᵀ', $bot);
        $bot = str_replace('u', 'ᵁ', $bot);
        $bot = str_replace('v', 'ᵛ', $bot);
        $bot = str_replace('w', 'ᵂ', $bot);
        $bot = str_replace('x', 'ˣ', $bot);
        $bot = str_replace('y', 'ʸ', $bot);
        $bot = str_replace('z', 'ᶻ', $bot);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot." "
        ]);
#-----------------(Mroan-14)--------------------#
        $bot = $text;
        $bot = str_replace('a', 'Ａ', $bot);
        $bot = str_replace('b', 'Ｂ', $bot);
        $bot = str_replace('c', 'Ｃ', $bot);
        $bot = str_replace('d', 'Ｄ', $bot);
        $bot = str_replace('e', 'Ｅ', $bot);
        $bot = str_replace('f', 'Ｆ', $bot);
        $bot = str_replace('g', 'Ｇ', $bot);
        $bot = str_replace('h', 'Ｈ', $bot);
        $bot = str_replace('i', 'Ｉ', $bot);
        $bot = str_replace('j', 'Ｊ', $bot);
        $bot = str_replace('k', 'Ｋ', $bot);
        $bot = str_replace('l', 'Ｌ', $bot);
        $bot = str_replace('m', 'Ｍ', $bot);
        $bot = str_replace('n', 'Ｎ', $bot);
        $bot = str_replace('o', 'Ｏ', $bot);
        $bot = str_replace('p', 'Ｐ', $bot);
        $bot = str_replace('q', 'Ｑ', $bot);
        $bot = str_replace('r', 'Ｒ', $bot);
        $bot = str_replace('s', 'Ｓ', $bot);
        $bot = str_replace('t', 'Ｔ', $bot);
        $bot = str_replace('u', 'Ｕ', $bot);
        $bot = str_replace('v', 'Ｖ', $bot);
        $bot = str_replace('w', 'Ｗ', $bot);
        $bot = str_replace('x', 'Ｘ', $bot);
        $bot = str_replace('y', 'Ｙ', $bot);
        $bot = str_replace('z', 'Ｚ', $bot);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot." "
        ]);
#-----------------(Mroan-15)--------------------#
        $bot = $text;
        $bot = str_replace('a', 'λ', $bot);
        $bot = str_replace('b', 'ß', $bot);
        $bot = str_replace('c', 'Ȼ', $bot);
        $bot = str_replace('d', 'ɖ', $bot);
        $bot = str_replace('e', 'ε', $bot);
        $bot = str_replace('f', 'ʃ', $bot);
        $bot = str_replace('g', 'Ģ', $bot);
        $bot = str_replace('h', 'ħ', $bot);
        $bot = str_replace('i', 'ί', $bot);
        $bot = str_replace('j', 'ĵ', $bot);
        $bot = str_replace('k', 'κ', $bot);
        $bot = str_replace('l', 'ι', $bot);
        $bot = str_replace('m', 'ɱ', $bot);
        $bot = str_replace('n', 'ɴ', $bot);
        $bot = str_replace('o', 'Θ', $bot);
        $bot = str_replace('p', 'ρ', $bot);
        $bot = str_replace('q', 'ƣ', $bot);
        $bot = str_replace('r', 'ર', $bot);
        $bot = str_replace('s', 'Ș', $bot);
        $bot = str_replace('t', 'τ', $bot);
        $bot = str_replace('u', 'Ʋ', $bot);
        $bot = str_replace('v', 'ν', $bot);
        $bot = str_replace('w', 'ώ', $bot);
        $bot = str_replace('x', 'Χ', $bot);
        $bot = str_replace('y', 'ϓ', $bot);
        $bot = str_replace('z', 'Հ', $bot);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot." "
        ]);
#-----------------(Mroan-16)--------------------#
        $bot = $text;
        $bot = str_replace('a', '🅐', $bot);
        $bot = str_replace('b', '🅑', $bot);
        $bot = str_replace('c', '🅒', $bot);
        $bot = str_replace('d', '🅓', $bot);
        $bot = str_replace('e', '🅔', $bot);
        $bot = str_replace('f', '🅕', $bot);
        $bot = str_replace('g', '🅖', $bot);
        $bot = str_replace('h', '🅗', $bot);
        $bot = str_replace('i', '🅘', $bot);
        $bot = str_replace('j', '🅙', $bot);
        $bot = str_replace('k', '🅚', $bot);
        $bot = str_replace('l', '🅛', $bot);
        $bot = str_replace('m', '🅜', $bot);
        $bot = str_replace('n', '🅝', $bot);
        $bot = str_replace('o', '🅞', $bot);
        $bot = str_replace('p', '🅟', $bot);
        $bot = str_replace('q', '🅠', $bot);
        $bot = str_replace('r', '🅡', $bot);
        $bot = str_replace('s', '🅢', $bot);
        $bot = str_replace('t', '🅣', $bot);
        $bot = str_replace('u', '🅤', $bot);
        $bot = str_replace('v', '🅥', $bot);
        $bot = str_replace('w', '🅦', $bot);
        $bot = str_replace('x', '🅧', $bot);
        $bot = str_replace('y', '🅨', $bot);
        $bot = str_replace('z', '🅩', $bot);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot." "
        ]);
#-----------------(Mroan-17)--------------------#
        $bot = $text;
        $bot = str_replace('a', '۰۪۫A۪۫۰', $bot);
        $bot = str_replace('b', '۰۪۫B۪۫۰', $bot);
        $bot = str_replace('c', '۰۪۫C۪۫۰', $bot);
        $bot = str_replace('d', '۰۪۫D۪۫۰', $bot);
        $bot = str_replace('e', '۰۪۫E۪۫۰', $bot);
        $bot = str_replace('f', '۰۪۫F۪۫۰', $bot);
        $bot = str_replace('g', '۰۪۫G۪۫۰', $bot);
        $bot = str_replace('h', '۰۪۫H۪۫۰', $bot);
        $bot = str_replace('i', '۰۪۫I۪۫۰', $bot);
        $bot = str_replace('j', '۰۪۫J۪۫۰', $bot);
        $bot = str_replace('k', '۰۪۫K۪۫۰', $bot);
        $bot = str_replace('l', '۰۪۫L۪۫۰', $bot);
        $bot = str_replace('m', '۰۪۫M۪۫۰', $bot);
        $bot = str_replace('n', '۰۪۫N۪۫۰', $bot);
        $bot = str_replace('o', '۰۪۫O۪۫۰', $bot);
        $bot = str_replace('p', '۰۪۫P۪۫۰', $bot);
        $bot = str_replace('q', '۰۪۫Q۪۫۰', $bot);
        $bot = str_replace('r', '۰۪۫R۪۫۰', $bot);
        $bot = str_replace('s', '۰۪۫S۪۫۰', $bot);
        $bot = str_replace('t', '۰۪۫T۪۫۰', $bot);
        $bot = str_replace('u', '۰۪۫U۪۫۰', $bot);
        $bot = str_replace('v', '۰۪۫V۪۫۰', $bot);
        $bot = str_replace('w', '۰۪۫W۪۫۰', $bot);
        $bot = str_replace('x', '۰۪۫X۪۫۰', $bot);
        $bot = str_replace('y', '۰۪۫Y۪۫۰', $bot);
        $bot = str_replace('z', '۰۪۫Z۪۫۰', $bot);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot." "
        ]);
#-----------------(Mroan-18)--------------------#
        $bot = $text;
        $bot = str_replace('a', '̅α', $bot);
        $bot = str_replace('b', '̅в', $bot);
        $bot = str_replace('c', '̅c', $bot);
        $bot = str_replace('d', '̅ɒ', $bot);
        $bot = str_replace('e', '̅є', $bot);
        $bot = str_replace('f', '̅f', $bot);
        $bot = str_replace('g', '̅ɢ', $bot);
        $bot = str_replace('h', '̅н', $bot);
        $bot = str_replace('i', '̅ɪ', $bot);
        $bot = str_replace('j', '̅ᴊ', $bot);
        $bot = str_replace('k', '̅ĸ', $bot);
        $bot = str_replace('l', '̅ℓ', $bot);
        $bot = str_replace('m', '̅м', $bot);
        $bot = str_replace('n', '̅и', $bot);
        $bot = str_replace('o', '̅σ', $bot);
        $bot = str_replace('p', '̅ρ', $bot);
        $bot = str_replace('q', '̅q', $bot);
        $bot = str_replace('r', '̅я', $bot);
        $bot = str_replace('s', '̅s', $bot);
        $bot = str_replace('t', '̅τ', $bot);
        $bot = str_replace('u', '̅υ', $bot);
        $bot = str_replace('v', '̅v', $bot);
        $bot = str_replace('w', '̅ω', $bot);
        $bot = str_replace('x', '̅x', $bot);
        $bot = str_replace('y', '̅y', $bot);
        $bot = str_replace('z', '̅z', $bot);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot." "
        ]);
#-----------------(Mroan-19)--------------------#
        $bot = $text;
        $bot = str_replace('a', '🄰', $bot);
        $bot = str_replace('b', '🄱', $bot);
        $bot = str_replace('c', '🄲', $bot);
        $bot = str_replace('d', '🄳', $bot);
        $bot = str_replace('e', '🄴', $bot);
        $bot = str_replace('f', '🄵', $bot);
        $bot = str_replace('g', '🄶', $bot);
        $bot = str_replace('h', '🄷', $bot);
        $bot = str_replace('i', '🄸', $bot);
        $bot = str_replace('j', '🄹', $bot);
        $bot = str_replace('k', '🄺', $bot);
        $bot = str_replace('l', '🄻', $bot);
        $bot = str_replace('m', '🄼', $bot);
        $bot = str_replace('n', '🄽', $bot);
        $bot = str_replace('o', '🄾', $bot);
        $bot = str_replace('p', '🄿', $bot);
        $bot = str_replace('q', '🅀', $bot);
        $bot = str_replace('r', '🅁', $bot);
        $bot = str_replace('s', '🅂', $bot);
        $bot = str_replace('t', '🅃', $bot);
        $bot = str_replace('u', '🅄', $bot);
        $bot = str_replace('v', '🅅', $bot);
        $bot = str_replace('w', '🅆', $bot);
        $bot = str_replace('x', '🅇', $bot);
        $bot = str_replace('y', '🅈', $bot);
        $bot = str_replace('z', '🅉', $bot);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot." "
        ]);
#-----------------(Mroan-20)--------------------#
        $bot = $text;
        $bot = str_replace('a', 'a', $bot);
        $bot = str_replace('b', 'b', $bot);
        $bot = str_replace('c', '🅲', $bot);
        $bot = str_replace('d', '🅳', $bot);
        $bot = str_replace('e', '🅴', $bot);
        $bot = str_replace('f', '🅵', $bot);
        $bot = str_replace('g', '🅶', $bot);
        $bot = str_replace('h', '🅷', $bot);
        $bot = str_replace('i', '🅸', $bot);
        $bot = str_replace('j', '🅹', $bot);
        $bot = str_replace('k', '🅺', $bot);
        $bot = str_replace('l', '🅻', $bot);
        $bot = str_replace('m', '🅼', $bot);
        $bot = str_replace('n', '🅽', $bot);
        $bot = str_replace('o', 'o', $bot);
        $bot = str_replace('p', 'p', $bot);
        $bot = str_replace('q', '🆀', $bot);
        $bot = str_replace('r', '🆁', $bot);
        $bot = str_replace('s', 's', $bot);
        $bot = str_replace('t', '🆃', $bot);
        $bot = str_replace('u', '🆄', $bot);
        $bot = str_replace('v', '🆅', $bot);
        $bot = str_replace('w', '🆆', $bot);
        $bot = str_replace('x', '🆇', $bot);
        $bot = str_replace('y', '🆈', $bot);
        $bot = str_replace('z', '🆉', $bot);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot." "
        ]);
#-----------------(Mroan-21)--------------------#
        $bot = $text;
        $bot = str_replace('a', 'a̷', $bot);
        $bot = str_replace('b', 'b̷', $bot);
        $bot = str_replace('c', 'c̷', $bot);
        $bot = str_replace('d', 'd̷', $bot);
        $bot = str_replace('e', 'e̷', $bot);
        $bot = str_replace('f', 'f̷', $bot);
        $bot = str_replace('g', 'g̷', $bot);
        $bot = str_replace('h', 'h̷', $bot);
        $bot = str_replace('i', 'i̷', $bot);
        $bot = str_replace('j', 'j̷', $bot);
        $bot = str_replace('k', 'k̷', $bot);
        $bot = str_replace('l', 'l̷', $bot);
        $bot = str_replace('m', 'm̷', $bot);
        $bot = str_replace('n', 'n̷', $bot);
        $bot = str_replace('o', 'o̷', $bot);
        $bot = str_replace('p', 'p̷', $bot);
        $bot = str_replace('q', 'q̷', $bot);
        $bot = str_replace('r', 'r̷', $bot);
        $bot = str_replace('s', 's̷', $bot);
        $bot = str_replace('t', 't̷', $bot);
        $bot = str_replace('u', 'u̷', $bot);
        $bot = str_replace('v', 'v̷', $bot);
        $bot = str_replace('w', 'w̷', $bot);
        $bot = str_replace('x', 'x̷', $bot);
        $bot = str_replace('y', 'y̷', $bot);
        $bot = str_replace('z', 'z̷', $bot);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$bot." "
        ]);
#-----------------(Mroan-22)--------------------#
        $bot = $text;
        $bot = str_replace('a', 'ᴀ', $bot);
        $bot = str_replace('b', 'ʙ', $bot);
        $bot = str_replace('c', 'ᴄ', $bot);
        $bot = str_replace('d', 'ᴅ', $bot);
        $bot = str_replace('e', 'ᴇ', $bot);
        $bot = str_replace('f', 'ᴈ', $bot);
        $bot = str_replace('g', 'ɢ', $bot);
        $bot = str_replace('h', 'ʜ', $bot);
        $bot = str_replace('i', 'ɪ', $bot);
        $bot = str_replace('j', 'ᴊ', $bot);
        $bot = str_replace('k', 'ᴋ', $bot);
        $bot = str_replace('l', 'ʟ', $bot);
        $bot = str_replace('m', 'ᴍ', $bot);
        $bot = str_replace('n', 'ɴ', $bot);
        $bot = str_replace('o', 'ᴏ', $bot);
        $bot = str_replace('p', 'ᴘ', $bot);
        $bot = str_replace('q', 'ᴓ', $bot);
        $bot = str_replace('r', 'ʀ', $bot);
        $bot = str_replace('s', 'ᴤ', $bot);
        $bot = str_replace('t', 'ᴛ', $bot);
        $bot = str_replace('u', 'ᴜ', $bot);
        $bot = str_replace('v', 'ᴠ', $bot);
        $bot = str_replace('w', 'ᴡ', $bot);
        $bot = str_replace('x', 'ᴥ', $bot);
        $bot = str_replace('y', 'ʏ', $bot);
        $bot = str_replace('z', 'ᴢ', $bot);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'parse_mode'=>"Markdown",
            'text'=>$bot." "
        ]);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>'
',
            'reply_to_message_id'=>$message->message_id,
            'disable_web_page_preview'=>'true',
            'parse_mode'=>"Markdown",
        ]);
    }}
include 'admin.php';
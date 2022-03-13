<?php 

//=====================//
# DEV: @HaCKeR_OkeN#
# Ch: @DiL_SozLarm#
#bu kodni tarqatsang manba bilan tarqat #
//====================//
ob_start();
define('API_KEY','API_KEY_CONST');
//----######------
function makereq($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($datas));
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
function bot($method,$datas=[]){$BOT_SYRIA = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$BOT_SYRIA";
$BOTS_SYR1A = file_get_contents($url); return json_decode($BOTS_SYR1A);}


$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$re_msgid  = $update->message->reply_to_message->message_id;
$mid = $message->message_id;
$from_id = $message->from->id;
$cid = $message->chat->id;
$uid= $message->from->id;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$texts = json_decode(file_get_contents('msgs.json'),true);
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$apk = $message->apk;
$uid= $message->from->id;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$mid = $message->message_id;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$cmid = $update->callback_query->message->message_id;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$cqid = $update->callback_query->id;
$botim="@Systemuzbot";
$link = $message->chat->invite_link;
$description = $message->chat->description;
$gif = $message->animation;
$photo = $message->photo;
$sticker = $message->sticker;
$video = $message->video;
$music = $message->audio;
$document = $message->document;
$forward = $message->forward;
$voice = $message->voice;
$photo = $update->message->photo;
$gif = $update->message->animation;
$video = $update->message->video;
$music = $update->message->audio;
$voice = $update->message->voice;
$sticker = $update->message->sticker;
$document = $update->message->document;
$contact = $message->contact;
$user_id = $update->message->from->id;
$ufname = $update->message->from->first_name;
$uname = $update->message->from->last_name;
$id = $message->reply_to_message->from->id;   
$for = $message->forward_from;
$forc = $message->forward_from_chat;

$text = $message->text;
$chat_id  = $message->chat->id;
$user  = $update->message->from->username;
$from_user = $message->from->username;
$chat_id2 = $update->callback_query->message->chat->id;
$sudo = "621617473";//ID SUDO
  $kun =date('d-M', strtotime('0 hour')); 
      $soat=date('H:i:s', strtotime('0 hour')); 
$u = explode("\n",file_get_contents("memb.txt"));
$c = count($u)+50;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$name = $update->message->from->first_name;
$ssa = json_decode(file_get_contents('yuklandi.json'),1);
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$name = $update->message->from->first_name;
$ssa = json_decode(file_get_contents('yuklandi.json'),1);
$fadmin = $message->from->id;
$modxe = file_get_contents("usr.txt");
$admin = "621617473"; /* admin idisi */
$name = $update->message->from->first_name;
$bot = bot('getme',['bot'])->result->username;
echo "<br><a  href='https://t.me/$bot'>@$bot</a>";
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$sudo = 621617473; // ايديك
$m = file_get_contents("$chat_id.txt");
if (!is_dir('co')) {
	mkdir('co');
}
if(mb_stripos($text,"http") !==false){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot ('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[$ufname $uname](tg://user?id=$user_id)  😡kechirasiz bu guruhda Reklama tashlash mumkin emas!",
'parse_mode'=>"markdown",
]);
}
if(isset($message->sticker)!==false){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[$ufname $uname](tg://user?id=$user_id)  😡kechirasiz bu guruhda Sticker tashlash mumkin emas!",
'parse_mode'=>"markdown",
]);
}




if($text == "/start"){
bot('sendphoto',[
'photo'=>"https://t.me/hacker_progi/4",
'chat_id'=>$chat_id,
'caption'=>"
😎Salom  {$name}  Botga xush kelibsiz💭
=•=•=•=•=•=•=•=•=•=•=•=•=
Qisqacha ma'lumot: bu bot orqali
Qiziqarli o'yinlar🕹
Ajoyib programmlar📲
Telefonizga Antivirus♻
Video montaj📽
Foto shop📸
Va shunga  oxshash ajoyib dasturlar
topishingiz mumkun
〰️〰️〰️〰️〰️〰️✴
❗ Ma'lumot📋
📈Bot a'zolari $c 
〰️〰️〰️〰️〰️〰️✴
•Useringiz📌  $username 
🆔ID raqamingiz $from_id ،
〰️〰️〰️〰️〰️〰️✴
📆 Bugun:  ⌚️ Soat: $soat
〰️〰️〰️〰️〰️〰️✴

=•=•=•=•=•=•=•=•=•=•=•=•=
👨‍💻Yaratuvchi: @Bot biosida yozilgan
",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🕹Oyinlar🕹"]],[['text'=>"📲Programma📲"],
['text'=>"♻Antivirus♻"]],[['text'=>"📽Video montaj📽"],
['text'=>"📱Dasturlar📱"]],
[['text'=>"📸Foto shop📸"],['text'=>"⭕Turli o'yinlar⭕"]],
[['text'=>"🛠Kerakli dastur🛠"],
[['text'=>"📡Hamkorimiz"]],
]]
])
]);
}


if($text == "/start"){
bot('sendphoto',[
'photo'=>"https://t.me/hacker_progi/4",
'chat_id'=>$chat_id,
'caption'=>"Salom{$name }",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🕹Oyinlar🕹"]],[['text'=>"📲Programma📲"],
['text'=>"♻Antivirus♻"]],[['text'=>"📽Video montaj📽"],
['text'=>"📱Dasturlar📱"]],
[['text'=>"📸Foto shop📸"],['text'=>"⭕Turli o'yinlar⭕"]],
[['text'=>"🛠Kerakli dastur🛠"],
[['text'=>"📡Kanalimiz"]],
]]
])
]);
}
# DEV: @HaCKeR_OkeN#
# Ch: @@DiL_SozLarm#

if($text == "/oyin"){
bot('sendphoto',[
'photo'=>"https://t.me/hacker_progi/4",
'chat_id'=>$chat_id,
'caption'=>"😎Salom {$name }",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"Score! hero⚽"]],
[['text'=>"Mod-Master"],['text'=>"Reider-FPS"]],
[['text'=>"Tank strike 3D"],['text'=>"Lords of Kingdoms"]],
[['text'=>"Zuma"],['text'=>"Soccer Mexican League"]],
[['text'=>"Futbol"],['text'=>"Subway Surfers"]],
[['text'=>"/start"]],
]
])
]);
}
# DEV: @HaCKeR_OkeN#
# Ch: @DiL_SozLarm#


if($text == "/programma"){
bot('sendphoto',[
'photo'=>"https://t.me/hacker_progi/4",
'chat_id'=>$chat_id,
'caption'=>"😎Salom {$name }",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"Clean Master"]],[['text'=>"Uc Browser"],
['text'=>"Islom kitobi"]],[['text'=>"Flashlight"],
['text'=>"Mx pleyer"]],
[['text'=>"Golden Launcher"],['text'=>"Google Chrome"]],
[['text'=>"Instagram"],
['text'=>"N Launcher "]],
[['text'=>"/start"]],
]
])
]);
}
# DEV: @HaCKeR_OkeN#
# Ch: @@DiL_SozLarm#


if($text == "/antivirus"){
bot('sendphoto',[
'photo'=>"https://t.me/hacker_progi/4",
'chat_id'=>$chat_id,
'caption'=>"😎Salom {$name }",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"Security Master"]],[['text'=>"Security Master"],
['text'=>"Clean master"]],[['text'=>"AVG AntiVirus"],
['text'=>"Virus Cleaner"]],
[['text'=>"Mobile Security"],['text'=>"Security Master"]],
[['text'=>"/start"]],
]
])
]);
}
# DEV: @HaCKeR_OkeN#
# Ch: @DiL_SozLarm#

if($text == "/video"){
bot('sendphoto',[
'photo'=>"https://t.me/hacker_progi/4",
'chat_id'=>$chat_id,
'caption'=>"😎Salom {$name }",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"PlayerPro"]],[['text'=>"Klipmix"],
['text'=>"ActionDirector"]],[['text'=>"My video"],
['text'=>"Kinemaster"]],
[['text'=>"SingPlay"],['text'=>"Viva Video"]],
[['text'=>"Video Editor"],
['text'=>"Video Maker"]],
[['text'=>"/start"]],
]
])
]);
}
# DEV: @HaCKeR_OkeN#
# Ch: @@DiL_SozLarm#


if($text == "/dasturlar"){
bot('sendphoto',[
'photo'=>"https://t.me/hacker_progi/4",
'chat_id'=>$chat_id,
'caption'=>"😎Salom {$name}",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"Viber"]],[['text'=>"TextNow"],
['text'=>"Play Services Info"]],[['text'=>"SHAZAM"],
['text'=>"Uzbek-English Translator"]],
[['text'=>"My talking hank"],['text'=>"My Talking Tom 2"]],
[['text'=>"English òzbek tarjimalar"],
['text'=>"Telegram"]],
[['text'=>"/start"]],
]
])
]);
}

if($text == "/foto"){
bot('sendphoto',[
'photo'=>"https://t.me/hacker_progi/4",
'chat_id'=>$chat_id,
'caption'=>"😎Salom {$name }",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"Sweet Camera"]],[['text'=>"Meet Camera"],
['text'=>"Photo Editor Pro"]],[['text'=>"Photo Editor Collage Maker"],
['text'=>"Collage Maker "]],
[['text'=>"Funny photo"],['text'=>"Free Photo Editor"]],
[['text'=>"Photoshop Expert"],
['text'=>"Photoshop Shortcuts"]],
[['text'=>"/start"]],
]
])
]);
}

if($text == "/oyinlar"){
bot('sendphoto',[
'photo'=>"https://t.me/hacker_progi/4",
'chat_id'=>$chat_id,
'caption'=>"😎Salom {$name }",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"AppLock"]],[['text'=>"Radio FM"],
['text'=>"Internet tezligi"]],[['text'=>"Root"],
['text'=>"Muslim Taqvimi"]],
[['text'=>"Tam Tam Messenger"],['text'=>"Retrica "]],
[['text'=>"My Droid"],
['text'=>"Telefon qorovul"]],
[['text'=>"/start"]],
]
])
]);
}

if($text == "/dastur"){
bot('sendphoto',[
'photo'=>"https://t.me/hacker_progi/4",
'chat_id'=>$chat_id,
'caption'=>"😎Salom {$name }",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"Themes for Android"]],[['text'=>"Appvn"],
['text'=>"Sevgi testi"]],[['text'=>"Total Commander"],
['text'=>"Audio Converter"]],
[['text'=>"Fix Play Store"],['text'=>"Battery Doctor"]],
[['text'=>"PicsArt"],
['text'=>"2ndline"]],
[['text'=>"/start"]],
]
])
]);
}
if((mb_stripos($text,"/start") !== false)){ 
bot('SendMessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$mid,
'text'=>"😎Salom {$name} Botga xush kelibsiz💭
=•=•=•=•=•=•=•=•=•=•=•=•=
Qisqacha ma'lumot: bu bot orqali
Qiziqarli o'yinlar🕹
Ajoyib programmlar📲
Telefonizga Antivirus♻
Video montaj📽
Foto shop📸
Va shunga  oxshash ajoyib dasturlar
topishingiz mumkun
〰️〰️〰️〰️〰️〰️✴
❗ Ma'lumot📋
📈Bot a'zolari $c 
〰️〰️〰️〰️〰️〰️✴
•👨‍✈Nikingiz: $name
🆔ID raqamingiz $from_id ،
〰️〰️〰️〰️〰️〰️✴
📆 Bugun:  ⌚️ Soat: $soat
〰️〰️〰️〰️〰️〰️✴

=•=•=•=•=•=•=•=•=•=•=•=•=
👨‍💻Yaratuvchi: bioda yozilgan

programma bolimlari👇 Tanlang⭕
👉 /oyin
👉 /programma
👉 /antivirus
👉 /video
 👉 /foto
👉 /dasturlar
👉 /oyinlar
👉 /dastur


♻Botimizga yangi funksiyalar qo'shilishda davom etadi!",
]);
}


if ($text == "/admin" and $chat_id == $admin ) {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
      'text'=>"Bot admini @SystemUz",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['url' =>'https://t.me/systemuz', 'text' => "yaratuvchi"],],
[['url'=>'https://t.me/HackerlikniOrganamiz','text'=>'📡Hamkorimiz'],],

            ]
            ])
        ]);
}

if($text == "8" or $text == "📖Anfol surasi"){
bot( "sendaudio" ,[
 "chat_id" =>$chat_id,
 "audio" =>"https://t.me/quran_u/10",
 "reply_to_message_id" =>$message->message_id,
]);
}

 
if($text == 'Score! hero⚽'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/6",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Score! Hero 
Version🛠: 2.20(95)
Yangilandi♻: May 2, 2019
💾Hajmi: 99.37MB
Web: https://apkdl.in/app/details?id=com.firsttouchgames.story
"
]);
}
if($text == 'Mod-Master'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/8",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
MOD-MASTER for Minecraft PE |Pocket Edition👏😉👍
🆚Version: 3.7
📁Hajmi: 8.72MB
"
]);
}
if($text == 'Reider-FPS'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/10",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Hopeless Raider-FPS Shooting Games👏👨‍💻👍
🆚Version: 2.0
📁Hajmi: 95.87MB
"
]);
}
if($text == 'Tank strike 3D'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/12",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Tank strike 3D👨🏻‍💻👍
🆚Version: 2.0
📁Hajmi: 18.87MB
"
]);
}
if($text == 'Lords of Kingdoms'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/14",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Lords of Kingdoms😉👍
🆚Version: 5.7
📁Hajmi: 43.5MB
"
]);
}
if($text == 'Zuma'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/16",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Zuma📱
🆚Version: 3.7
📁Hajmi: 46.72MB
"
]);
}
if($text == 'Soccer Mexican League'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/18",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Soccer Mexican League⚽
🆚Version: 4.7
📁Hajmi: 24.2MB
"
]);
}
if($text == 'Futbol'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/20",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Futbol⚽
🆚Version: 3.7
📁Hajmi: 45.4MB
"
]);
}
if($text == 'Subway Surfers'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/22",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Subway Surfers🚴
🆚Version: 6.7
📁Hajmi: 85.2MB
"
]);
}
if($text == 'Clean Master'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/24",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Clean Master antivirus👏👨‍💻👍
🆚Version: 6.1
⏰Sana: 12-may-2019
📂Hajmi: 19.39MB
 👨‍💻👍"
]);
}
if($text == 'Uc Browser'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/26",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
UC Browser - Yangilangan versiya👏👨🏻‍💻👍
Version: 5.2
⏰Sana: 03-May-2019
📂Hajmi: 38.20MB

"
]);
}
if($text == 'Islom kitobi'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/28",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📚Islom Kitobi Nurul Izoh 40 farz👏😃👍
🆚Version: 3.0(3)
⏰SANA: 01-may-2019
📂HAJMI: 2.33MB
"
]);
}
if($text == 'Flashlight'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/30",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🔦Flashlight TELEFONINGIZ UCHUN AJOYIB FANAR ENG SO‘NGI VERSIYA👏😃👍
🆚Version: 4.1
⏰SANA: 26-may-2019
📂HAJMI: 4.92MB
"
]);
}
if($text == 'Mx pleyer'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/32",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
MX Player NING ENG SO‘NGI VERSIYASI👍
🆚Version: 1.9.1
⏰Sana: 08-aprel-2019
📂Hajmi: 15.61MB
"
]);
}
if($text == 'Golden Launcher'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/34",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Golden Launcher Ajoyib Oltin Laucher👏👨‍💻👍
🆚Version: 1.2
⏰Sana: 25-aprel-2019
📁Hajmi: 16.31MB
"
]);
}
if($text == 'Google Chrome'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/36",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Google Chrome ko‘pchilikni sevimli internet brasuri eng yangi versiya👏😃👍
🆚Version: 6.5
⏰Sana: 06-Mar-2019
📂Hajmi: 59.57MB
👍
"
]);
}
if($text == 'Instagram'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/38",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Instagram eng yangi versiya 👏😃👍
🆚Version: 3.7
⏰Sana: 19-Mar-2019
📂Hajmi: 29.32MB

"
]);
}
if($text == 'N Launcher'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/40",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
N Launcher - Nougat 7.0 Telefoningiz Uchun Ajoyib Tema👏😃👍
🆚Version: 1.5
⏰Sana: 22-Mar-2019
📂Hajmi: 8.52MB
"
]);
}
if($text == 'Security Master'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/42",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Security Master - Antivirus, VPN, AppLock, Booster 
Antivirus brovser Qulf Vpn hammasi 1da Talablarga Binoan👏👨🏻‍💻👍
🆚Version: 4.8
⏰Sana: Jan 8, 2019
📁Hajmi: 23.79MB
"
]);
}
if($text == 'Security Master pro'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/44",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Antivirus Security Master - , VPN, AppLock, Booster Talablarga binoan yangi versiya 👏👨‍💻👍
🆚Version: 4.9
⏰Sana: Mar 25, 2019
📁Hajmi: 22.86MB
"
]);
}
if($text == 'AVG AntiVirus'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/50",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
AVG AntiVirus FREE for Android Security 2018 👏👨‍💻👍
🆚Version: 6.1
⏰Sana: 11-Jun-2019
📂Hajmi: 23.23MB
"
]);
}
if($text == 'Virus Cleaner'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/48",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Virus Cleaner - Antivirus Booster (Super Security)👏😃👍
🆚Version: 1.3
⏰SANA: 23-Feb-2019
📂HAJMI: 7.27MB
"
]);
}
if($text == 'Mobile Security'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/46",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Mobile Security & Antivirus 👏😃👍
🆚Version: 4.0
⏰Sana: 26-Feb-2019
📂Hajmi: 14.16MB
"
]);
}
if($text == 'PlayerPro'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/54",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
PlayerPro DSP pack (com.tbig.playerpro.soundpack)
Version: 5.4(24)
♻yangilandi: Dec 18, 2018
📂Hajmi: 10.51MB
"
]);
}
if($text == 'Klipmix'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/52",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
KlipMix - Free Video Editor (com.movisoft.klips)
Version: 4.7.9(46)
Last Updated: Nov 17, 2018
Size: 11.45MB
"
]);
}
if($text == 'ActionDirector'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/56",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
ActionDirector Video Editor - Edit Videos Fast (com.cyberlink.actiondirector)
Version: 3.1.3(66390)
Last Updated: Apr 24, 2019
Size: 35.30MB
"
]);
}
if($text == 'My video'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/58",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Video Editor for Youtube & Video Maker - My Movie 
Version: 6.1.7(167)
Last Updated: Apr 28, 2019
Size: 33.56MB

"
]);
}
if($text == 'Kinemaster'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/60",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
KineMaster – Pro Video Editor 
Version: 4.9.17
Last Updated: Apr 28, 2019
Size: 45.50MB
"
]);
}
if($text == 'SingPlay'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/66",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
SingPlay: Karaoke your MP3 
Version: 3.4.10(85)
Last Updated: Nov 29, 2018
Size: 16.74MB
"
]);
}
if($text == 'Viva Video'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/68",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
VivaVideo - Video Editor & Photo Movie 
Version: 7.10.6(6710061)
Last Updated: Apr 26, 2019
Size: 40.96MB
"
]);
}
if($text == 'Video Editor'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/62",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Video Editor
Version: 5.0.0(58)
Last Updated: Feb 28, 2019
Size: 11.36MB
"
]);
}
if($text == 'Video Maker'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/64",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Video Maker - Video.Guru 
Version: 1.210.36(36)
Last Updated: Apr 2, 2019
Size: 22.81MB
"
]);
}
if($text == 'Viber'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/72",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Viber
🆚Version: 1.3
⏰SANA: 23-Feb-2019
📂HAJMI: 43.2MB
"
]);
}
if($text == 'Play Services Info'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/70",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Play services info
🆚Version: 1.3
⏰SANA: 23-Feb-2019
📂HAJMI: 2.2MB
"
]);
}
if($text == 'SHAZAM'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/74",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
SHAZAM ilovasi Musiqalarni qulay tarzda topish uchun

Yangi versiyasi

Yuklab oling 👆
"
]);
}
if($text == 'Uzbek-English Translator'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/76",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Uzbek english tarjimon
🆚Version: 3.7
📁Hajmi: 2.0MB
"
]);
}
if($text == 'My talking hank'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/78",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
My talking hank
🆚Version: 3.7
📁Hajmi: 97.7MB
"
]);
}
if($text == 'My Talking Tom 2'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/80",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 My Talking Tom 2
🆚Version: 3.7
📁Hajmi: 95.8MB
"
]);
}
if($text == 'English òzbek tarjimalar'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/82",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
English òzbek tarjimalar
🆚Version: 3.7
📁Hajmi: 6.1MB
"
]);
}
if($text == 'Telegram'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/84",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Ajoyib telegram
🆚Version: 3.7
📁Hajmi: 17.2MB
"
]);
}
if($text == 'TextNow'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/140",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
APK Downloader:
TextNow: Free Texting & Calling App
Version: 6.23.1.0(12452)
Last Updated: May 1, 2019
Size: 37.05MB
"
]);
}
if($text == 'Sweet Camera'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/86",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Sweet Camera
🆚Version: 4.7
📁Hajmi: 86.7MB
"
]);
}
if($text == 'Meet Camera'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/88",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Meet Camera
🆚Version: 3.7
📁Hajmi: 7.2MB
"
]);
}
if($text == 'Photo Editor Pro'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/90",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Photo Editor Pro
🆚Version: 6.7
📁Hajmi: 12.3MB
"
]);
}
if($text == 'Photo Editor Collage Maker'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/92",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Photo Editor Collage Maker
🆚Version: 6.7
📁Hajmi: 43.9MB
"
]);
}
if($text == 'Collage Maker'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/94",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Collage Maker 
🆚Version: 3.7
📁Hajmi: 13.4MB
"
]);
}
if($text == 'Funny photo'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/96",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Funny photo
🆚Version: 3.7
📁Hajmi: 24.9MB
"
]);
}
if($text == 'Free Photo Editor'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/99",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Free Photo Editor
🆚Version: 3.7
📁Hajmi: 30.1MB
"
]);
}
if($text == 'Photoshop Expert'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/99",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Photoshop Expert
🆚Version: 3.7
📁Hajmi: 3.5MB
"
]);
}
if($text == 'Photoshop Shortcuts'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/103",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Photoshop Shortcuts
🆚Version: 3.7
📁Hajmi: 2.7MB
"
]);
}
if($text == 'AppLock'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/105",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
AppLock - 🔒Gallery, Message, Apps Locker (com.alpha.applock)
Version: 3.2.7(327)
Last Updated: Apr 6, 2019
Size: 9.00MB
"
]);
}
if($text == 'Radio FM'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/107",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Radio FM (com.radio.fmradio)
Version: 12.5(363)
Last Updated: Feb 28, 2019
Size: 19.78MB
"
]);
}
if($text == 'Internet tezligi'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/109",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Internet tezligi - O'zbekcha programma 2019 (com.dexqon.internet.tezlik.test)
Version: 1.6(16)
Last Updated: Nov 4, 2018
Size: 6.05MB
"
]);
}
if($text == 'Root'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/111",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Root Car Insurance: Good drivers save money (com.joinroot.root)
Version: 112.0.0(195)
Last Updated: Apr 30, 2019
Size: 39.42MB
"
]);
}
if($text == 'Muslim Taqvimi'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/113",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
muslim taqvimi
📂Hajmi 8.5mb
"
]);
}
if($text == 'Tam Tam Messenger'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/115",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Tam Tam Messenger
🆚Version: 6.7
📁Hajmi: 19.3MB
"
]);
}
if($text == 'Retrica'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/117",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"

🆚Version: 6.7
📁Hajmi: 45.4MB
"
]);
}
if($text == 'My Droid'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/119",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
My Droid
🆚Version: 3.7
📁Hajmi: 7.2MB
"
]);
}
if($text == 'Telefon qorovul'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/121",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Hidden Eye: 👁Telefon Qorovuli Dasturi orginal Versiya Talablarga binoan👏👨🏻‍💻👍
🆚Version: 1.8
📁Hajmi: 2.08MB
"
]);
}
if($text == 'Themes for Android'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/123",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Themes for Android ™ 
Talablarga binoan👏👨🏻‍💻👍
🆚Version: v3.2
📁Hajmi: 6.04MB
"
]);
}
if($text == 'Appvn'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/125",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
VPN Unlimited Proxy AppVPN (appvpn.vpn)
Version: 2.48(48)
Last Updated: Oct 28, 2018
Size: 6.69MB
"
]);
}
if($text == 'Sevgi testi'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/127",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Sevgi Testi Kopgina sevishganlar Talablarga Binoan👏😉👍
🆚Version: 1.0
📁Hajimi: 4.69MB
"
]);
}
if($text == 'Total Commander'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/129",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Total Commander - file manager 
Talablarga binoan👏👨‍💻👍
🆚Version: 2.9
📁Hajmi: 2.07MB
"
]);
}
if($text == 'Audio Converter'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/131",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Audio Converter (MP3, AAC, WMA, OGG) - Cut Audio 
🆚Version: 3.3
⏰Sana: Apr 20, 2019
📁Hajmi: 22.25MB
"
]);
}
if($text == 'Fix Play Store'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/133",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Fix Play Store & Google Play Services Error Info 
Version: 1.0.4(16)
Last Updated: Jan 24, 2019
Size: 5.48MB
"
]);
}
if($text == 'Battery Doctor'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/135",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
Battery Doctor-Battery Life Saver & Battery Cooler Talablarga binoan👏👨‍💻👍
🆚Version: 6.2
📁Hajmi: 14.76MB
"
]);
}
if($text == 'PicsArt'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/137",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
PicsArt Photo Studio: Collage Maker & Pic Editor Talablarga binoan👏👨‍💻👍
🆚Version: 11.7
⏰Sana: Mar 27, 2019
📁Hajmi: 40.54MB
"
]);
}
if($text == '2ndline'){
 bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/hacker_progi/139",
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
2ndLine - Second Phone Number
Version: 6.22.1.1(12443)
Last Updated: Apr 26, 2019
Size: 33.17MB
"
]);
}
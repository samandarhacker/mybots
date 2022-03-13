<?php
$cn = mysqli_connect("localhost",'u5990_php',"samandar001@","u5990_php");

define('API_KEY', '5254602991:AAGxCBiGV6unzsZicFgPxMPTye_sXPbuVFg');
include_once 'functions.php';
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$id = $message->chat->id;
$ism = $message->from->first_name;
$username = $message->from->username;
$data = $update->callback_query->data;
$name = $message->from->first_name;
include_once "keyboard.php";


$uzcoinadd = explode(' ', $text);
$uzcoinadd = (int)$uzcoinadd[1];
$a = file_exists("$id");
if ($a) {
    echo 'file mavjud';
} else {
    mkdir($id);
}

if ($text == '/start') {
    bot('sendmessage', ['chat_id' => $id, 'text' => "  ☇ Salom $ism

Sizni botda ko‘rib turganimdan xursandman!
@MyBots_uz_bot orqali siz o‘zingizning shaxsiy botlaringizni hech qanday qiyinchiliklarsiz yaratishingiz mumkin!

⬇️ Ishni boshlash uchun quyidagi tugmalardan foydalaning!  ", 'reply_markup' => $menu_markup]);
    uzcoin_f('0', $id);
    $user_search = user_info($id);
    if ($user_search != 'true') {
        bot('sendmessage', ['chat_id' => 1769851684, 'text' => "Yani foydalanuvchi\nIsm: $ism\nusername: @$username\nid: $id"]);

    }
    user_add($id,$name,$username);
} elseif ($message->document and menu_get($id) == 'host') {
    $file_name1 = $message->document->file_name;
    $scaner = explode(".", $file_name1);
    $scaner = $scaner[1];
    if ($scaner == 'php') {
        mkdir("$id/host/");
        $file = "https://api.telegram.org/file/bot" . API_KEY . "/" . bot('getfile', ['file_id' => $message->document->file_id])->result->file_path;
        file_put_contents("$id/host/$file_name1", file_get_contents($file));
        file_put_contents("$id/host_file_name.txt", "$file_name1");
        menu_put("host_token", $id);
        bot('sendmessage', ['chat_id' => $id, 'text' => "️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.\n2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.\n3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.\n4️⃣ @MyBots_uz_bot -ga qaytib, nusxalangan API tokenini shu botga yuboring.\n💥Taxminiy API Token:\n126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA"]);

    } else {
        bot('sendmessage', ['chat_id' => $id, 'text' => "bot faqat phpni qo'llab quvvatlaydi"]);
    }
} elseif ($text == "Python") {
    $b = 1;
    for ($i = 2; $i <= 15;) {
        if ($i == 2) {
            bot('sendvideo', ['chat_id' => $id, 'video' => "https://t.me/mybots_uz_bot_pyhon_video/$i", 'caption' => "Python telegram bot yaratish Kirish\n @Mybots_uz_bot"]);
        } else {
            bot('sendvideo', ['chat_id' => $id, 'video' => "https://t.me/mybots_uz_bot_pyhon_video/$i", 'caption' => "Python telegram bot yaratish $b-dars\n @Mybots_uz_bot"]);
            $b++;
        }
        $i++;

    }


} elseif ($text == 'php') {
    $b = 1;
    for ($i = 2; $i <= 15;) {
        if ($i == 3 or $i == 2) {
            bot('sendvideo', ['chat_id' => $id, 'video' => "https://t.me/My_bots_uz_bot_php_video/$i", 'caption' => "PHP telegram bot yaratish Kirish\n @Mybots_uz_bot"]);
        } else {
            bot('sendvideo', ['chat_id' => $id, 'video' => "https://t.me/My_bots_uz_bot_php_video/$i", 'caption' => "PHP telegram bot yaratish $b-dars\n @Mybots_uz_bot"]);
            $b++;
        }
        $i++;

    }
} elseif (menu_get($id) == 'host_token' and strlen($text) > 30) {
    file_get_contents("https://api.telegram.org/bot" . $text . "/deleteWebhook");
    $respons = json_decode(file_get_contents('https://api.telegram.org/bot' . $text . "/setWebhook?url=https://u5880.xvest1.ru/$id/host/" . file_get_contents("$id/bot/host_file_name.txt")));
    if ($respons == true) {
        $help = file_get_contents('https://api.telegram.org/bot' . $text . '/getme');
        $help = json_decode($help);
        $bot_name = $help->result->first_name;
        $bot_username = $help->result->username;
        bot('sendmessage', ['chat_id' => $id, 'text' => "bot muvofaqiyatli ishga tushurildi 
nomi: $bot_name
username: @$bot_username"]);
        yasalgan_botlar();
        menu_put('done', $id);
        add_bot($id, $a);
        $a = 'none';
    } else {
        bot('sendmessage', ['chat_id' => $id, 'text' => 'xato']);
    }


}elseif ($text == "JavaScript"){
    $b = 1;
    for ($i = 2; $i <= 18;) {
        if ($i == 2) {
            bot('sendvideo', ['chat_id' => $id, 'video' => "https://t.me/javascript_video/$i", 'caption' => "JavaScript dasturlash asoslari Kirish\n @Mybots_uz_bot"]);
        } else {
            bot('sendvideo', ['chat_id' => $id, 'video' => "https://t.me/javascript_video/$i", 'caption' => "JavaScript dasturlash asoslari $b-dars\n @Mybots_uz_bot"]);
            $b++;
        }
        $i++;

    }


} elseif (false) {
    $content = explode("/", $text);
    $user_id = $content[1];
    $coin = (int)$content[2];
    uzcoin_f(0, $user_id);
    uzcoin_f($coin, $user_id);
    bot('sendmessage', ['chat_id' => $user_id, 'text' => "Xisobinggizga $coin so'm pul o'tkazildi"]);
    bot('sendmessage', ['chat_id' => 1769851684, 'text' => 'Yolov muvofaqiyatli bajarildi']);
} elseif (strlen($uzcoinadd) == 10) {
    bot('sendmessage', ['chat_id' => $id, 'text' => "  ☇ Salom $ism

Sizni botda ko‘rib turganimdan xursandman!
@MyBots_uz_bot orqali siz o‘zingizning shaxsiy botlaringizni hech qanday qiyinchiliklarsiz yaratishingiz mumkin
        
⬇️ Ishni boshlash uchun quyidagi tugmalardan foydalaning!  ", 'reply_markup' => $menu_markup]);
    $user_search = user_info($id);
    if ($user_search == 'true') {
        echo 'foydalanuvchi mavjud';
    } else {
        uzcoin_f('0', $id);
        uzcoin_f('500', $uzcoinadd);
        bot('sendmessage', ['chat_id' => $uzcoinadd, 'text' => "tabriklaymiz siz $ism ni taklif qildinggiz"]);
        taklif_qilgan($uzcoinadd);
        bot('sendmessage', ['chat_id' => 1769851684, 'text' => "Yani foydalanuvchi\nIsm: $ism\nusername: @$username\nid: $id"]);
    }
    user_add($id,$name,$username);
} elseif ($text == "‼️botni o'chirish") {
    bot('sendmessage', ['chat_id' => $id, 'text' => "bo'tni o'chirishni tasdiqlang", 'reply_markup' => $delete_bot_check]);
} elseif ($text == 'add') {
    bot('sendmessage', ['chat_id' => $id, 'text' => "1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.\n2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.\n3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.\n4️⃣ @MyBots_uz_bot -ga qaytib, nusxalangan API tokenini shu botga yuboring.\n💥Taxminiy API Token:\n126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA"]);

} elseif ($text == 'bot yaratish') {
    bot('sendmessage', ['chat_id' => $id, 'text' => "ho'sh qanday turdagi bot yaratmoqchisiz", 'reply_markup' => json_encode(['keyboard' => [[['text' => 'youtube']]], 'resize_keyboard' => true])]);
} elseif ($text == 'youtube') {
    menu_put('youtube', $id);
    bot('sendmessage', ['chat_id' => $id, 'text' => "️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.\n2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.\n3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.\n4️⃣ @MyBots_uz_bot -ga qaytib, nusxalangan API tokenini shu botga yuboring.\n💥Taxminiy API Token:\n126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA"]);
} elseif ($text == '📽 Konvertor') {
    $len = my_bots_len($id);
    if($len > 2){
        bot('sendmessage',['chat_id'=>$id,'text'=>"botlar soni 2 tadan o'shmasligi kerak"]);
    }elseif (my_bots_about($id, "convertor")) {
        bot('sendmessage', ['chat_id' => $id, 'text' => "kechirasiz bir turdagi ikkita bot yarata olmaysiz"]);
    } else {
        menu_put("convertor", $id);
        bot('sendmessage', ['chat_id' => $id, 'text' => "️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.\n2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.\n3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.\n4️⃣ @MyBots_uz_bot -ga qaytib, nusxalangan API tokenini shu botga yuboring.\n💥Taxminiy API Token:\n126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA"]);
    }
}elseif ($text == "🔰 nik"){
    $len = my_bots_len($id);
    if($len > 2){
        bot('sendmessage',['chat_id'=>$id,'text'=>"botlar soni 2 tadan o'shmasligi kerak"]);
    }elseif (my_bots_about($id, "nik")) {
        bot('sendmessage', ['chat_id' => $id, 'text' => "kechirasiz bir turdagi ikkita bot yarata olmaysiz"]);
    } else {
        menu_put("nik", $id);
        bot('sendmessage', ['chat_id' => $id, 'text' => "️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.\n2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.\n3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.\n4️⃣ @MyBots_uz_bot -ga qaytib, nusxalangan API tokenini shu botga yuboring.\n💥Taxminiy API Token:\n126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA"]);
    }



}elseif ($text == "🗯 group chat"){
    $len = my_bots_len($id);
    if($len > 2){
        bot('sendmessage',['chat_id'=>$id,'text'=>"botlar soni 2 tadan o'shmasligi kerak"]);
    }elseif (my_bots_about($id, "chat")) {
        bot('sendmessage', ['chat_id' => $id, 'text' => "kechirasiz bir turdagi ikkita bot yarata olmaysiz"]);
    } else {
        menu_put("chat", $id);
        bot('sendmessage', ['chat_id' => $id, 'text' => "️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.\n2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.\n3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.\n4️⃣ @MyBots_uz_bot -ga qaytib, nusxalangan API tokenini shu botga yuboring.\n💥Taxminiy API Token:\n126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA"]);
    }
}elseif ($text == "♻️webhook"){

    $len = my_bots_len($id);
    if($len > 2){
        bot('sendmessage',['chat_id'=>$id,'text'=>"botlar soni 2 tadan o'shmasligi kerak"]);
    }elseif (my_bots_about($id, "webhook")) {
        bot('sendmessage', ['chat_id' => $id, 'text' => "kechirasiz bir turdagi ikkita bot yarata olmaysiz"]);
    } else {
        menu_put("webhook", $id);
        bot('sendmessage', ['chat_id' => $id, 'text' => "️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.\n2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.\n3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.\n4️⃣ @MyBots_uz_bot -ga qaytib, nusxalangan API tokenini shu botga yuboring.\n💥Taxminiy API Token:\n126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA"]);
    }

} elseif ($text == "💬 yashirin text"){
    $len = my_bots_len($id);
    if($len > 2){
        bot('sendmessage',['chat_id'=>$id,'text'=>"botlar soni 2 tadan o'shmasligi kerak"]);
    }elseif (my_bots_about($id, "hide_text")) {
        bot('sendmessage', ['chat_id' => $id, 'text' => "kechirasiz bir turdagi ikkita bot yarata olmaysiz"]);
    } else {
        menu_put("hide_text", $id);
        bot('sendmessage', ['chat_id' => $id, 'text' => "️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.\n2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.\n3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.\n4️⃣ @MyBots_uz_bot -ga qaytib, nusxalangan API tokenini shu botga yuboring.\n💥Taxminiy API Token:\n126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA"]);
        bot('sendmessage',['chat_id'=>$id,'text'=>"bot ishlashi uchun bot uchun inline modeni yoqishni unutmang\nyo'l: @botfather ->bot_nomi -> bot setting -> inline mode->turn off"]);
    }


} elseif ($text == '🛠Botlarni boshqarish') {
    bot('sendmessage', ['chat_id' => $id, 'text' => 'ℹ️Yangi bot yaratish uchun quyidagi tugmani bosing:
«➕ Bot qoʻshish»

ℹ️ Tayyor botni oʻchirish yoki sozlash uchun quyidagi tugmani bosing:
«⚙️Menish botlarim»', 'reply_markup' => $add_bot]);

} elseif ($text == '➕ Bot qo\'shish') {
    bot('sendmessage', ['chat_id' => $id, 'text' => '📋 Quyidagilardan birini tanlang:', 'reply_markup' => $bots]);

} elseif ($text == '❓ Yordam') {
    bot('sendmessage', ['chat_id' => $id, 'text' => '❓Siz Yordam menusidasiz.

📋 Yordam olish uchun buyruqlardan foydalaning:', 'reply_markup' => $yordam_keyboard]);

} elseif ($text == '🧩 play market') {
    $len = my_bots_len($id);
    if($len > 2){
        bot('sendmessage',['chat_id'=>$id,'text'=>"botlar soni 2 tadan o'shmasligi kerak"]);
    }elseif (my_bots_about($id, "APKsearch")) {
        bot('sendmessage', ['chat_id' => $id, 'text' => "kechirasiz bir turdagi ikkita bot yarata olmaysiz"]);
    } else {
        menu_put("play_market", $id);
        bot('sendmessage', ['chat_id' => $id, 'text' => "️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.\n2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.\n3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.\n4️⃣ @MyBots_uz_bot -ga qaytib, nusxalangan API tokenini shu botga yuboring.\n💥Taxminiy API Token:\n126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA"]);
    }
} elseif ($text == "📞Murojaat") {
    bot('sendmessage', ['chat_id' => $id, 'text' => '📞 Sizda biror gʻoya, taklif yoki murojaat boʻlsa bizga murojaat qiling: @Azamov_Samandar']);


} elseif ($text == "⚡️Tizim yangiliklari") {
    bot('sendmessage', ['chat_id' => $id, 'text' => '📂 Bot yuzasidagi barcha yangiliklar https://t.me/MyBots_uz kanalida yetkazib boriladi.

    🗄 Kanalga obuna boʻlishingizni soʻraymiz! Bu siz uchun muhim!']);

} elseif ($text == 'ℹ️Bot haqida') {
    bot("sendmessage", ['chat_id' => $id, 'text' => 'ℹ️ Ushbu bot orqali siz hech qanday dasturlash tillarini bilmasdan turib va hech qanday hostinglarsiz oson bot yasay olasiz.

    ✅ Imkoniyatlar
    👉 Bepul hostingdan bot yarating
    👉 Do\'stlarni taklif qiling
    👉 Har kunlik bonus oling
    👉 Dasturlangan bot yarating.
    
    🇺🇿 Hamma botlar soni: 10 ta
    
    ♻️ Bot versiyasi: 4.
    
    🛠 Dasturchi: Shohbozbek']);

} elseif ($text == "🔙Ortga qaytish") {
    bot('sendmessage', ['chat_id' => $id, 'text' => 'Bosh menu', 'reply_markup' => $menu_markup]);
} elseif ($text == '💸 PUL ISHLASH 💸') {
    bot('sendmessage', ['chat_id' => $id, 'text' => "💸 Qanday usulda pul olishni hohlaysiz?

    ‼️ Bot orqali yig'gan Pullarigizni yechib olomaysiz. Pullaringizni botimizdagi har qanday xaridlar uchun sarflashingiz mumkin.", 'reply_markup' => $uzcoin_add]);


} elseif ($text == '🖥 Hosting') {
    menu_put("host", $id);
    bot('sendmessage', ['chat_id' => $id, 'text' => "loyihani tanlang"]);
} elseif ($text == "👥 Takliflar") {
    bot('sendmessage', ['chat_id' => $id, 'text' => "📌Quyidagi havolani do'stlaringizga tarqatib Pul yig'ing:\n`https://t.me/Mybots_uz_bot?start=$id`\nEslatib o'tamiz har bir do'stingiz sizga 500 so'm Pul beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga Pil berilmaydi!✅", 'parse_mode' => 'markdown']);


} elseif ($text == '🎙 music') {
    $len = my_bots_len($id);
    if($len > 2){
        bot('sendmessage',['chat_id'=>$id,'text'=>"botlar soni 2 tadan o'shmasligi kerak"]);
    }elseif (my_bots_about($id, "music") == "true") {
        bot('sendmessage', ['chat_id' => $id, 'text' => "kechirasiz bir turdagi ikkita bot yarata olmaysiz"]);
    } else {
        menu_put('music', $id);
        bot('sendmessage', ['chat_id' => $id, 'text' => "'️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.\n2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.\n3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.\n4️⃣ @MyBots_uz_bot -ga qaytib, nusxalangan API tokenini shu botga yuboring.\n💥Taxminiy API Token:\n126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA"]);
    }
} elseif ($text == 'test') {
    menu_put('test', $id);
    bot('sendmessage', ['chat_id' => $id, 'text' => "'️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.\n2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.\n3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.\n4️⃣ @MyBots_uz_bot -ga qaytib, nusxalangan API tokenini shu botga yuboring.\n💥Taxminiy API Token:\n126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA"]);
} elseif ($text == "🎮 O'yin") {
    $len = my_bots_len($id);
    if($len > 2){
        bot('sendmessage',['chat_id'=>$id,'text'=>"botlar soni 2 tadan o'shmasligi kerak"]);
    }elseif (my_bots_about($id, "O'yin") == "true") {
        bot('sendmessage', ['chat_id' => $id, 'text' => "kechirasiz bir turdagi ikkita bot yarata olmaysiz"]);
    } else {
        menu_put('game', $id);
        bot('sendmessage', ['chat_id' => $id, 'text' => "'️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.\n2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.\n3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.\n4️⃣ @MyBots_uz_bot -ga qaytib, nusxalangan API tokenini shu botga yuboring.\n💥Taxminiy API Token:\n126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA"]);
        bot('sendmessage',['chat_id'=>$id,'text'=>"bot ishlashi uchun bot uchun inline modeni yoqishni unutmang\nyo'l: @botfather ->bot_nomi -> bot setting -> inline mode->turn off"]);
    }

} elseif ($text == '📱Kabinet') {
    $uzcoin = uzcoin_info($id);
    if ($uzcoin == '') {
        $uzcoin = '0';
    }
    $taklif = taklif_info($id);
    bot('sendmessage', ['chat_id' => $id, 'text' => "🗄 Kabinetingizga xush kelibsiz!\n\n💵 Sizning balansingiz: $uzcoin so'm \n👥 Sizning takliflaringiz: $taklif ta\n\n❗️❗️Bot hisobingizni to'ldirish uchun @Azamov_Samandar ga murojat qiling!"]);
} elseif ($text == 'Audio Kompresor') {
    $len = my_bots_len($id);
    if($len > 2){
        bot('sendmessage',['chat_id'=>$id,'text'=>"botlar soni 2 tadan o'shmasligi kerak"]);
    }elseif (my_bots_about($id, "audio_compressor")) {
        bot('sendmessage', ['chat_id' => $id, 'text' => "kechirasiz bir turdagi ikkita bot yarata olmaysiz"]);
    } else {
        menu_put('Audio_compressor', $id);
        bot('sendmessage', ['chat_id' => $id, 'text' => "'️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.\n2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.\n3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.\n4️⃣ @MyBots_uz_bot -ga qaytib, nusxalangan API tokenini shu botga yuboring.\n💥Taxminiy API Token:\n126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA"]);
    }

} elseif ($text == "❌ ha") {
    $a = menu_get($id);
    if ($a == 'youtube_delete') {
        unlink("$id/bot/" . $id . "youtube.php");
        bot('sendmessage', ['chat_id' => $id, 'text' => 'bot muvofaqiyatli o\'chirildi', 'reply_markup' => $menu_markup]);
        delete_bots('youtube ', $id);
    } elseif ($a == 'music_delete') {
        unlink("$id/bot/" . $id . "music.php");
        bot('sendmessage', ['chat_id' => $id, 'text' => 'bot muvofaqiyatli o\'chirildi', 'reply_markup' => $menu_markup]);
        delete_bots('music ', $id);
    } elseif ($a == 'gif_delete') {
        unlink("$id/bot/" . "$id" . "webhook.php");
        bot('sendmessage', ['chat_id' => $id, 'text' => 'bot muvofaqiyatli o\'chirildi', 'reply_markup' => $menu_markup]);
        delete_bots('gif ', $id);
    }elseif ($a == "webhook_delete"){
        unlink("$id/bot/" . "$id" . "webhook.php");
        bot('sendmessage', ['chat_id' => $id, 'text' => 'bot muvofaqiyatli o\'chirildi', 'reply_markup' => $menu_markup]);
        delete_bots('webhook ', $id);


    } elseif ($a == "nik_delete"){
        unlink("$id/bot/" . "$id" . "nik.php");
        bot('sendmessage', ['chat_id' => $id, 'text' => 'bot muvofaqiyatli o\'chirildi', 'reply_markup' => $menu_markup]);
        delete_bots('nik ', $id);
    } elseif ($a == "hide_text_delete"){
        unlink("$id/bot/" . "$id" . "hide_text.php");
        bot('sendmessage', ['chat_id' => $id, 'text' => 'bot muvofaqiyatli o\'chirildi', 'reply_markup' => $menu_markup]);
        delete_bots('hide_text ', $id);
    } elseif ($a == "convertor_delete") {
        unlink("$id/bot/" . "$id" . "convertor.php");
        bot('sendmessage', ['chat_id' => $id, 'text' => 'bot muvofaqiyatli o\'chirildi', 'reply_markup' => $menu_markup]);
        delete_bots('convertor ', $id);
    }elseif ($a == "chat_delete"){
        unlink("$id/bot/" . "$id" . "chat.php");
        bot('sendmessage', ['chat_id' => $id, 'text' => 'bot muvofaqiyatli o\'chirildi', 'reply_markup' => $menu_markup]);
        delete_bots('chat ', $id);
    } elseif ($a == "game_delete"){

        unlink("$id/bot/" . "$id" . "Gamer.php");
        bot('sendmessage', ['chat_id' => $id, 'text' => 'bot muvofaqiyatli o\'chirildi', 'reply_markup' => $menu_markup]);
        delete_bots('Gamer ', $id);


    } elseif ($a == "APKsearch_delete") {
        unlink("$id/bot/" . "$id" . "APKsearch.php");
        bot('sendmessage', ['chat_id' => $id, 'text' => 'bot muvofaqiyatli o\'chirildi', 'reply_markup' => $menu_markup]);
        delete_bots('APKsearch ', $id);
    } elseif ($a == "audio_compressor_delete") {
        unlink("$id/bot/" . "$id" . "audio_compressor.php");
        bot('sendmessage', ['chat_id' => $id, 'text' => 'bot muvofaqiyatli o\'chirildi', 'reply_markup' => $menu_markup]);
        delete_bots('audio_compressor ', $id);
    }
} elseif ($text == "🔚 yo'q") {
    bot('sendmessage', ['chat_id' => $id, 'text' => 'Bosh menu', 'reply_markup' => $menu_markup]);
} elseif ($text == "🎥 video darslar") {
    bot('sendmessage', ['chat_id' => $id, 'text' => "qanysi dasturlash tilini o'rganmoqchisiz", 'reply_markup' => $video_darslar]);


} elseif ($text == '📊 Statistika') {
    $users = user_int();
    date_default_timezone_set("Asia/Tashkent");
    $soat = date("H:i:sa");
    $kun = date("Y-m-d");
    $soat = explode('pm', $soat);
    $soat = $soat[0];
    $soat = explode("am",$soat);
    $soat = $soat[0];
    $bots = yasalgar_botlar_int();
    bot('sendmessage', ['chat_id' => $id, 'text' => "📊 Statistika
    Bot a'zolari soni: $users ta
    Jami yasalgan botlar: $bots ta
    

    🗓$kun ⏰$soat
    "]);


} elseif ($text == "💰 Xarid qilish") {
    bot('sendmessage', ['chat_id' => $id, 'text' => "📋 To'lov tizimi: PAYNET\n💡 Avto to'lov holati: OF\n💳 Hamyon ( +998936402078 ) -> admin\n💳 Telegram -> @Azamov_Samandar\n📝 Izoh: $id\n📊 Uz. c. Kursi: 155\nQo'shimcha: To'lovni amalga oshirgach biz bilan bog'laning.", 'reply_markup' => $paynet]);


} elseif ($data == 'paynet') {
    bot('sendmessage', ['chat_id' => $id, 'text' => 'salom']);
} elseif ($text == '📸 gif') {
    $len = my_bots_len($id);
    if($len > 2){
        bot('sendmessage',['chat_id'=>$id,'text'=>"botlar soni 2 tadan o'shmasligi kerak"]);
    }elseif(my_bots_about($id, "gif") == "true") {
        bot('sendmessage', ['chat_id' => $id, 'text' => "kechirasiz bir turdagi ikkita bot yarata olmaysiz"]);
    } else {
        menu_put('gif', $id);
        bot('sendmessage', ['chat_id' => $id, 'text' => "️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.\n2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.\n3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.\n4️⃣ @MyBots_uz_bot -ga qaytib, nusxalangan API tokenini shu botga yuboring.\n💥Taxminiy API Token:\n126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA"]);
    }
} elseif ($text == 'Mening botlarim') {
    my_bots_info($id);
} elseif ($text == "🤖 youtube") {
    menu_put('youtube_delete', $id);
    bot('sendMessage', ['chat_id' => $id, 'text' => "Rostdan ham botni o'chirmoqchimisiz", 'reply_markup' => $delete_bot]);
} elseif ($text == '🤖 music') {
    menu_put("music_delete", $id);
    bot('sendMessage', ['chat_id' => $id, 'text' => "Rostdan ham botni o'chirmoqchimisiz", 'reply_markup' => $delete_bot]);
} elseif ($text == "🤖 gif") {
    menu_put("gif_delete", $id);
    bot('sendMessage', ['chat_id' => $id, 'text' => "Rostdan ham botni o'chirmoqchimisiz", 'reply_markup' => $delete_bot]);

} elseif ($text == "🤖 Audio compressor") {

    menu_put("audio_compressor_delete", $id);
    bot('sendMessage', ['chat_id' => $id, 'text' => "Rostdan ham botni o'chirmoqchimisiz", 'reply_markup' => $delete_bot]);


} elseif ($text == "🤖 play market") {
    menu_put("APKsearch_delete", $id);
    bot('sendMessage', ['chat_id' => $id, 'text' => "Rostdan ham botni o'chirmoqchimisiz", 'reply_markup' => $delete_bot]);


}elseif ($text == "🤖 O'yin"){
    menu_put("game_delete", $id);
    bot('sendMessage', ['chat_id' => $id, 'text' => "Rostdan ham botni o'chirmoqchimisiz", 'reply_markup' => $delete_bot]);


}elseif ($text == "🤖 yashirin text"){
    menu_put("hide_text_delete", $id);
    bot('sendMessage', ['chat_id' => $id, 'text' => "Rostdan ham botni o'chirmoqchimisiz", 'reply_markup' => $delete_bot]);

}elseif ($text == "🤖 nik"){

    menu_put("nik_delete", $id);
    bot('sendMessage', ['chat_id' => $id, 'text' => "Rostdan ham botni o'chirmoqchimisiz", 'reply_markup' => $delete_bot]);


}elseif ($text == "🤖 chat"){

    menu_put("chat_delete", $id);
    bot('sendMessage', ['chat_id' => $id, 'text' => "Rostdan ham botni o'chirmoqchimisiz", 'reply_markup' => $delete_bot]);

} elseif ($text == "🤖 convertor") {
    menu_put("convertor_delete", $id);
    bot('sendMessage', ['chat_id' => $id, 'text' => "Rostdan ham botni o'chirmoqchimisiz", 'reply_markup' => $delete_bot]);

}elseif ($text == "🤖 webhook"){
    menu_put("webhook_delete", $id);
    bot('sendMessage', ['chat_id' => $id, 'text' => "Rostdan ham botni o'chirmoqchimisiz", 'reply_markup' => $delete_bot]);

} else {
    $a = 'none';
    $check = menu_get($id);
    if ($check == 'youtube') {
        $a = 'youtube';
    } elseif ($check == "music") {
        $a = 'music';
    } elseif ($check == 'test') {
        $a = 'test';
    } elseif ($check == 'gif') {
        $a = "gif";
    } elseif ($check == 'convertor') {
        $a = "convertor";
    } elseif ($check == "APKsearch") {
        $a = "APKsearch";
    } elseif ($check == "Audio_compressor") {
        $a = "audio_compressor";
    } elseif ($check == "play_market") {
        $a = "APKsearch";
    } elseif ($check == 'game') {
        $a = "Gamer";
    }elseif ($check == 'hide_text'){
        $a = 'hide_text';
    }elseif ($check == "nik"){
        $a = 'nik';
    }elseif ($check == "chat"){
        $a = 'chat';
    }elseif ($check == "webhook"){
        $a = "webhook";
    }

    $b = explode(':', $text);
    $b = $b[0];
    if (strlen($b) == 10 and $a != 'none') {
        mkdir("$id/bot/");
        $file = str_replace('API_KEY_CONST', $text, file_get_contents("bots/" . $a . '.php'));
        $file_name = "$id/bot/" . $id . $a . '.php';
        file_put_contents($file_name, $file);
        $admin_panel = file_get_contents("bots/admin.php");
        file_put_contents("$id/bot/admin.php",$admin_panel);
        file_get_contents("https://api.telegram.org/bot" . $text . "/deleteWebhook");
        $respons = json_decode(file_get_contents('https://api.telegram.org/bot' . $text . "/setWebhook?url=https://u5990.xvest2.ru/mybot/" . $file_name));
        if ($respons == true) {
            $help = file_get_contents('https://api.telegram.org/bot' . $text . '/getme');
            $help = json_decode($help);
            $bot_name = $help->result->first_name;
            $bot_username = $help->result->username;
            bot('sendmessage', ['chat_id' => $id, 'text' => "bot muvofaqiyatli ishga tushurildi 
nomi: $bot_name
username: @$bot_username"]);
            yasalgan_botlar();
            menu_put('done', $id);
            add_bot($id, $a);
            $a = 'none';
        } else {
            bot('sendmessage', ['chat_id' => $id, 'text' => 'xato']);
        }
    } else {
        bot('sendmessage', ['chat_id' => $id, 'text' => $uzcoinadd]);
    }

}




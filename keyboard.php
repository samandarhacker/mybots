<?php

$paynet = json_encode([
    'inline_keyboard' => [
        [['text' => 'Telegram yordam', 'url' => 'https://t.me/Azamov_Samandar']]
    ]
]);
$menu_markup = json_encode([
    'keyboard' => [
        [['text' => '🛠Botlarni boshqarish'], ['text' => '💸 PUL ISHLASH 💸']],
        [['text' => '📱Kabinet'], ['text' => '📊 Statistika']],
        [['text'=>'🎥 video darslar']]],
    'resize_keyboard' => true
]);
$video_darslar = json_encode([
    'keyboard'=>[
        [['text'=>'Python'],['text'=>'php']],
        [['text'=>"JavaScript"]],
        [["text"=>"🔙Ortga qaytish"]],

    ],
    'resize_keyboard'=>true,
]);
$add_bot = json_encode([
    'resize_keyboard' => true,
    'keyboard' => [
        [['text' => '➕ Bot qo\'shish'], ['text' => '❓ Yordam']],
        [['text'=>'🖥 Hosting'],['text'=>'Mening botlarim']],
        [['text' => '🔙Ortga qaytish']],
    ]
]);
$bots = json_encode([
    'resize_keyboard' => true,
    'keyboard' => [
        [['text' => '📸 gif'],['text'=>'🧩 play market']],
        [['text' => '🎙 music'],['text'=>'Audio Kompresor']],
        [['text'=>'📽 Konvertor'],['text'=>"🎮 O'yin"]],
        [['text'=>"💬 yashirin text"],['text'=>"🔰 nik"]],
        [['text'=>"🗯 group chat"],['text'=>"♻️webhook"]],
        [['text' => '🔙Ortga qaytish']]
    ]
]);
$delete_bot = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
        [['text'=>"‼️botni o'chirish"]]
    ]
]);
$delete_bot_check = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
        [['text'=>'❌ ha'],['text'=>"🔚 yo'q"]]
    ]
]);
$yordam_keyboard = json_encode([
    'resize_keyboard' => true,
    'keyboard' => [
        [['text' => '📞Murojaat'], ['text' => '⚡️Tizim yangiliklari']],
        [['text' => 'ℹ️Bot haqida'], ['text' => '🔙Ortga qaytish']]
    ]
]);

$uzcoin_add = json_encode([
    'resize_keyboard' => true,
    'keyboard' => [
        [['text' => '👥 Takliflar'], ['text' => '💰 Xarid qilish']],
        [['text' => '🔙Ortga qaytish']]
    ]
]);
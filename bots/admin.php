<?php
$admin = "1769851684";
function admin_users(){
    $users = file_get_contents('users.txt');
    $users = explode(" ",$users);
    return $users;
}
function admin_user_add($id){
    if(file_exists("users.txt") !=1){
        file_put_contents("users.txt",'');
    }
    $users = file_get_contents("users.txt");
    $users = explode(" ",$users);
    if(in_array($id,$users)){

    }else{
        file_put_contents("users.txt","$id ",FILE_APPEND);
    }
}
function admin_bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{return json_decode($res);}}
$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$text = $message->text;
$id = $message->chat->id;
$admin_markup = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
        [['text'=>"Foydalanuvchilarga xabar yuborish"]],
        [['text'=>"jami foydalanuvchilar"]],
    ]
]);
admin_user_add($id);
if($text == "/admin"){
    $users = admin_users();
    for($i=0;$i<count($users);$i++){
    admin_bot("sendmessage",['chat_id'=>$users[$i],'text'=>'salom','reply_markup'=>$admin_markup]);
}}
if($text == "Foydalanuvchilarga xabar yuborish"){
    file_put_contents("menu.txt",'xabar');
    admin_bot("sendMessage",['chat_id'=>$id,'text'=>"Foydalanuvchiga yuboriladigan matinni kiriting"]);
}else(file_get_contents("menu.txt") == "xabar"and isset($text)){
        $users = admin_users();
        for($i=0;$i<count($users);$i++){
            admin_bot("sendmessage",['chat_id'=>$users[$i],'text'=>$text,'reply_markup'=>$admin_markup]);
        }
file_put_contents('menu.txt','');
        admin_bot('sendmessage',['chat_id'=>$admin,'text'=>"foydalanuvchilarga xabar yuborildi"]);
}
?>
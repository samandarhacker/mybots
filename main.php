<?php
define("API_KEY","5114086179:AAHObEczrAXeVbUfHpFWHH_aIjvqDwPDQWs");
function bot($method, $datas = [])
{
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    $res = curl_exec($ch);
    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    } else {
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents("php://input"));
$id = $update->message->chat->id;
bot("sendmessage",['chat_id'=>$id,'text'=>'salom']);
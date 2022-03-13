<?php

ob_start();
$API_KEY = 'API_KEY_CONST';
define('API_KEY', $API_KEY);

function bot($method, $datas = []) {
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

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $update->message->chat->id;
$inlineqt = $update->inline_query->query;
$text = $message->text;
if ($inlineqt) {
    # code...
    $gif = json_decode(file_get_contents("http://api.giphy.com//v1/gifs/search?api_key=dccf3b8e99314bba9c4f2a72accc1dca&q=$inlineqt&limit=20"))->data;
    bot('answerInlineQuery',[
        'inline_query_id'=>$update->inline_query->id,
        'cache_time'=>'300',
        'results' => json_encode([[
            'type'=>'gif',
            'id'=>base64_encode(rand(5,555)),
            'gif_url'=>$gif[0]->url,
            'thumb_url'=>$gif[0]->url,
        ],[
            'type'=>'gif',
            'id'=>base64_encode(rand(5,555)),
            'gif_url'=>$gif[1]->url,
            'thumb_url'=>$gif[1]->url,
        ],[
            'type'=>'gif',
            'id'=>base64_encode(rand(5,555)),
            'gif_url'=>$gif[2]->url,
            'thumb_url'=>$gif[2]->url,
        ],[
            'type'=>'gif',
            'id'=>base64_encode(rand(5,555)),
            'gif_url'=>$gif[3]->url,
            'thumb_url'=>$gif[3]->url,
        ],[
            'type'=>'gif',
            'id'=>base64_encode(rand(5,555)),
            'gif_url'=>$gif[4]->url,
            'thumb_url'=>$gif[4]->url,
        ],[
            'type'=>'gif',
            'id'=>base64_encode(rand(5,555)),
            'gif_url'=>$gif[5]->url,
            'thumb_url'=>$gif[5]->url,
        ],[
            'type'=>'gif',
            'id'=>base64_encode(rand(5,555)),
            'gif_url'=>$gif[6]->url,
            'thumb_url'=>$gif[6]->url,
        ],[
            'type'=>'gif',
            'id'=>base64_encode(rand(5,555)),
            'gif_url'=>$gif[7]->url,
            'thumb_url'=>$gif[7]->url,
        ],[
            'type'=>'gif',
            'id'=>base64_encode(rand(5,555)),
            'gif_url'=>$gif[8]->url,
            'thumb_url'=>$gif[8]->url,
        ],[
            'type'=>'gif',
            'id'=>base64_encode(rand(5,555)),
            'gif_url'=>$gif[9]->url,
            'thumb_url'=>$gif[9]->url,
        ],[
            'type'=>'gif',
            'id'=>base64_encode(rand(5,555)),
            'gif_url'=>$gif[10]->url,
            'thumb_url'=>$gif[10]->url,
        ],[
            'type'=>'gif',
            'id'=>base64_encode(rand(5,555)),
            'gif_url'=>$gif[11]->url,
            'thumb_url'=>$gif[11]->url,
        ],[
            'type'=>'gif',
            'id'=>base64_encode(rand(5,555)),
            'gif_url'=>$gif[12]->url,
            'thumb_url'=>$gif[12]->url,
        ],[
            'type'=>'gif',
            'id'=>base64_encode(rand(5,555)),
            'gif_url'=>$gif[13]->url,
            'thumb_url'=>$gif[13]->url,
        ],[
            'type'=>'gif',
            'id'=>base64_encode(rand(5,555)),
            'gif_url'=>$gif[14]->url,
            'thumb_url'=>$gif[14]->url,
        ],[
            'type'=>'gif',
            'id'=>base64_encode(rand(5,555)),
            'gif_url'=>$gif[15]->url,
            'thumb_url'=>$gif[15]->url,
        ],[
            'type'=>'gif',
            'id'=>base64_encode(rand(5,555)),
            'gif_url'=>$gif[16]->url,
            'thumb_url'=>$gif[16]->url,
        ],[
            'type'=>'gif',
            'id'=>base64_encode(rand(5,555)),
            'gif_url'=>$gif[17]->url,
            'thumb_url'=>$gif[17]->url,
        ],[
            'type'=>'gif',
            'id'=>base64_encode(rand(5,555)),
            'gif_url'=>$gif[18]->url,
            'thumb_url'=>$gif[18]->url,
        ],[
            'type'=>'gif',
            'id'=>base64_encode(rand(5,555)),
            'gif_url'=>$gif[19]->url,
            'thumb_url'=>$gif[19]->url,
        ]])
    ]);
}
if($text){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"This bot can help you find and share GIFs. It works automatically, no need to add it anywhere. Simply open any of your chats and type @gif something in the message field. Then tap on a result to send.

For example, try typing @gif happy dog here.
",
    ]);
}
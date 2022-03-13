<?php
ob_start();
error_reporting(0);
define("API_KEY",'API_KEY_CONST');
$admin = array("1769851684");

function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/$method";
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
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$message = $update->message;
$cid = $message->chat->id;
$cidtyp = $message->chat->type;
$miid = $message->message_id;
$name = $message->chat->first_name;
$user1 = $message->from->username;
$tx = $message->text;

if($text == "/start"){
   bot('sendmessage',[
   'chat_id'=>$cid,
   'text'=>"Gif yasash uchun text yuboring!",
   'parse_mode'=>"html",
]);
}

if($text != "/start"){
bot('sendmessage',[
  'chat_id'=>$cid,
 'text'=>"<b>Yuklanmoqda, kuting iltimos.....</b>",
 'parse_mode'=>"html",
 'reply_to_message_id'=>$mid,
]);
$text2 = str_replace(' ','_',$text);
$gify = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=blue-fire&text=$text2&symbol_tagname=popular&fontsize=70&fontname=futura_poster&fontname_tagname=cool&textBorder=15&growSize=0&antialias=on&hinting=on&justify=2&letterSpacing=0&lineSpacing=0&textSlant=0&textVerticalSlant=0&textAngle=0&textOutline=off&textOutline=false&textOutlineSize=2&textColor=%230000AA&angle=0&blueFlame=on&blueFlame=false&framerate=75&frames=5&pframes=5&oframes=4&distance=2&transparent=off&transparent=false&extAnim=gif&animLoop=on&animLoop=false&defaultFrameRate=75&doScale=off&scaleWidth=240&scaleHeight=120&&_=1469943010141"),true);
$gif = $gify["src"];
bot('deletemessage',[
'chat_id'=>$cid,
'message_id'=>$mid +1,
]);
   bot('sendanimation',[
   'chat_id'=>$cid,
   'animation'=>$gif,
   'caption'=>"$text - ga Gif tayyor!",
   'parse_mode'=>"html",
]);
}
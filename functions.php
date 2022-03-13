<?php
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
function menu_put($x,$id)
{
    file_put_contents("$id/menu.txt", $x);
}
function yasalgan_botlar()
{
    file_put_contents("bots.txt", '1 ', FILE_APPEND);
}
function yasalgar_botlar_int()
{
    $taklif = file_get_contents("bots.txt");
    $taklif = explode(" ", $taklif);
    $taklif = (int)count($taklif);
    $taklif = $taklif - 1;
    return $taklif;
}
function menu_get($id)
{
    return file_get_contents("$id/menu.txt");
}
function uzcoin_f($x, $id)
{   if (file_exists("$id/uzcoin.txt") != '1'){
    file_put_contents("$id/uzcoin.txt",'0');}
    $uzcoin = (int)file_get_contents("$id/uzcoin.txt");

    $uzcoin = $uzcoin + $x;
    file_put_contents("$id/uzcoin.txt", $uzcoin);

}
function uzcoin_info($id)
{
    $uzcoin = file_get_contents("$id/uzcoin.txt");

    return $uzcoin;
}
function taklif_qilgan($id)
{
    file_put_contents("$id/taklif.txt", '1 ', FILE_APPEND);
}
function my_bots($id,$bot){
    file_put_contents("$id/mybots.txt","$bot ",FILE_APPEND);
}
function my_bots_info($id){
    $bots = file_get_contents("$id/mybots.txt");
    $bots = explode(' ',$bots);
    $b = count($bots)-1;
    if ($b == 0){
        bot('sendmessage',['chat_id'=>$id,'text'=>"sizda botlar mavjud emas"]);
    }else {
        $botlar = [];
        for ($i = 0; $i < $b; $i++) {
            $bot = $bots[$i];
            if($bot == "audio_compressor"){
                $bot = "Audio compressor";
            }elseif ($bot == "Gamer"){
                $bot = "O'yin";
            }elseif ($bot == "APKsearch"){
                $bot = "play market";
            }elseif ($bot == "hide_text"){
                $bot = "yashirin text";
            }
            if($bot != '' or $bot != ' ' or $bot!='  ' or $bot!='   ' or $bot!='    ' or $bot!='     ' or $bot!='      ' or $bot!='       ' or $bot!='        '){
                $botlar[] = [['text' => "🤖 $bot"]];
            }
        }
        $botlar[]=[['text'=>'🔙Ortga qaytish']];
        $bots_keyboard = json_encode([
            'resize_keyboard'=>true,
            'keyboard' =>$botlar

        ]);

        bot('sendmessage', ['chat_id' => $id, 'text' => "Sizning botlaringgiz $b ta \nMaksimal botlar soni 2 ta", 'reply_markup' => $bots_keyboard]);
    }
}
function add_bot($id,$bot){
    file_put_contents("$id/mybots.txt","$bot ",FILE_APPEND);
}
function taklif_info($id)
{
    $taklif = file_get_contents("$id/taklif.txt");
    $taklif = explode(" ", $taklif);
    $taklif = (int)count($taklif);
    $taklif = $taklif - 1;
    return $taklif;
}
function user_add($id,$name,$username)
{
    $username = str_replace(" ",'',$username);
    if ($username == ''){
        $username = 'User name mavjud emas';
    }
    $status = "false";
    $cn = mysqli_connect('localhost','u5990_php','samandar001@','u5990_php');
    $users_id = "SELECT ID FROM php";
    $ids = mysqli_query($cn,$users_id);
    $ids = mysqli_fetch_all($ids);
    for($i=0;$i<count($ids);$i++){
        $id_c = $ids[$i][0];
        if($id_c == $id){
            $status = "true";

        }
       

    }
    if($status != "true") {


        $a = "INSERT INTO php(name,username,id,date) values('{$name}','{$username}','{$id}',NOW())";
        mysqli_query($cn, $a);


    }
}

function user_info($id)
{
    $cn = mysqli_connect("localhost",'u5990_php',"samandar001@","u5990_php");

    $users_id = "SELECT ID FROM php";
    $ids = mysqli_query($cn,$users_id);
    $ids = mysqli_fetch_all($ids);
    for($i=0;$i<count($ids);$i++){
        if($ids[$i][0] == $id){
            return true;
        }
    }
    return false;
}
function user_int()
{
    $cn = mysqli_connect("localhost",'u5990_php',"samandar001@","u5990_php");

    $a = "SELECT ID FROM php";
    $v = mysqli_query($cn,$a);
    $size = $v->num_rows;
    return $size;

}
function delete_bots($x,$id){
    $a = file_get_contents("$id/mybots.txt");
    $b = str_replace($x,'',$a);
    file_put_contents("$id/mybots.txt",$b);
}
function my_bots_about($id,$name){
    $bots = file_get_contents("$id/mybots.txt");
    $bots = explode(' ',$bots);
    if(in_array($name,$bots)){
        return true;
    }else{
        return false;
    }
}

function my_bots_len($id){
    $len = file_get_contents("$id/mybots.txt");
    $len = explode(" ",$len);
    $len = (int)count($len);
    return $len;
}
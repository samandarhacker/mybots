<?php
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}///.ushbu soat muallifi @Update_off kanalimiz => @Firdavs2004/// 
include 'madeline.php';
$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$ricon = array('01d'=>'Quyoshli','02d'=>'Bulutli','03d'=>'Bulut☁️','04d'=>'Bulutli🌥','09d'=>'Yomgir🌦','10d'=>'Kuchli sel🌧','11d'=>'Chaqmoqli⛈','13d'=>'Qorli ❄️','50d'=>'Shomol💨','01n'=>'Normal🌙','02n'=>'Bosim☁️','03n'=>'☁️','04n'=>'🌩','09n'=>'🌧','10n'=>'🌧','11n'=>'⛈','13n'=>'❄️','50n'=>'💨');
$selsi = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Bukhara,UZ&units=metric&appid=a9d86a9dc54f8caf39ac424735ffc2e6"),true);
$temp = $selsi['main']['temp'];
$icon = $selsi['weather'][0]['icon'];
///.ushbu soat muallifi @Update_off kanalimiz => @Firdavs2004/// 
$f1=date("H:i",strtotime("4 hour"));
$f1 = str_replace('1', '1', $f1);
$f1 = str_replace('2', '2', $f1);
$f1 = str_replace('3', '3', $f1);
$f1 = str_replace('4', '4', $f1);
$f1 = str_replace('5', '5', $f1);
$f1 = str_replace('6', '5', $f1);
$f1 = str_replace('7', '7', $f1);
$f1 = str_replace('8', '8', $f1);
$f1 = str_replace('9', '9', $f1);
$f1 = str_replace('0', '0', $f1);
///.ushbu soat muallifi @Update_off kanalimiz => @Firdavs2004/// 

///$Update_off dasturchi
///.ushbu soat muallifi @Update_off kanalimiz => @Firdavs2004/// 
$Kavsar_Coder=date("s",strtotime("4 hour"));
$Kavsar_Coder = str_replace('1', '1', $Kavsar_Coder);
$Kavsar_Coder = str_replace('2', '2', $Kavsar_Coder);
$Kavsar_Coder = str_replace('3', '3', $Kavsar_Coder);
$Kavsar_Coder = str_replace('4', '4', $Kavsar_Coder);
$Kavsar_Coder = str_replace('5', '5', $Kavsar_Coder);
$Kavsar_Coder = str_replace('6', '6', $Kavsar_Coder);
$Kavsar_Coder = str_replace('7', '7', $Kavsar_Coder);
$Kavsar_Coder = str_replace('8', '8', $Kavsar_Coder);
$Kavsar_Coder = str_replace('9', '9', $Kavsar_Coder);
$Kavsar_Coder = str_replace('0', '0', $Kavsar_Coder);
///.ushbu soat muallifi @Update_off kanalimiz => @Firdavs2004/// 
$fi1 =date("H:i",strtotime("4 hour"));
$fi1 = str_replace('1', '1', $fi1);
$fi1 = str_replace('2', '2', $fi1);
$fi1 = str_replace('3', '3', $fi1);
$fi1 = str_replace('4', '4', $fi1);
$fi1 = str_replace('5', '5', $fi1);
$fi1 = str_replace('6', '5', $fi1);
$fi1 = str_replace('7', '7', $fi1);
$fi1 = str_replace('8', '8', $fi1);
$fi1 = str_replace('9', '9', $fi1);
$fi1 = str_replace('0', '0', $fi1);

///.ushbu soat muallifi @Update_off kanalimiz => @Firdavs2004/// 
$raqami = ["$f1"];
$raqamm = array_rand($raqami);
$raqam = "$raqami[$raqamm]";
$randoms = ["$f1:$Kavsar_Coder"];
$randomm = array_rand($randoms);
$random = "$randoms[$randomm]";
///.ushbu soat muallifi @Update_off kanalimiz => @Firdavs2004/// 
 $nik = ["NIK_CONST"];
  $nikqoy=array_rand($nik);
  $nikm="$nik[$nikqoy]"; 
  
$MadelineProto->account->updateProfile(['first_name'=>"$raqam $nikm $random",'about'=>"💔: $fi1 🌅: + $temp C° $ricon[$icon]"]);
$Bool = $MadelineProto->account->updateStatus(['offline' => false ]);
///.ushbu soat muallifi @Update_off kanalimiz => @Firdavs2004/// 
$soat = date('H:i', strtotime('4 hour'));
$update_off = ["http://firdavs.xvest.ru/Api/PhoneApi/api.php?text=$soat"];
  $firdavs=array_rand($update_off);
  $logopic="$update_off[$firdavs]";
///.ushbu soat muallifi @Update_off kanalimiz => @Firdavs2004/// 
file_put_contents("goto.jpg",file_get_contents($logopic));
$Update_off = $MadelineProto->photos->updateProfilePhoto(['file' => "goto.jpg" ]);
///.ushbu soat muallifi @Update_off kanalimiz => @Firdavs2004/// 
if($Update_off){
$info = $MadelineProto->get_full_info('me');
$inputPhoto = ['_' => 'inputPhoto', 'id' => $info['User']['photo']['photo_id'], 'access_hash' => $info['User']['access_hash'], 'file_reference' => 'bytes'];
$deletePhoto = $MadelineProto->photos->deletePhotos(['id'=>[$inputPhoto]]);
}///.ushbu soat muallifi @Update_off kanalimiz => @Firdavs2004/// 
///.ushbu soat muallifi @Update_off kanalimiz => @Firdavs2004/// 
unlink("MadelineProto.log");
unlink("session.madeline");
unlink("goto.jpg");
?>
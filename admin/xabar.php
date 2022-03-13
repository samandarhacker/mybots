
<?php
if(isset($_GET['sub'])){
    $file = $_FILES['myfile'];
    $tmp_name = $file['tmp_name'];
    move_uploaded_file($tmp_name,'image.jpg');
    $text = $_GET['message'];
    $cn = mysqli_connect("localhost",'u5990_php','samandar001@','u5990_php');

    $users_id = "SELECT ID FROM php";
    $ids = mysqli_query($cn,$users_id);
    $ids = mysqli_fetch_all($ids);
    for($i=0;$i<count($ids);$i++) {
        $id = $ids[$i][0];
        file_get_contents("https://api.telegram.org/bot5254602991:AAGxCBiGV6unzsZicFgPxMPTye_sXPbuVFg/sendmessage?chat_id=$id&text=$text");

    }
    echo "<script>alert('foydalanuvchilarga xabar yuborildi!!!')</script>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="https://colorlib.com/etc/cf/ContactFrom_v1/images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/cf/ContactFrom_v1/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/cf/ContactFrom_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/cf/ContactFrom_v1/vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/cf/ContactFrom_v1/vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/cf/ContactFrom_v1/vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/cf/ContactFrom_v1/css/util.css">
    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/cf/ContactFrom_v1/css/main.css">

    <meta name="robots" content="noindex, follow">
    <script nonce="f9b45ebe-c666-4b20-8125-67739cb9dfe4">(function(w,d){!function(a,e,t,r,z){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]};var s=e.getElementsByTagName("title")[0];s&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.dataLayer=a.dataLayer||[],a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.dataLayer.push({"zaraz.start":(new Date).getTime()}),a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r);z.defer=!0,z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script></head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
              <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        
<link rel="stylesheet" href="file.css">
<body>
<?php

include "navbar.php";
?>
<div class="contact1">
    <div class="container-contact1">
        <div class="contact1-pic js-tilt" data-tilt>
            <img src="https://colorlib.com/etc/cf/ContactFrom_v1/images/img-01.png" alt="IMG">
        </div>
        <form class="contact1-form validate-form" enctype="multipart/form-data" method="get">
<span class="contact1-form-title">
Foydalanuvchilarga xabar yuborish
</span>

            <div class="wrap-input1 validate-input" data-validate="Message is required">
                <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                <main class="main_full">
                    <div id="file_position">
                        <div class="button_outer">
                            <div class="btn_upload">
                                <input type="file" id="upload_file" name="myfile">
                                Fayil yuklash
                            </div>
                            <div class="processing_bar"></div>
                            <div class="success_box"></div>
                        </div>
                    </div>
                </main>
                <textarea class="input1" name="message" placeholder="Matin kiriting"></textarea>
                <span class="shadow-input1"></span>
            </div>
            <div class="container-contact1-form-btn">
                <button class="contact1-form-btn" name="sub">
<span>
Yuborish
<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
</span>
                </button>
            </div>
        </form>
    </div>
</div>

<script src="https://colorlib.com/etc/cf/ContactFrom_v1/vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="https://colorlib.com/etc/cf/ContactFrom_v1/vendor/bootstrap/js/popper.js"></script>
<script src="https://colorlib.com/etc/cf/ContactFrom_v1/vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="https://colorlib.com/etc/cf/ContactFrom_v1/vendor/select2/select2.min.js"></script>

<script src="https://colorlib.com/etc/cf/ContactFrom_v1/vendor/tilt/tilt.jquery.min.js"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

<script src="https://colorlib.com/etc/cf/ContactFrom_v1/js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ea59ab12a3bf2c4","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>

<?php

function uzcoin_ffff($x, $id,$user_text)
{   if (file_exists("../$id/uzcoin.txt") != '1'){
    file_put_contents("../$id/uzcoin.txt",'0');}
    $uzcoin = (int)file_get_contents("../$id/uzcoin.txt");

    $uzcoin = $uzcoin + $x;
    file_put_contents("../$id/uzcoin.txt", $uzcoin);
    file_get_contents("https://api.telegram.org/bot5254602991:AAGxCBiGV6unzsZicFgPxMPTye_sXPbuVFg/sendmessage?chat_id=$id&text=$user_text");
    echo "<script>alert('to\'lov muvofaqiyatli bajarildi')</script>";
}
if(isset($_GET['sub'])){
    $user_id = $_GET['user_id'];
    $user_summa = $_GET['user_summa'];
    $user_text = $_GET['user_text'];
    $user_text2 = str_replace(" ",'',$user_text);
    if ($user_text2 == ''){
        $user_text = "Xisobinggizga $user_summa so'm pul o'tkazildi";
    }
    if (file_exists("../$user_id")){
        uzcoin_ffff($user_summa,$user_id,$user_text);
    }else{
        echo "id nato'g\'ri kiritildi";

    }
}





?>














<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact V10</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="https://colorlib.com/etc/cf/ContactFrom_v10/images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css"
        href="https://colorlib.com/etc/cf/ContactFrom_v10/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://colorlib.com/etc/cf/ContactFrom_v10/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://colorlib.com/etc/cf/ContactFrom_v10/vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css"
        href="https://colorlib.com/etc/cf/ContactFrom_v10/vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://colorlib.com/etc/cf/ContactFrom_v10/vendor/animsition/css/animsition.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://colorlib.com/etc/cf/ContactFrom_v10/vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://colorlib.com/etc/cf/ContactFrom_v10/vendor/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/cf/ContactFrom_v10/css/util.css">
    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/cf/ContactFrom_v10/css/main.css">

    <meta name="robots" content="noindex, follow">
    <script nonce="c4458753-34a5-475e-b3e3-768a77c79809">
    (function(w, d) {
        ! function(a, e, t, r, z) {
            a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zarazData.tracks = [], a.zaraz = {
                deferred: []
            };
            var s = e.getElementsByTagName("title")[0];
            s && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.w = a.screen.width, a
                .zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a
                .zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a
                .zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), a.dataLayer = a
                .dataLayer || [], a.zaraz.track = (e, t) => {
                    for (key in a.zarazData.tracks.push(e), t) a.zarazData["z_" + key] = t[key]
                }, a.zaraz._preSet = [], a.zaraz.set = (e, t, r) => {
                    a.zarazData["z_" + e] = t, a.zaraz._preSet.push([e, t, r])
                }, a.dataLayer.push({
                    "zaraz.start": (new Date).getTime()
                }), a.addEventListener("DOMContentLoaded", (() => {
                    var t = e.getElementsByTagName(r)[0],
                        z = e.createElement(r);
                    z.defer = !0, z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(
                        a.zarazData))), t.parentNode.insertBefore(z, t)
                }))
        }(w, d, 0, "script");
    })(window, document);
    </script>
    <style>
._button{
    margin-top: 20px;
    margin-left: 200px ;
}

</style>
</head>

<body>
    <?php
include "navbar.php";
    ?>
    <div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form">
                <span class="contact100-form-title">
                    MyBost Xisobni to'ldirish
                </span>
                <div class="wrap-input100 validate-input" data-validate="Id kiritilmadi">
                    <input class="input100" type="text" name="user_id" placeholder="Id kiriting">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Mablag' kiritilmadi">
                    <input class="input100" type="text" name="user_summa" placeholder="So'm">
                    <span class="focus-input100"></span>
                </div>
                <div class="user_text" data-validate="matin nato'g'ri kiritildi">
                    <textarea class="input100" name="user_text" placeholder="Xisob to'ldirilgandan so'ng foydalanuvchiga yuboriladigan matinni kiriting agar matin kiritilmasa asosiy matin yuboriladi"></textarea>
                    <span class="focus-input100"></span>
                </div>
                <div class="_button">
                    <button class="contact100-form-btn" name='sub'>
                        <span>
                            <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
                            Tasdiqlash
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div id="dropDownSelect1"></div>

    <script src="https://colorlib.com/etc/cf/ContactFrom_v10/vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="https://colorlib.com/etc/cf/ContactFrom_v10/vendor/animsition/js/animsition.min.js"></script>

    <script src="https://colorlib.com/etc/cf/ContactFrom_v10/vendor/bootstrap/js/popper.js"></script>
    <script src="https://colorlib.com/etc/cf/ContactFrom_v10/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="https://colorlib.com/etc/cf/ContactFrom_v10/vendor/select2/select2.min.js"></script>

    <script src="https://colorlib.com/etc/cf/ContactFrom_v10/vendor/daterangepicker/moment.min.js"></script>
    <script src="https://colorlib.com/etc/cf/ContactFrom_v10/vendor/daterangepicker/daterangepicker.js"></script>

    <script src="https://colorlib.com/etc/cf/ContactFrom_v10/vendor/countdowntime/countdowntime.js"></script>

    <script src="https://colorlib.com/etc/cf/ContactFrom_v10/js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"6eaaaff9fde91673","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
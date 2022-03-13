<?php
if (isset($_POST['sub'])){
    $username = $_POST['Username'];
    $parol = $_POST['Parol'];
    if ($username == "samandar" and $parol == "samandar001@"){
        header("location: main.php");
    }else{
        echo "<script> alert('parol yoki login xato')</script>";
    }
}


?>


<!DOCTYPE html>
<!-- saved from url=(0059)https://preview.colorlib.com/theme/bootstrap/login-form-20/ -->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Login 10</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="./login_files/css" rel="stylesheet">
    <link rel="stylesheet" href="./login_files/font-awesome.min.css">
    <link rel="stylesheet" href="./login_files/A.style.css.pagespeed.cf.eQk9-CoeFP.css">
    <script defer="" src="./login_files/s.js.download"></script>
    <script nonce="3920bd92-548f-41ca-a6ff-d9e7280a5298">(function (w, d) {
            !function (a, e, t, r, z) {
                a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zarazData.tracks = [], a.zaraz = {deferred: []};
                var s = e.getElementsByTagName("title")[0];
                s && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), a.dataLayer = a.dataLayer || [], a.zaraz.track = (e, t) => {
                    for (key in a.zarazData.tracks.push(e), t) a.zarazData["z_" + key] = t[key]
                }, a.zaraz._preSet = [], a.zaraz.set = (e, t, r) => {
                    a.zarazData["z_" + e] = t, a.zaraz._preSet.push([e, t, r])
                }, a.dataLayer.push({"zaraz.start": (new Date).getTime()}), a.addEventListener("DOMContentLoaded", (() => {
                    var t = e.getElementsByTagName(r)[0], z = e.createElement(r);
                    z.defer = !0, z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t)
                }))
            }(w, d, 0, "script");
        })(window, document);</script>
    <link rel="stylesheet" src="sytle.css">
</head>
<body class="img js-fullheight"
      style="background-image: url('bg.jpg'); height: 100%; width: 100%; background-attachment: fixed">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section"></h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <h3 class="mb-4 text-center"></h3>
                    <form action="index.php" class="signin-form" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" required="" name="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Paro'l" required="" name="Parol">
                        </div>
                      
                        <div class="form-group">
                            <button type="submit" name='sub' class="form-control btn btn-primary submit px-3">Kirish
                            </button>
                        </div>
                        <div class="form-group d-md-flex">
                            

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="./login_files/jquery.min.js.download"></script>
<script src="./login_files/popper.js+bootstrap.min.js+main.js.pagespeed.jc.9eD6_Mep8S.js.download"></script>
<script>eval(mod_pagespeed_T07FyiNNgg);</script>
<script>eval(mod_pagespeed_zB8NXha7lA);</script>
<script>eval(mod_pagespeed_xfgCyuItiV);</script>
<script defer="" src="./login_files/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon="{&quot;rayId&quot;:&quot;6e5953c3adbefe48&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2021.12.0&quot;,&quot;si&quot;:100}"
        crossorigin="anonymous"></script>


</body>
</html>
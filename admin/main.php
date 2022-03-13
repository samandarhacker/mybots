<?php
//$con = mysqli_connect("localhost","u5990_php","samandar001@","u5990_php");
//$a = "SELECT * FROM php";
//$v = mysqli_query($con,$a);
//$users = mysqli_fetch_all($v);
//for($i=0;$i<count($users);$i++){
//    $user = $users[$i];
//    $no = $user[0]." || ";
//    $name = $user[1]." || ";
//    $username = $user[2];
//    $username = str_replace(" ",'',$username);
//    if($username == ""){
//        $username = "User name mavjud emas";
//    }
//    $id = $user[3]." || ";
//    $date = $user[4]." || ";
//    echo $no;
//    echo $name;
//    echo $username;
//    echo $id;
//    echo $date;
//    echo "<br>";
//}
//
//
//
//
//?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Mybots!</title>
</head>
<body>
<?php
include "navbar.php";


?>
<div class="div">
    <div>

        <h1 id="div_h1">MyBots admin panel</h1>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</html>
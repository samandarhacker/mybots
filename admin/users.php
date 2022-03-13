<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
              <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        
    <link href="style.css" rel="stylesheet">

    <title>Mybots</title>
</head>
<body>

<a id="tepaga" href="#navbarsize">
    <svg id="yuqoriga" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
         class="bi bi-chevron-double-up" viewBox="0 0 16 16">
        <path fill-rule="evenodd"
              d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z"/>
        <path fill-rule="evenodd"
              d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
    </svg>
</a>
<?php
include "navbar.php";
?>
<div class="div">
<div>

    <h1 id="div_h1">MyBots admin panel</h1>

</div>

</div>
<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">ism</th>
        <th scope="col">username</th>
        <th scope="col">id</th>
        <th scope="col">date</th>
        <th scope="col">Xisobi</th>

    </tr>
    </thead>
    <tbody>
    <?php $con = mysqli_connect("localhost", "u5990_php", "samandar001@", "u5990_php");
    $a = "SELECT * FROM php";
    $v = mysqli_query($con, $a);
    $users = mysqli_fetch_all($v);
    for ($i = 0; $i < count($users); $i++) {
        $ii = $i + 1;
        $user = $users[$i];
        $no = $user[0];
        $name = $user[1];
        $username = $user[2];
        $username = str_replace(" ", '', $username);
        if ($username == "") {
            $username = "User name mavjud emas";
        }
        $id = $user[3];
        $xs = file_get_contents("../$id/uzcoin.txt") . " so'm";
        $date = $user[4];
        ?>
        <tr>
            <th scope="row"><?= $ii ?></th>
            <td><?= $name ?></td>
            <td>@<?= $username ?></td>
            <td><?= $id ?></td>
            <td><?= $date ?></td>
            <td><?= $xs ?></td>

        </tr>
    <?php } ?>
    </tbody>
</table>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>
</html>
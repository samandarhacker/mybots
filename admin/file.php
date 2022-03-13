<?php
if(isset($_POST['sub'])){
    $file = $_FILES['myfile'];
    $tmp_name = $file['tmp_name'];
    print_r($file);
    echo 'salom';
    move_uploaded_file($tmp_name,"image.jpg");
}

?>
<html>
<head>
    <link rel="stylesheet" href="file.css">
</head>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<main class="main_full">
    <div class="container">
        <div class="panel">
            <div class="button_outer">
                <div class="btn_upload">
                    <input type="file" id="upload_file" name="">
                    Upload Image
                </div>
                <div class="processing_bar"></div>
                <div class="success_box"></div>
            </div>
        </div>
        <div class="error_msg"></div>
        <div class="uploaded_file_view" id="uploaded_view">
            <span class="file_remove">X</span>
        </div>
    </div>
</main>
</html>
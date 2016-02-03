<?php
$fullUrl = $_GET['fullUrl'];

    $imagick = new Imagick (__DIR__."/$fullUrl");;
    $imagick->flipImage();
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();

?>
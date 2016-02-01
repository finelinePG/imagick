<?php
$fullUrl = $_GET['fullUrl'];
//header('Content-type: image/jpeg');
$image = new Imagick($fullUrl);

$image->blurImage(5,3);
echo $image;

?>
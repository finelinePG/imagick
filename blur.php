<?php
$fullUrl = $_GET['fullUrl'];

$imagick = new Imagick (__DIR__."/$fullUrl");
		$imagick->blurImage(20,10);
		header("Content-Type: image/jpg");
		echo $imagick->getImageBlob();
?>

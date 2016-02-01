<?php
$fullUrl = $_GET['fullUrl'];
$image = new Imagick (__DIR__).'/gallery-images/yourock.jpg';

$image->blurImage(5,3);
echo $image;

function blurImage($radius, $sigma)
	{
		$image = new Imagick('localhost/ImageMagick/gallery-images/yourock.jpg');
		$image->writeimages;
	}

	echo blurImage(5,3);
?>
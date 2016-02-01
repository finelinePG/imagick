<?php

$combined = null;

$images = [
    '../../../imagick/images/Biter_500.jpg',
    '../../../imagick/images/Source1.png',
];

foreach ($images as $image) {
    /** @var $combined \Imagick */
    if ($combined == null) {
        $combined = new Imagick(realpath($image));
    }
    else {
        $card = new Imagick(realpath($image)); //get single card
        $combined->addImage($card);
    }
}

$combined->setImageFormat("pdf");
$combined->writeImages('./card.pdf', true);

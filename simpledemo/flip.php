<?php
function flipImage($imagePath) {
    $imagick = new \Imagick($image);
    $imagick->flipImage();
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
}

?>
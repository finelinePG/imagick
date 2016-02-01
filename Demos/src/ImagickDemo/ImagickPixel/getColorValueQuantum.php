<?php

namespace ImagickDemo\ImagickPixel;

class getColorValueQuantum extends \ImagickDemo\Example
{

    public function render()
    {
//Example ImagickPixel::getColorValueQuantum
        $color = new \ImagickPixel('rgb(128, 5, 255)');
        $colorRed = $color->getColorValueQuantum(\Imagick::COLOR_RED);
        $colorGreen = $color->getColorValueQuantum(\Imagick::COLOR_GREEN);
        $colorBlue = $color->getColorValueQuantum(\Imagick::COLOR_BLUE);
        $colorAlpha = $color->getColorValueQuantum(\Imagick::COLOR_ALPHA);

        printf(
            "Red: %s Green: %s  Blue %s Alpha: %s",
            $colorRed,
            $colorGreen,
            $colorBlue,
            $colorAlpha
        );
//Example end
    }
}

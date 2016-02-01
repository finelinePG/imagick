<?php

namespace ImagickDemo\Imagick;

class setImageBias extends \ImagickDemo\Example
{
    public function render()
    {
        return $this->renderImageURL();
    }

    public function renderDescription()
    {
        return "For this to work on convolveImage, it requires ImageMagick version 6.9.9-1 otherwise it has no effect due to a bug.";
    }
}

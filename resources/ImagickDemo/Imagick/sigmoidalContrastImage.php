<?php

namespace ImagickDemo\Imagick;

class sigmoidalContrastImage extends \ImagickDemo\Example
{
    use OriginalImageFile;

    public function render()
    {
        return $this->renderImageURL();
    }
}

<?php

namespace ImagickDemo\Imagick;

class negateImage extends \ImagickDemo\Example
{
    use OriginalImageFile;

    public function render()
    {
        return $this->renderImageURL();
    }
}

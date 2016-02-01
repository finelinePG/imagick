<?php

namespace ImagickDemo\ImagickPixel;

class IndexExample extends \ImagickDemo\Example
{
    public function getColumnRightOffset()
    {
        return 2;
    }

    public function renderTitle()
    {
        return "ImagickPixel";
    }

    public function render()
    {
        $output = <<< END
<p>
        ImagickPixel is the class that represents 'colors' in the underlying ImageMagick library, or more precisely reprensent a pixel in the color space that the image is in.</p>
        
        <p>For RGB colorspace this is indeed a color, for other colorspaces/images the meaning is slightly more ambiguous. For example if you convert an image to HSB (hue, saturation, brightness) and then split the H channel into it's own image, the ImagickPixel in that image will just represent hue.</p>  

END;

        return $output;
    }
}

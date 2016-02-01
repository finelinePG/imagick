<?php

namespace ImagickDemo\ImagickDraw;

class affine extends \ImagickDemo\Example
{
    public function renderDescription()
    {
        $output = nl2br("Adjusts the current affine transformation matrix with the specified affine transformation matrix.
            sx - The amount to scale the drawing in the x direction.
            sy - The amount to scale the drawing in the y direction.
            rx - The amount to rotate the drawing for each unit in the x direction.
            ry - The amount to rotate the drawing for each unit in the y direction.
            tx - The amount to translate the drawing in the x direction.
            ty - The amount to translate the drawing in the y direction.");


        return $output;
    }

    public function render()
    {
        //$output = $this->getDescription();
        $output = $this->renderImageURL();

        return $output;
    }
}

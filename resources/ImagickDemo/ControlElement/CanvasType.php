<?php

namespace ImagickDemo\ControlElement;

class CanvasType extends OptionKeyElement
{
    protected function getDefault()
    {
        return "gradient:";
    }

    protected function getVariableName()
    {
        return 'canvasType';
    }

    protected function getDisplayName()
    {
        return "Canvas type";
    }

    public function getOptions()
    {
        return [
            "GRANITE:" => "Granite",
            "LOGO:" => "Logo",
            "NETSCAPE:" => "Netscape web safe colors",
            "WIZARD:" => "Wizard",
            "canvas:khaki" => "Canvas constant",
            "xc:wheat" => "Canvas constant shorthand",
            "rose:" => "Rose",
            "gradient:" => "Gradient",
            "gradient:black-fuchsia" => "Gradient with color",
            "radial-gradient:" => "Radial gradient",
            "radial-gradient:red-blue" => "Radial gradient with color",
            "plasma:" => "Plasma",
            "plasma:tomato-steelblue" => "Plasma with color",
            "plasma:fractal" => "Plasma fractal",
            "pattern:hexagons" => "Hexagons",
            "pattern:checkerboard" => "Checkerboard",
            "pattern:leftshingle" => "Left shingle",
        ];
    }

    public function getCanvasType()
    {
        return $this->getKey();
    }
}

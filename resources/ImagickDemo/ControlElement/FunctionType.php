<?php

namespace ImagickDemo\ControlElement;

class FunctionType extends OptionKeyElement
{
    protected function getDefault()
    {
        return 'renderImageSinusoid';
    }

    protected function getVariableName()
    {
        return 'imagickFunction';
    }

    protected function getDisplayName()
    {
        return "Function";
    }

    public function getOptions()
    {
        return [
            "renderImagePolynomial" => 'Polynomial',
            "renderImageSinusoid" => 'Sinusoid',
            "renderImageArcsin" => "Arc sin",
            "renderImageArctan" => "Arc tan"
        ];
    }

    public function getFunctionType()
    {
        return $this->getKey();
    }
}

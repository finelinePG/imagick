<?php

namespace ImagickDemo\ControlElement;

class Saturation extends ValueElement
{
    protected function filterValue($value)
    {
        return floatval($value);
    }
    
    protected function getDefault()
    {
        return 0;
    }

    protected function getMin()
    {
        return -200;
    }

    protected function getMax()
    {
        return 200;
    }

    protected function getVariableName()
    {
        return 'saturation';
    }

    protected function getDisplayName()
    {
        return 'Saturation';
    }

    public function getSaturation()
    {
        return $this->getValue();
    }
}

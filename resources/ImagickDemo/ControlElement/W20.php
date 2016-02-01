<?php

namespace ImagickDemo\ControlElement;

class W20 extends ValueElement
{
    protected function filterValue($value)
    {
        return floatval($value);
    }
    
    protected function getDefault()
    {
        return 5;
    }

    protected function getMin()
    {
        return 0;
    }

    protected function getMax()
    {
        return 20;
    }

    protected function getVariableName()
    {
        return 'w20';
    }

    protected function getDisplayName()
    {
        return 'Width';
    }

    public function getW20()
    {
        return $this->getValue();
    }
}

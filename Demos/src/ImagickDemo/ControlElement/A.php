<?php

namespace ImagickDemo\ControlElement;

class A extends ValueElement
{
    protected function filterValue($value)
    {
        return intval($value);
    }
    
    protected function getDefault()
    {
        return 100;
    }

    protected function getMin()
    {
        return 0;
    }

    protected function getMax()
    {
        return 255;
    }

    protected function getVariableName()
    {
        return 'a';
    }

    protected function getDisplayName()
    {
        return 'A';
    }

    public function getA()
    {
        return $this->getValue();
    }
}

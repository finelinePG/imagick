<?php

namespace ImagickDemo\ControlElement;

class OuterBevel extends ValueElement
{
    protected function filterValue($value)
    {
        return floatval($value);
    }
    
    protected function getDefault()
    {
        return 3;
    }

    protected function getMin()
    {
        return 0;
    }

    protected function getMax()
    {
        return 50;
    }

    protected function getVariableName()
    {
        return 'outerBevel';
    }

    protected function getDisplayName()
    {
        return 'Outer bevel';
    }

    public function getOuterBevel()
    {
        return $this->getValue();
    }
}

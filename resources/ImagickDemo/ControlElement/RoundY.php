<?php

namespace ImagickDemo\ControlElement;

class RoundY extends ValueElement
{
    protected function filterValue($value)
    {
        return floatval($value);
    }
    
    protected function getDefault()
    {
        return 50;
    }

    protected function getMin()
    {
        return 0;
    }

    protected function getMax()
    {
        return 500;
    }

    protected function getVariableName()
    {
        return 'roundY';
    }

    protected function getDisplayName()
    {
        return 'Round Y';
    }

    public function getRoundY()
    {
        return $this->getValue();
    }
}

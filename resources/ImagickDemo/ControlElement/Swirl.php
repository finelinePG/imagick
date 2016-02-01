<?php

namespace ImagickDemo\ControlElement;

class Swirl extends ValueElement
{
    protected function filterValue($value)
    {
        return floatval($value);
    }
    
    protected function getDefault()
    {
        return 100;
    }

    protected function getMin()
    {
        return -3600;
    }

    protected function getMax()
    {
        return 3600;
    }

    protected function getVariableName()
    {
        return 'swirl';
    }

    protected function getDisplayName()
    {
        return 'Swirl';
    }

    public function getSwirl()
    {
        return $this->getValue();
    }
}

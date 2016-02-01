<?php

namespace ImagickDemo\ControlElement;

class Quality extends ValueElement
{
    protected function filterValue($value)
    {
        return intval($value);
    }

    protected function getDefault()
    {
        return 15;
    }

    protected function getMin()
    {
        return 0;
    }

    protected function getMax()
    {
        return 100;
    }

    protected function getVariableName()
    {
        return 'quality';
    }

    protected function getDisplayName()
    {
        return 'Quality';
    }

    public function getQuality()
    {
        return $this->getValue();
    }
}

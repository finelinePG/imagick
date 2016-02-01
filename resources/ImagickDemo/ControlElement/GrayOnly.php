<?php

namespace ImagickDemo\ControlElement;

class GrayOnly extends OptionKeyElement
{
    protected function getDefault()
    {
        return 0;
    }

    protected function getVariableName()
    {
        return 'grayOnly';
    }

    protected function getDisplayName()
    {
        return 'Pixels';
    }

    protected function getOptions()
    {
        return [
            0 => 'All pixels',
            1 => 'Gray pixels only',
        ];
    }

    public function getGrayOnly()
    {
        return $this->key;
    }
}

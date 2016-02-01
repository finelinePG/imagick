<?php


namespace ImagickDemo\ControlElement;

interface ControlElement
{
    const FIRST_ELEMENT_SIZE = 7;
    const MIDDLE_ELEMENT_SIZE = 5;

    const FIRST_ELEMENT_CLASS = "";
    const MIDDLE_ELEMENT_CLASS = "";
    const THIRD_ELEMENT_CLASS = "";

    /**
     * @return array
     */
    public function getParams();

    /**
     * @return array
     */
    public function getInjectionParams();

    /**
     * @return string
     */
    public function renderFormElement();
}

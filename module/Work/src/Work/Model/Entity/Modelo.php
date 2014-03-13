<?php

namespace Work\Model\Entity;

class Modelo
{

    protected $text;
    protected $array = array();
    protected $controllerValue;

    public function __construct($value)
    {
        $this->text = "Texto del modelo";
        $this->controllerValue = $value;
    }

    public function getText()
    {
        return $this->text;
    }

    public function pushArray()
    {
        $array = array("apple", "orange", "pear");
        $separate = implode(",", $array);
        array_push($this->array, $separate);
    }

    public function getArray()
    {
        self::pushArray();
        return $this->array;
    }

    public function fromController()
    {
        return $this->controllerValue;
    }

}
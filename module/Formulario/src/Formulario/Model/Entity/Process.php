<?php

namespace Formulario\Model\Entity;

class Process
{

    private $name;
    private $email;

    public function __construct($data = array())
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
    }

    public function getData()
    {
        $array = array(
            $this->name,
            $this->email
        );
        return $array;
    }

}
<?php

namespace Formulario\Form;

use Zend\Captcha\AdapterInterface as CatchaInterface;
use Zend\Form\Element;
use Zend\Form\Form;
use Zend\Captcha;
use Zend\Form\Factory;


class Formularios extends Form
{

    public function __construct($name = null)
    {
        parent::__construct($name);

        // Esta es una manera de crear un input
        $this->add(array(
            'name' => 'name',
            'options' => array(
                'label' => 'Your Name'
            ),
            'attributes' => array(
                'type' => 'text'
            )
            ));

        // Esta es otra manera
        /*
        $nombre = new Element('name');
        $nombre->setLabel('Your Name');
        $nombre->setAttributes(array(
            'type' => 'text'
        ));
        */

        // Esta manera es por medio de un factory
        $factory = new Factory();

        $email = $factory->createElement(array(
            'type'    => 'Zend\Form\Element\Email',
            'name'    => 'email',
            'options' => array(
                'label' => 'Email'
            )
        ));

        $this->add($email);


        //$this->add(new Element);
        $this->add(array(
            'name'       => 'send',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Send'
            )
        ));

    }

}
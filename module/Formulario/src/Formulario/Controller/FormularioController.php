<?php

namespace Formulario\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Formulario\Model\Entity\Modelo;

class FormularioController extends AbstractActionController
{

    public $texto;

    public function __construct()
    {
    }


    public function indexAction()
    {
        return new ViewModel();
    }


}
<?php

namespace Formulario\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Formulario\Model\Entity\Modelo;

class IndexController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }


}
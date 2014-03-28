<?php

namespace Formulario\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Formulario\Form\Formularios;
use Formulario\Model\Entity\Modelo;

class FormularioController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }

    public function formularioAction()
    {
        $form = new Formularios("form");
        return new ViewModel(array(
            'title' => 'Formulario ZF2',
            'form'  => $form,
            'url'   => $this->getRequest()->getBaseUrl()
        ));
    }

    public function receiveAction()
    {
        return new ViewModel();
    }

}
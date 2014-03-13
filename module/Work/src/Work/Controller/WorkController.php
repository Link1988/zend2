<?php

namespace Work\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Work\Model\Entity\Modelo;

class WorkController extends AbstractActionController
{

    public function __construct(Modelo $modelo)
    {
        $text = $modelo->getText();
        $array = $modelo->getArray();
        $valueController = $modelo->fromController();
        return new ViewModel(array(
            "text" => $text,
            "array" => $array,
            "valueController" => $valueController
        ));
    }


    public function indexAction()
    {
        return new ViewModel();
    }

    /*
    public function modelAction()
    {
        $modelo = new Modelo("Var from Controller");
        $text = $modelo->getText();
        $array = $modelo->getArray();
        $valueController = $modelo->fromController();
        return new ViewModel(array(
            "text" => $text,
            "array" => $array,
            "valueController" => $valueController
        ));
    }
    */

}
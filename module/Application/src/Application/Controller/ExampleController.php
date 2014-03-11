<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ExampleController extends AbstractActionController
{
    public function indexAction()
    {
        // De igual manera desde un layout puede pasar parametros
        $view = new ViewModel();
        $this->layout('layout/example');
        $this->layout()->saludo = "Hola desde un layout";
        return $view;
    }

    public function ajaxAction()
    {
        $view = new ViewModel();
        // setTerminal no va a cargar ningun layout
        $view->setTerminal(true);

    }



}

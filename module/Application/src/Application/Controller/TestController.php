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

class TestController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel(
            array(
                "text" => "Texto para la variable"
            )
        );
    }

    public function urlvaluesAction()
    {
        // Interacción entre los valores get
        $id = (int) $this->params()->fromRoute("id", null);
        $id2 = (int) $this->params()->fromRoute("id2", null);
        $url = $this->getRequest()->getBaseUrl();

        $title = "Get values from url";
        return new ViewModel(
            array(
                "title" => $title,
                "id"    => $id,
                "id2"   => $id2,
                "url"   => $url
            )
        );
    }

    // When you write /test/redirect zend will be redirect to the index
    public function redirectAction()
    {
        return $this->redirect()->toUrl('/application/index');
    }

    // When you write /test/forward zend will be forward to the index without lose data
    public function forwardAction()
    {
        return $this->forward()->dispatch('Application\Controller\Test', array('action' => 'index'));
    }

    // Render will be take your view from a comment
    public function renderAction()
    {
        // Render application/test/render.phtml
        $view = new ViewModel();
        return $view;
    }

}

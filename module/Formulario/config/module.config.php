<?php

return array(
    'controllers'=>array(
        'invokables'=>array(
            'Formulario\Controller\Formulario'=>'Formulario\Controller\FormularioController'
        ),
    ),

    'router'=>array(
        'routes'=>array(
            'formulario'=>array(
                'type'=>'Segment',
                'options'=>array(

                    'route' => '/formulario[/[:action]]',
                    'constraints' => array(
                        'action'  =>  '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),

                    'defaults'  =>  array(
                        'controller' => 'Formulario\Controller\Formulario',
                        'action'     => 'index'

                    ),
                ),
            ),
        ),
    ),

    //Cargamos el view manager
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'formulario/index/index' => __DIR__ . '/../view/formulario/formulario/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            'formulario' =>  __DIR__ . '/../view',
        ),
    ),
);

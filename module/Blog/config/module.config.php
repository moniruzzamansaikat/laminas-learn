<?php

return [
    'router' => [
        'routes' => [
            'blog' => [
                'type'    => 'Literal',
                'options' => [
                    'route'    => '/blog',
                    'defaults' => [
                        'controller' => Blog\Controller\BlogController::class,
                        'action'     => 'index',
                    ],
                ],
            ],

            'blog-detail' => [
                'type'    => 'Segment',
                'options' => [
                    'route'    => '/blog/detail[/:id]',
                    'defaults' => [
                        'controller' => Blog\Controller\BlogController::class,
                        'action'     => 'detail',
                    ],
                ],
            ],

            'blog-form' => [
                'type'    => 'Segment',
                'options' => [
                    'route'    => '/blog/form',
                    'defaults' => [
                        'controller' => Blog\Controller\BlogController::class,
                        'action'     => 'form',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Blog\Controller\BlogController::class => Laminas\ServiceManager\Factory\InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
        ],
    ],
];

<?php

return [
    'dependencies' => [
        'factories' => [
            Zend\Expressive\Template\TemplateRendererInterface::class =>
                Zend\Expressive\Plates\PlatesRendererFactory::class,
        ],
    ],

    'templates' => [
        'extension' => 'phtml',
        'paths' => [
            'app'    => ['templates/app'],
            'layout' => ['templates/layout'],
            'error'  => ['templates/error'],
        ]
    ]
];

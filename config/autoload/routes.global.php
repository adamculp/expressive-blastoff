<?php

return [
    'dependencies' => [
        'invokables' => [
            Zend\Expressive\Router\RouterInterface::class => 
                Zend\Expressive\Router\FastRouteRouter::class,
            App\Action\PingAction::class => App\Action\PingAction::class,
        ],
        'factories' => [
            App\Action\HomePageAction::class => App\Action\HomePageFactory::class,
            App\Action\UserListAction::class => App\Action\UserListFactory::class,
            App\Action\UserDbalListAction::class => App\Action\UserDbalListFactory::class
        ],
    ],
    'routes' => [
        [
            'name' => 'home',
            'path' => '/',
            'middleware' => App\Action\HomePageAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'api.ping',
            'path' => '/api/ping',
            'middleware' => App\Action\PingAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'user.list',
            'path' => '/users',
            'middleware' => App\Action\UserListAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'user.dbal.list',
            'path' => '/users/dbal',
            'middleware' => App\Action\UserDbalListAction::class,
            'allowed_methods' => ['GET'],
        ],
    ],
];

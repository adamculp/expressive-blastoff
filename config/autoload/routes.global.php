<?php

use App\Action;
use Zend\Expressive\Router;

return [
    'dependencies' => [
        'invokables' => [
            Router\RouterInterface::class => Router\FastRouteRouter::class,
            Action\PingAction::class => Action\PingAction::class,
        ],
        'factories' => [
            Action\HomePageAction::class => Action\HomePageFactory::class,
            Action\UserListAction::class => Action\UserListFactory::class,
            Action\UserDbalListAction::class => Action\UserDbalListFactory::class
        ],
    ],
];

<?php
/**
 * Expressive routed middleware
 */

/** @var \Zend\Expressive\Application $app */
$app->get('/', \App\Action\HomePageAction::class, 'home');
$app->get('/api/ping', \App\Action\PingAction::class, 'api.ping');
$app->get('/users', \App\Action\UserListAction::class, 'user.list');
$app->get('/users/dbal', \App\Action\UserDbalListAction::class, 'user.dbal.list');

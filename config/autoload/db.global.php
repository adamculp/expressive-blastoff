<?php

$provider = new Zend\Db\ConfigProvider();
return $provider();

/* Basically provides this */

// return [
//     'dependencies' => [
//         'abstract_factories' => [
//             Adapter\AdapterAbstractServiceFactory::class,
//         ],
//         'factories' => [
//             Adapter\AdapterInterface::class => 
//                 Adapter\AdapterServiceFactory::class,
//         ],
//     ]
// ];

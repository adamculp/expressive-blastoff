<?php
namespace App\Action;

use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;
use Doctrine\DBAL\DriverManager;

class UserDbalListFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $template = ($container->has(TemplateRendererInterface::class))
            ? $container->get(TemplateRendererInterface::class)
            : null;
        
        $credentials = $container->get('config')['doctrine-connection'];
            
        $connection = DriverManager::getConnection($credentials, new \Doctrine\DBAL\Configuration());
        
        return new UserDbalListAction($template, $connection);
    }
}

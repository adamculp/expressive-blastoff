<?php
namespace App\Action;

use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;
use Zend\Db\Adapter\AdapterInterface;

class UserListFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $template = ($container->has(TemplateRendererInterface::class))
            ? $container->get(TemplateRendererInterface::class)
            : null;
        
        $adapter = ($container->has(AdapterInterface::class))
            ? $container->get(AdapterInterface::class)
            : null;
        
        return new UserListAction($template, $adapter);
    }
}

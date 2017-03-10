<?php
namespace App\Action;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template;
use Zend\Db\Adapter\Adapter;

class UserListAction implements MiddlewareInterface
{
    private $template;
    private $adapter;

    public function __construct(Template\TemplateRendererInterface $template, $adapter)
    {
        $this->template = $template;
        $this->adapter = $adapter;
    }

    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        $statement = $this->adapter->query('select * from profile');
        $users = $statement->execute();
        
        return new HtmlResponse($this->template->render('app::user-list', ['users' => $users]));
    }
}

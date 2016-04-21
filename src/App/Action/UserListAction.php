<?php
namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template;
use Zend\Db\Adapter\Adapter;

class UserListAction
{
    private $template;
    private $adapter;

    public function __construct(Template\TemplateRendererInterface $template, $adapter)
    {
        $this->template = $template;
        $this->adapter = $adapter;
    }

    public function __invoke(ServerRequestInterface $request, 
        ResponseInterface $response, 
        callable $next = null)
    {
        $statement = $this->adapter->query('select * from profile');
        $users = $statement->execute();
        
        return new HtmlResponse($this->template->render('app::user-list', ['users' => $users]));
    }
}

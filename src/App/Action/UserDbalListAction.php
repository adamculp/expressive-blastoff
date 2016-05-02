<?php
namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template;

class UserDbalListAction
{
    private $template;
    private $connection;

    public function __construct(Template\TemplateRendererInterface $template, $connection)
    {
        $this->template = $template;
        $this->connection = $connection;
    }

    public function __invoke(ServerRequestInterface $request, 
        ResponseInterface $response, 
        callable $next = null)
    {
        $users = $this->connection->query('select * from profile');
        
        return new HtmlResponse($this->template->render('app::user-dbal-list', ['users' => $users]));
    }
}

<?php
namespace App\Action;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template;

class UserDbalListAction implements MiddlewareInterface
{
    private $template;
    private $connection;

    public function __construct(Template\TemplateRendererInterface $template, $connection)
    {
        $this->template = $template;
        $this->connection = $connection;
    }

    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        $users = $this->connection->query('select * from profile');
        
        return new HtmlResponse($this->template->render('app::user-dbal-list', ['users' => $users]));
    }
}

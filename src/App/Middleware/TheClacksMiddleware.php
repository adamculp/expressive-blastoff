<?php
namespace App\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class TheClacksMiddleware
{
    public function __invoke(ServerRequestInterface $request, 
        ResponseInterface $response, 
        callable $next = null)
    {
        $response = $next($request, $response);
        
        return $response->withHeader('X-Clacks-Overhead',['GNU Terry Pratchett']);
    }
}

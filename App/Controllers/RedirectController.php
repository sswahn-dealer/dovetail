<?php
/**
 * Redirect Controller
 *
 */
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;

use Psr\Http\Message\ResponseInterface as Response;

use Slim\Interfaces\RouterInterface as Router;

class RedirectController
{
    protected $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function get(Request $request, Response $response)
    {
        try {
            
            //this needs attention:
            return $response->withRedirect(
                $this->router->pathFor('contact.get.page', [
                    'response' => '-success'
                ])
            );

        } catch (\Exception $e) {

            return $response->write($e->getMessage());
        }
    }
}

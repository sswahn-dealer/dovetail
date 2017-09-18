<?php
/**
 * Page Controller
 *
 */
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;

use Psr\Http\Message\ResponseInterface as Response;

use Slim\Views\Twig as View;

use App\Helpers\TemplateHelper as Template;

class PageController
{
    protected $view;

    public function __construct(View $view)
    {
        $this->view = $view;
    }

    public function get(Request $request, Response $response)
    {
        try {
        
            $path = $request->getUri()->getPath();
            
            $template = (new Template)->create($path);
            
            return $this->view->render($response, $template);

        } catch (\Exception $e) {

            return $response->write($e->getMessage());
        }
    }
}

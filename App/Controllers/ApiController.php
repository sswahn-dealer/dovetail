<?php
/**
 * Api Controller
 *
 */
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;

use Psr\Http\Message\ResponseInterface as Response;

use App\Models\Model;

class ApiController
{    
    public function send(Request $request, Response $response)
    {
        try {

            $data = (new Model)->getData($request);
            
            $code = $response->getStatusCode();

            return $response->withJson($data, $code);

        } catch (\Exception $e) {

            return $response->withJson($e->getMessage(), $e->getCode());
        }
    }
}

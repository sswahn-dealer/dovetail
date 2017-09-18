<?php
/**
 * Utility Controller
 *
 */
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;

use Psr\Http\Message\ResponseInterface as Response;

use App\Helpers\UtilityHelper as Utility;

class UtilityController
{    
    public function send(Request $request, Response $response)
    {
        try {
            
            $path = $request->getUri()->getPath();
            
            $utility = (new Utility)->create($path);
            
            $data = $utility->execute($request);

            $code = $response->getStatusCode();

            return $response->withJson($data, $code);

        } catch (\Exception $e) {

            $code = $e->getCode();
            
            var_dump($e->getMessage(), $code);
            
            $message = $response->getReasonPhrase();
            
            return $response->withStatus($code, $message);
            
            //return $response->withJson($e->getMessage(), $e->getCode());
        }
    }
}

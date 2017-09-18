<?php
/**
 * Generator Controller
 *
 */
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;

use Psr\Http\Message\ResponseInterface as Response;

use App\Models\Generator;

class GeneratorController
{    
    public function send(Request $request, Response $response)
    {
        try {

            $data = (new Generator)->data($request);
            
            $body = $response->getBody();
            
            $stream = (new Stream)->generate($data, $body);
            
            //This in Stream class
            foreach ($data as $value)
            {
                $body->write($value);
            }

        //return $response; or return $stream or dont return let stream write
        // $code?? $code = $response->getStatusCode();
        
        } catch (\Exception $e) {

            return $response->withJson($e->getMessage(), $e->getCode());
        }
    }
}

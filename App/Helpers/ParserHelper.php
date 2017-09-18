<?php
/**
 * Parser Helper
 *
 */
namespace App\Helpers;

use App\Interfaces\HelperInterface;

class ParserHelper implements HelperInterface
{
    public function create($path)
    {
        if ($path === '/' || $path === '/api/v1/dashboard') {
        
            return new App\Parsers\DashboardParser();
        }
        
        $prefix = (strpos($path, 'api'))
            ? ucfirst(str_replace('/api/v1/', '', $path))
            : ucfirst(str_replace('/', '', $path));
        
        $object = 'App\Parsers\\' . $prefix . 'Parser';
        
        return new $object();
    }
}

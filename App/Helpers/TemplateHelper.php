<?php
/**
 * Template Helper
 *
 */
namespace App\Helpers;

use App\Interfaces\HelperInterface;

class TemplateHelper implements HelperInterface
{
    public function create($path)
    {
        return ($path === '/') 
            ? 'homepage.html' 
            : str_replace('/', '', $path) . '.html';
    }
}

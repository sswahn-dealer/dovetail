<?php
/**
 * Utility Helper
 *
 */
namespace App\Helpers;

use App\Interfaces\HelperInterface;

class UtilityHelper implements HelperInterface
{
    public function create($path)
    {
        if ($path === '/' || $path === '/api/v1/dashboard') {
        
            return new App\Utilities\DashboardUtility();
        }
        
        $prefix = (strpos($path, 'api'))
            ? ucfirst(str_replace('/api/v1/', '', $path))
            : ucfirst(str_replace('/', '', $path));
        
        $utility = 'App\Utilities\\' . $prefix . 'Utility';
        
        return new $utility();
    }
}

<?php
/**
 * Connection Factory
 *
 */
namespace App\Models\Connections;

use App\Models\Connections\Connection;

class ConnectionFactory
{
    public static function create(array $config)
    {
         return new Connection($config);
    }
}

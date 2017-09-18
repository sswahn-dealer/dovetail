<?php
/**
 * Connection
 *
 */
namespace App\Connections;

use App\Interfaces\ConnectionInterface;

class Connection implements ConnectionInterface
{
    private $connection;
    
    public function __construct()
    {
        $this->connection = new \PDO(
            'mysql:host=localhost;dbname=dovetail_test_db;charset=utf8;',
            'phpmyadmin', 
            'password'
        );
    }
    
    public function getConnection()
    {
        return $this->connection;
    }
}

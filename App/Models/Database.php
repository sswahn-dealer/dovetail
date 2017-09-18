<?php
/**
 * Database
 *
 */
namespace App\Models;

//use App\Interfaces\ConnectionInterface as Connection;

class Database
{   
    private $database;
    
    public function __construct()
    {
        $this->database = new \PDO(
            'mysql:host=localhost;dbname=dovetail_test_db;charset=utf8;',
            'phpmyadmin', 
            'password'
        );
    }
    
    protected function getDatabase()
    {
        return $this->database;
    }
    
}

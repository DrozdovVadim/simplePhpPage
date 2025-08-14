<?php 
namespace App;

class DB
{ 
    private static $host = 'localhost';
    private static $dbname = 'workspace__test';
    private static $user = 'root';
    private static $pass = 'root';
    private static $connection;

    public static function getConnection()
    {
        $config = require 'databaseConfig.php';
        if(!self::$connection){
            try{
                $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'] . ';charset=utf8mb4';
                self::$connection = new \PDO($dsn, $config['user'], $config['pass']);
            } catch (\PDOException $e) {
            die('Ошибка подключения к базе: ' . $e->getMessage());
        }

        }
        return self::$connection;
         
    }
 
}


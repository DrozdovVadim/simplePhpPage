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
        if(!self::$connection){
            try{
                $dsn = 'mysql:host=' . self::$host . ';dbname=' . self::$dbname . ';charset=utf8mb4';
                self::$connection = new \PDO($dsn, self::$user, self::$pass);
            } catch (\PDOException $e) {
            die('Ошибка подключения к базе: ' . $e->getMessage());
        }

        }
        return self::$connection;
         
    }
 
}


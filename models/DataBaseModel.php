<?php
class DataBaseModel
{
    private $host = 'localhost';
    private $dbname = 'workspace__test';
    private $user = 'root';
    private $pass = 'root';

    public static function getConnection()
    {
         $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
         try{
            $pdo = new PDO($dsn, $this->user, $this->pass);
         } catch (PDOException $e) {
            die('Ошибка подключения к базе: ' . $e->getMessage());
        }
    }
 
}
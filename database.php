<?php
$host = 'localhost';
$dbname = 'workspace__test';
$user = 'root';
$pass = 'root';
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    die('Ошибка подключения к базе: ' . $e->getMessage());
}
<?php
$host = 'localhost';
$dbname = 'news_db';
$user = 'user';
$pass = '12345';
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    die('Ошибка подключения к базе: ' . $e->getMessage());
}
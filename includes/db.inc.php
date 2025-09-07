<?php

$host       = 'localhost';
$dbname     = 'yarab';   
$dbusername = 'root';
$dbpassword = '';

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
$pdo = new PDO($dsn, $dbusername, $dbpassword);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
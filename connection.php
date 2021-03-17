<?php
include "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = $_ENV['DATABASE_HOST'];
$database = $_ENV['DATABASE_NAME'];
$user = $_ENV['DATABASE_USER'];
$password = $_ENV['DATABASE_PASSWORD'];

$connect = new mysqli($host, $user, $password, $database);

if ($connect->connect_error) {
    printf("Соединение не удалось: ", $connect->connect_error);
    exit();
};

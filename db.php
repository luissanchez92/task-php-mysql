<?php
require_once __DIR__ . '/vendor/autoload.php';
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);

$dotenv->load();

session_start();

$conn= mysqli_connect(
    $_ENV['DB_HOST'],
    $_ENV['DB_USERNAME'],
    $_ENV['DB_PASSWORD'],
    $_ENV['DB_DATABASE']
);

if (!$conn) {
    die("La conexión falló: " . mysqli_connect_error());
}

//if (isset($conn)){
//    echo 'Db is connected';
//}
?>
<?php

use Http\Model\User;
use Infrastructure\Database\Connection;

require_once 'vendor/autoload.php';

// Load env variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeload();

// Abre Conexão
$conn = new Connection();
$db = $conn->dbConnection();
$conn = $db;

$loader = new \Twig\Loader\FilesystemLoader('public/views');
$twig = new \Twig\Environment($loader);

echo $twig->render('index.html', ['name' => 'Fabien']);
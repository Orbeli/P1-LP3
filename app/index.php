<?php

use Http\Model\User;
use Infrastructure\Database\Connection;

require_once 'vendor/autoload.php';

// $student = new User(
//     null,
//     'Vinicius Dias',
//     new \DateTimeImmutable('1997-10-15')
// );

// Load env variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeload();

// Abre Conexão
$conn = new Connection();
$db = $conn->dbConnection();
$conn = $db;

// $conn->exec('CREATE TABLE usuarios (id INTEGER PRIMARY KEY, nome TEXT, bith_date TEXT);');

// Chama home
// require_once 'public/views/base.php';

$loader = new \Twig\Loader\FilesystemLoader('public/views');
$twig = new \Twig\Environment($loader);

echo $twig->render('index.html', ['name' => 'Fabien']);
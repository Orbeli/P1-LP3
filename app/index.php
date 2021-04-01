<?php

use model\Student;
use database\Connection;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Vinicius Dias',
    new \DateTimeImmutable('1997-10-15')
);

// Load env variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeload();

// Abre Conexão
$database = new Connection();
$db = $database->dbConnection();
$conn = $db;
// $conn->exec('CREATE TABLE usuarios (id INTEGER PRIMARY KEY, nome TEXT, bith_date TEXT);');

// Chama home
require_once 'public/views/base.php';

echo $student->age();
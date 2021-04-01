<?php

use model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Vinicius Dias',
    new \DateTimeImmutable('1997-10-15')
);

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeload();

// Teste de conexão
require_once "database/connection.php";
$database = new Database();
$db = $database->dbConnection();
$conn = $db;

echo $student->age();
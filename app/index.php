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

require_once 'Public/Views/home.php';
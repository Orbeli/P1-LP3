<?php

namespace Infrastructure\Database;

use PDO;

class Connection {
    // Connection variables
    private $host;
    private $dbName;
    private $username;
    private $password;

    public function __construct()
    {
      $this->host = $_ENV['HOST'];
      $this->dbName = $_ENV['POSTGRES_DB'];
      $this->username = $_ENV['POSTGRES_USER'];
      $this->password = $_ENV['POSTGRES_PASSWORD'];
    }

    public $conn;

    // Method return security connection
    public function dbConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("pgsql:dbname=" . $this->dbName . ";host=" . $this->host, $this->username, $this->password, array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ));
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}

?>
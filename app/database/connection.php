<?php
    // $pdo = new PDO("pgsql:dbname=hello_flask_dev;host=db", "hello_flask", "hello_flask");

    // $sql = $pdo->query("SELECT * FROM guizex");

    // if ($sql->rowCount() > 0) {
    //     $usuarios = $sql->fetchAll();

    //     foreach ($usuarios as $user) {
    //         echo "<br>".$user['nome'];
    //     }
    // } else {
    //     echo "não foram encontrado usuários";
    // }
// require_once "../index.php";

class Database {
    // Connection variables
    private $host;
    private $dbName;
    private $username;
    private $password;

    public function __construct()
    {
      $this->host = $_ENV['HOST'];
      $this->dbName = $_ENV['DATABASE'];
      $this->username = $_ENV['USERNAME'];
      $this->password = $_ENV['PASSWORD'];
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
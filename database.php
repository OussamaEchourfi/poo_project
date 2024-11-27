<?php

class DatabaseConnection {
    private $servername;
    private $username;
    private $password;
    private $database;
    private $conn;

    public function __construct($servername, $username, $password, $database) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->connect();
    }

    private function connect() {
        // Création de la connexion
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        // Vérification de la connexion
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}

// Utilisation de la classe
$database = new DatabaseConnection('localhost', 'root', '', 'textbock');
$conn = $database->getConnection();

// À la fin, pour fermer la connexion
$database->closeConnection();

?>

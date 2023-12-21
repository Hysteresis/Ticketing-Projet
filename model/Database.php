<?php

class Database
{
    private $host = "localhost";
    private $db_name = "pharmat";
    private $username = "root";
    private $password = "";
    private $conn;

    public function connect()
    {

        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Erreur de connexion à la base de données : ' . $e->getMessage();
        }

        return $this->conn;
    }
}

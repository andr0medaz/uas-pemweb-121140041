<?php

class Database {
    // menggunakan localhost port 3307 karena mysql xampp saya bentrok dengan mysql server pada mysql workbench
    private $host = "127.0.0.1:3307";
    private $dbname = "users";
    private $username = "root";
    private $password = "";
    private $conn;

    // Fungsi untuk koneksi ke database dengan OOP
    public function connect() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=". $this->host . ";dbname=" . $this->dbname,$this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $error){
            echo "Koneksi gagal: " . $error->getMessage();
        }
        return $this->conn;
    }

}


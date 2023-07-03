<?php

class Database {
    private $conn;

    public function __construct($dsn, $username, $password) {

        $this->conn = new PDO($dsn, $username, $password);
        if ($this->conn->connect_error) {
            var_dump("データベース接続エラー: " . $this->conn->connect_error);
            exit;
        }
    }

    /**
     * 
     */
    public function fetchUserFromUid(int $uid) {
        $sql = "SELECT *
                FROM Users
                WHERE uid = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $uid, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $result;
    }

    /**
     * 
     */
    public function fetchUserFromUserName(string $username, string $password) {
        $sql = "SELECT *
                FROM Users
                WHERE username = ?
                AND password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $username, PDO::PARAM_STR);
        $stmt->bindParam(2, $password, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $result;
    }

    public function createUser(
        string $username,
        string $email,
        string $password,
        int $gender,
        int $age,
        string $prefecture
    ) {
        $sql = "INSERT INTO Users (username, email, password, gender, age, prefecture)
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $username, PDO::PARAM_STR);
        $stmt->bindParam(2, $email, PDO::PARAM_STR);
        $stmt->bindParam(3, $password, PDO::PARAM_STR);
        $stmt->bindParam(4, $gender, PDO::PARAM_INT);
        $stmt->bindParam(5, $age, PDO::PARAM_INT);
        $stmt->bindParam(6, $prefecture, PDO::PARAM_STR);
        $stmt->execute();
    }
    
    public function fetchAllProducts() {
        $sql = "SELECT * FROM Products";
        $stmt = $this->conn->query($sql);
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }


}
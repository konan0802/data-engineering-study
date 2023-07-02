<?php

require __DIR__ . './../vendor/autoload.php';

class Database {
    private $conn;

    public function __construct($dsn, $username, $password) {
        
        $this->conn = new PDO($dsn, $username);
        var_dump($this->conn);
        exit;
        if ($this->conn->connect_error) {
            var_dump("データベース接続エラー: " . $this->conn->connect_error);
            exit;
        }
    }

    /**
     * 
     */
    /*
    public function fetchUserFromUid(int $uid) {
        $sql = "SELECT * FROM Users WHERE uid = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $uid);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        return $row;
    }
    */

    public function query($sql) {
        $result = $this->connection->query($sql);

        if (!$result) {
            die("クエリ実行エラー: " . $this->connection->error);
        }

        return $result;
    }
}
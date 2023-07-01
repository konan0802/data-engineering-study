<?php

class Database {
    private $connection;

    public function __construct() {
        
        $this->connection = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->database
        );

        if ($this->connection->connect_error) {
            die("データベース接続エラー: " . $this->connection->connect_error);
        }
    }

    public function query($sql) {
        $result = $this->connection->query($sql);

        if (!$result) {
            die("クエリ実行エラー: " . $this->connection->error);
        }

        return $result;
    }
}
<?php
require __DIR__ . '/vendor/autoload.php';
require_once './model/Database.php';

// 環境変数
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// DB
$db = new Database($_ENV['DSN'], $_ENV['USERNAME'], $_ENV['PASSWORD']);
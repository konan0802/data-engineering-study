<?php
require __DIR__ . '/vendor/autoload.php';
require_once './model/Database.php';

// URLパラメータからルートパスを取得する
$url = $_SERVER['REQUEST_URI'];

// ログインユーザーを取得
$uid = $_COOKIE["uid"];

// 環境変数
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// DB
$db = new Database($_ENV['DSN'], $_ENV['USERNAME'], $_ENV['PASSWORD']);

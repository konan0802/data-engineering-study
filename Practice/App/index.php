<?php

require_once './model/Database.php';
require __DIR__ . '/vendor/autoload.php';

// 環境変数
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// DB
$db = new Database($_ENV['DSN'], $_ENV['USERNAME'], $_ENV['PASSWORD']);
/*
$user = $db->fetchUserFromUid(1);
var_dump($user);
exit;
*/

// URLパラメータからルートパスを取得する
$url = $_SERVER['REQUEST_URI'];

if (preg_match('/\.php$/', $url)) {
    header('Location: /');
    exit;
}

// 未ログインの場合はログイン画面に遷移
$uid = $_COOKIE["uid"];
if ($url !== "/login" && is_null($uid)) {
    header('Location: /login');
    exit;
} else {
    /*
    $user = $db->fetchUserFromUid(1);
    var_dump($user);
    */
    exit;
}

// パスごとに適切なコントローラーとアクションを呼び出す
switch ($url) {
    case "/":
        include './view/products.php';
        exit;
    case "/login":
        include "./view/login.php";
        exit;
    case "/user/{$uid}/cart":
        include './view/cart.php';
        exit;
    case "/user/{$uid}/checkout":
        include './view/checkout.php';
        exit;
    case "/user/{$uid}/order/confirmation":
        include './view/thanks.php';
        exit;
    default:
        redirect('Location: /');
        exit;
}

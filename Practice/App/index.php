<?php

require_once './model/Database.php';

// URLパラメータからルートパスを取得する
$url = $_SERVER['REQUEST_URI'];

if (preg_match('/\.php$/', $url)) {
    header('Location: /');
    exit;
}

// 未ログインの場合はログイン画面に遷移
$username = $_COOKIE["username"];
if ($url !== "/login" && is_null($username)) {
    header('Location: /login');
    exit;
} else {
    
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

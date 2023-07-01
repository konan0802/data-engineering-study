<?php
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
}

// パスごとに適切なコントローラーとアクションを呼び出す
switch ($url) {
    case "/":
        include './app/products.php';
        exit;
    case "/login":
        include "./app/login.php";
        exit;
    case "/user/{$uid}/cart":
        include './app/cart.php';
        exit;
    case "/user/{$uid}/checkout":
        include './app/checkout.php';
        exit;
    case "/user/{$uid}/order/confirmation":
        include './app/thanks.php';
        exit;
    default:
        redirect('Location: /');
        exit;
}

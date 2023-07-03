<?php

require_once './config.php';

// URLパラメータからルートパスを取得する
$url = $_SERVER['REQUEST_URI'];

if (preg_match('/\.php$/', $url)) {
    header('Location: /');
    exit;
}

// ログイン画面の場合は遷移
if ($url === "/login") {
    include "./view/login.php";
    exit;
}

// 未ログインの場合はログイン画面にリダイレクト
$uid = $_COOKIE["uid"];
if (is_null($uid)) {
    header('Location: /login');
    exit;
}

// ユーザーが存在しない場合はログイン画面にリダイレクト
$user = $db->fetchUserFromUid($uid);
if (!$user) {
    header('Location: /login');
    exit;
}

var_dump("ok");
exit;

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

<?php
require_once './config.php';
require_once './login_check.php';

switch ($url) {
    case "/":
        include './view/products.php';
        exit;
    case "/cart":
        include './view/cart.php';
        exit;
    case "/completed":
        include './view/completed.php';
        exit;
    default:
        header('Location: /');
        exit;
}

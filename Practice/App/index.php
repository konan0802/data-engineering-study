<?php
require_once './config.php';
require_once './login_check.php';

switch ($url) {
    case "/":
        include './view/products.php';
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

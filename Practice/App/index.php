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
    case "/checkout":
        include './view/checkout.php';
        exit;
    case "/order/confirmation":
        include './view/thanks.php';
        exit;
    default:
        redirect('Location: /');
        exit;
}

<?php
session_start();

$pdo = new PDO('mysql:host=localhost;dbname=yourdbname', 'username', 'password');

if (isset($_GET['add'])) {
    $productId = $_GET['add'];
    $_SESSION['cart'][$productId] = $_SESSION['cart'][$productId] ?? 0;
    $_SESSION['cart'][$productId]++;

    $uuid = $_SESSION['uuid'];
    $quantity = $_SESSION['cart'][$productId];

    $stmt = $pdo->prepare("REPLACE INTO Carts (uuid, product_id, quantity) VALUES (?, ?, ?)");
    $stmt->execute([$uuid, $productId, $quantity]);
}

$stmt = $pdo->prepare("SELECT * FROM Carts INNER JOIN Products ON Carts.product_id = Products.id WHERE uuid = ?");
$stmt->execute([$_SESSION['uuid']]);
$cart = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?php foreach ($cart as $item): ?>
<div>

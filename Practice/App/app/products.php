<?php
session_start();

$pdo = new PDO('mysql:host=localhost;dbname=yourdbname', 'username', 'password');

$stmt = $pdo->query("SELECT * FROM Products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?php foreach ($products as $product): ?>
<div>
    <h2><?= htmlspecialchars($product['name']) ?></h2>
    <p>Price: <?= htmlspecialchars($product['price']) ?></p>
    <a href="cart.php?add=<?= htmlspecialchars($product['id']) ?>">Add to Cart</a>
</div>
<?php endforeach; ?>

<?php
session_start();

$pdo = new PDO('mysql:host=localhost;dbname=yourdbname', 'username', 'password');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $paymentMethod = $_POST['payment_method'];

    $stmt = $pdo->query("SELECT SUM(quantity * price) as total FROM Carts INNER JOIN Products ON Carts.product_id = Products.id WHERE uuid = " . $_SESSION['uuid']);
    $total = $stmt->fetch(PDO::FETCH_ASSOC)['total'];

    $stmt = $pdo->prepare("INSERT INTO Orders (uuid, total_price, payment_method) VALUES (?, ?, ?)");
    $stmt->execute([$_SESSION['uuid'], $total, $paymentMethod]);
    $orderId = $pdo->lastInsertId();

    $stmt = $pdo->prepare("SELECT * FROM Carts WHERE uuid = ?");
    $stmt->execute([$_SESSION['uuid']]);
    $cart = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($cart as $item) {
        $stmt = $pdo->prepare("INSERT INTO OrderDetails (order_id, product_id, quantity, price) SELECT ?, product_id, quantity, price FROM Carts INNER JOIN Products ON Carts.product_id = Products.id WHERE Carts.uuid = ? AND Carts.product_id = ?");
        $stmt->execute([$orderId, $_SESSION['uuid'], $item['product_id']]);
    }

    $stmt = $pdo->prepare("DELETE FROM Carts WHERE uuid = ?");
    $stmt->execute([$_SESSION['uuid']]);
    unset($_SESSION['cart']);

    header('Location: thanks.php');
    exit();
}
?>
<form method="post" action="checkout.php">
    <label>Payment Method:
        <select name="payment_method">
            <option value="Credit Card">Credit Card</option>
            <option value="Bank Transfer">Bank Transfer</option>
        </select>
    </label><br>
    <input type="submit" value="Purchase"/>
</form>

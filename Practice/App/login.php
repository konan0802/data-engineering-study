<?php
session_start();

$pdo = new PDO('mysql:host=localhost;dbname=yourdbname', 'username', 'password');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];

    $uuid = bin2hex(random_bytes(16));
    $_SESSION['uuid'] = $uuid;

    $stmt = $pdo->prepare("INSERT INTO Users (uuid, username, email) VALUES (?, ?, ?)");
    $stmt->execute([$uuid, $username, $email]);

    header('Location: products.php');
    exit();
}
?>
<form method="post" action="login.php">
    <label>Username: <input type="text" name="username"/></label><br>
    <label>Email: <input type="text" name="email"/></label><br>
    <input type="submit" value="Login"/>
</form>

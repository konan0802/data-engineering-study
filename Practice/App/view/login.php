<?php
// login.php

// POSTリクエストの場合のみ処理を実行する
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ユーザーから送信されたフォームデータを取得
    $username = $_POST['username'];
    $password = $_POST['password'];

    setcookie("username", $username);

    header('Location: /');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
</head>
<body>
    <h1>ログイン</h1>
    <form method="POST" action="login.php">
        <label for="username">ユーザー名:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">パスワード:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" value="ログイン">
    </form>
</body>
</html>
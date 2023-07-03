<?php

// POSTリクエストの場合のみ処理を実行する
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // ユーザーから送信されたフォームデータを取得
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = $db->fetchUserFromUserName($username, $password);
    if (!$user) {
        header('Location: /login');
        exit;
    }

    setcookie("uid", $user['uid']);
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
    <form method="POST" action="">
        <label for="username">ユーザー名:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">パスワード:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" value="ログイン">
    </form>

    <br>
    <p>アカウントをお持ちでない方はこちら:</p>
    <a href="/signup">新規アカウント作成</a>
</body>
</html>

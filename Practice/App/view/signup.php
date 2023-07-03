<?php

// POSTリクエストの場合のみ処理を実行する
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // ユーザーから送信されたフォームデータを取得
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $prefecture = $_POST['prefecture'];

    // 必要なバリデーションやデータベース操作などの処理を実装
    $db->createUser($username, $email, $password, $gender, $age, $prefecture);

    // サインアップ処理が成功したらログインページにリダイレクトする
    header('Location: /login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>新規アカウント作成</title>
</head>
<body>
    <h1>新規アカウント作成</h1>
    <form method="POST" action="">
        <label for="username">ユーザー名:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="email">メールアドレス:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="password">パスワード:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <label for="gender">性別:</label>
        <select name="gender" id="gender" required>
            <option value="1">男性</option>
            <option value="2">女性</option>
        </select>
        <br>
        <label for="age">年齢:</label>
        <input type="number" name="age" id="age" required>
        <br>
        <label for="prefecture">都道府県:</label>
        <input type="text" name="prefecture" id="prefecture" required>
        <br>
        <input type="submit" value="サインアップ">
    </form>
</body>
</html>

<?php

// ステータスを完了に更新するSQLクエリ
$db->updateCartStatus($user['uid']);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>購入完了</title>
</head>
<body>
    <h1>購入が完了しました</h1>
    <p>ありがとうございました。</p>
</body>
</html>

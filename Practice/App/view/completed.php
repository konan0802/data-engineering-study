<?php

// ステータスを完了に更新するSQLクエリ
$db->updateCartStatus($user['uid']);

// カート内の商品情報を取得するSQLクエリ
$cartItems = $db->fetchCartItems($user['uid']);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>購入完了</title>
    <script>
        setTimeout(function(){
            window.location.href = "/";
        }, 2000); // 3秒後にルートページにリダイレクト
    </script>
</head>
<body>
    <?php if (empty($cartItems)): ?>
        <h1>カートは空です</h1>
    <?php else: ?>
        <h1>購入が完了しました</h1>
        <p>ありがとうございました。</p>
    <?php endif; ?>
</body>
</html>

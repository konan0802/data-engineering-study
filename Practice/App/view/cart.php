<?php

// カート内の商品情報を取得するSQLクエリ
$cartItems = $db->fetchCartItems($user['uid']);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>カート</title>
</head>
<body>
    <h1>カート</h1>

    <?php if (empty($cartItems)): ?>
        <p>カートは空です。</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>商品名</th>
                    <th>価格</th>
                    <th>数量</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cartItems as $cartItem): ?>
                    <tr>
                        <td><?php echo $cartItem['name']; ?></td>
                        <td><?php echo $cartItem['price']; ?>円</td>
                        <td><?php echo $cartItem['quantity']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <br>

    <a href="/checkout">決算へ進む</a>

</body>
</html>

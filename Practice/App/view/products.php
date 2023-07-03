<?php

// 商品情報を取得するSQLクエリ
$products = $db->fetchAllProducts();


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>商品一覧</title>
</head>
<body>
    <h1>商品一覧</h1>

    <?php foreach ($products as $product): ?>
        <div>
            <h3><?php echo $product['name']; ?></h3>
            <p>価格: <?php echo $product['price']; ?>円</p>
            <p>カテゴリ: <?php echo ($product['category'] === 1) ? 'beer' : 'bread'; ?></p>
        </div>
        <hr>
    <?php endforeach; ?>

</body>
</html>

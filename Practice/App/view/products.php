<?php

// 商品情報を取得するSQLクエリ
$products = $db->fetchAllProducts();

// カートに商品を追加する処理
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['product_id']) && isset($_POST['quantity'])) {
        $productId = $_POST['product_id'];
        $quantity = $_POST['quantity'];

        // カートに商品を追加するメソッドを呼び出す
        $db->addToCart($user['uid'], $productId, $quantity);

        // リダイレクトして重複操作を防ぐ
        header('Location: /');
        exit;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>商品一覧</title>
    <style>
        .cart-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>商品一覧</h1>

    <?php foreach ($products as $product): ?>
        <div>
            <h3><?php echo $product['name']; ?></h3>
            <p>価格: <?php echo $product['price']; ?>円</p>
            <p>カテゴリ: <?php echo ($product['category'] === 1) ? 'beer' : 'bread'; ?></p>
            <form method="POST" action="">
                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                <label for="quantity">数量:</label>
                <input type="number" name="quantity" id="quantity" value="1" required>
                <input type="submit" value="カートに追加">
            </form>
        </div>
        <hr>
    <?php endforeach; ?>

    <button class="cart-button" onclick="location.href='/cart'">カートを見る</button>

</body>
</html>

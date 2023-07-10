<?php

/**
 * データベースクラス
 */
class Database {
    /** @var PDO データベース接続オブジェクト */
    private $conn;

    /**
     * Databaseクラスの新しいインスタンスを作成します。
     *
     * @param string $dsn データベースのDSN
     * @param string $username データベースのユーザー名
     * @param string $password データベースのパスワード
     */
    public function __construct($dsn, $username, $password) {

        $this->conn = new PDO($dsn, $username, $password);
        if ($this->conn->connect_error) {
            var_dump("データベース接続エラー: " . $this->conn->connect_error);
            exit;
        }
    }

    /**
     * ユーザーIDに基づいてユーザーを取得します。
     *
     * @param int $uid ユーザーID
     * @return array ユーザーの連想配列
     */
    public function fetchUserFromUid(int $uid) {
        $sql = "SELECT *
                FROM Users
                WHERE uid = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $uid, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $result;
    }

    /**
     * ユーザー名とパスワードに基づいてユーザーを取得します。
     *
     * @param string $username ユーザー名
     * @param string $password パスワード
     * @return array ユーザーの連想配列
     */
    public function fetchUserFromUserName(string $username, string $password) {
        $sql = "SELECT *
                FROM Users
                WHERE username = ?
                AND password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $username, PDO::PARAM_STR);
        $stmt->bindParam(2, $password, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $result;
    }

    /**
     * ユーザーを作成します。
     *
     * @param string $username ユーザー名
     * @param string $email メールアドレス
     * @param string $password パスワード
     * @param int $gender 性別
     * @param int $age 年齢
     * @param string $prefecture 都道府県
     */
    public function createUser(
        string $username,
        string $email,
        string $password,
        int $gender,
        int $age,
        string $prefecture
    ) {
        $sql = "INSERT INTO Users (username, email, password, gender, age, prefecture)
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $username, PDO::PARAM_STR);
        $stmt->bindParam(2, $email, PDO::PARAM_STR);
        $stmt->bindParam

(3, $password, PDO::PARAM_STR);
        $stmt->bindParam(4, $gender, PDO::PARAM_INT);
        $stmt->bindParam(5, $age, PDO::PARAM_INT);
        $stmt->bindParam(6, $prefecture, PDO::PARAM_STR);
        $stmt->execute();
    }
    
    /**
     * すべての商品を取得します。
     *
     * @return array 商品の連想配列
     */
    public function fetchAllProducts() {
        $sql = "SELECT * FROM Products";
        $stmt = $this->conn->query($sql);
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

    /**
     * カートに商品を追加します。
     *
     * @param int $userId ユーザーID
     * @param int $productId 商品ID
     * @param int $quantity 数量
     */
    public function addToCart(int $userId, int $productId, int $quantity)
    {
        // 既存のカート内の数量を更新するために、同じユーザーと商品の組み合わせのレコードを検索
        $existingCart = $this->fetchCartByUserAndProduct($userId, $productId);
    
        if ($existingCart) {
            // 既存のレコードが存在する場合、数量を更新する
            $newQuantity = $existingCart['quantity'] + $quantity;
            $this->updateCartQuantity($existingCart['id'], $newQuantity);
        } else {
            // 既存のレコードが存在しない場合、新しいレコードを挿入する
            $this->insertCartRecord($userId, $productId, $quantity);
        }
    }
    
    /**
     * ユーザーと商品に基づいてカート内のアイテムを取得します。
     *
     * @param int $userId ユーザーID
     * @param int $productId 商品ID
     * @return array カートアイテムの連想配列
     */
    private function fetchCartByUserAndProduct(int $userId, int $productId)
    {
        $sql = "SELECT * FROM Cart WHERE user_id = ? AND product_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $userId, PDO::PARAM_INT);
        $stmt->bindParam(2, $productId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    /**
     * カートの数量を更新します。
     *
     * @param int $cartId カートID
     * @param int $newQuantity 新しい数量
     */
    private function updateCartQuantity(int $cartId, int $newQuantity)
    {
        $sql = "UPDATE Cart SET quantity = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $newQuantity, PDO::PARAM_INT);
        $stmt->bindParam(2, $cartId, PDO::PARAM_INT);
        $stmt->execute();
    }
    
    /**
     * カートに新しいレコードを挿入します。
     *
     * @param int $userId ユーザーID
     * @param int $productId 商品ID
     * @param int $quantity 数量
     */
    private function insertCartRecord(int $userId, int $productId, int $quantity)
    {
        $sql = "INSERT INTO Cart (user_id, product_id, quantity)
                VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $userId, PDO::PARAM_INT);
        $stmt->bindParam(2, $productId, PDO::PARAM_INT);
        $stmt->bindParam(3, $quantity, PDO::PARAM_INT);
        $stmt->execute();
    }
    
    /**
     * ユーザーのカート内のアイテムを取得します。
     *
     * @param int $userId ユーザーID
     * @return array カートアイテムの連想配列
     */
    public function fetchCartItems(int $userId) {
        $sql = "SELECT p.name, p.price, c.quantity
                FROM Cart c
                INNER JOIN Products p ON c.product_id = p.id
                WHERE c.user_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $userId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
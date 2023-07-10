# 麦酒とパン（ビールとパンの通販デモサイト）
beer-and-bread

## ページ構成
| パス                               | 概要       |
| ---                               | ---        |
| /                                 | 商品一覧    |
| /login                            | ログイン画面 |
| /user/{uid}/cart                 | カート      |
| /user/{uid}/order/confirmation   | 購入完了     |

## テーブル
* Users
    ```sql
    CREATE TABLE `Users` (
        `uid` int NOT NULL AUTO_INCREMENT COMMENT 'ユーザーID',
        `username` varchar(255) NOT NULL COMMENT 'ユーザーの名前',
        `email` varchar(255) NOT NULL COMMENT 'ユーザーのメールアドレス',
        `password` varchar(255) NOT NULL COMMENT 'ユーザーのパスワード',
        PRIMARY KEY (`uid`)
    ) COMMENT='ユーザー情報を管理するテーブル'
    ```

* Products
    ```sql
    CREATE TABLE `Products` (
        `id`       int NOT NULL AUTO_INCREMENT COMMENT '商品ID',
        `category` int DEFAULT NULL            COMMENT '商品カテゴリ（1:beer,2:bread）',
        `name`     varchar(255) NOT NULL       COMMENT '商品名',
        `price`    int NOT NULL                COMMENT '商品価格',
        PRIMARY KEY (`id`)
    ) COMMENT='商品情報を管理するテーブル' 
    ```

* Carts
    ```sql
    CREATE TABLE Carts (
        uuid       CHAR(36) NOT NULL COMMENT 'ユーザーID',
        product_id INT NOT NULL      COMMENT '選択された商品ID',
        quantity   INT NOT NULL      COMMENT '選択された商品の数量',
        FOREIGN KEY (uuid) REFERENCES Users(uuid),
        FOREIGN KEY (product_id) REFERENCES Products(id),
        PRIMARY KEY (uuid, product_id)
    ) COMMENT='カート情報を管理するテーブル';
    ```

* Orders
    ```sql
    CREATE TABLE Orders (
        order_id       INT AUTO_INCREMENT     COMMENT '注文ID',
        uuid           CHAR(36) NOT NULL      COMMENT 'ユーザーID',
        total_price    DECIMAL(10,2) NOT NULL COMMENT '合計金額',
        payment_method VARCHAR(255) NOT NULL  COMMENT '支払い方法',
        FOREIGN KEY (uuid) REFERENCES Users(uuid),
        PRIMARY KEY (order_id)
    ) COMMENT='注文情報を管理するテーブル';
    ```

* OrderDetails
    ```sql
    CREATE TABLE OrderDetails (
        order_id   INT NOT NULL           COMMENT '注文ID',
        product_id INT NOT NULL           COMMENT '購入された商品ID',
        quantity   INT NOT NULL           COMMENT '購入された商品の数量',
        price      DECIMAL(10,2) NOT NULL COMMENT '購入された商品の価格',
        FOREIGN KEY (order_id) REFERENCES Orders(order_id),
        FOREIGN KEY (product_id) REFERENCES Products(id),
        PRIMARY KEY (order_id, product_id)
    ) COMMENT='注文詳細を管理するテーブル';
    ```
## DB操作
* DB接続
    ```sql
    USE prod_db;
    ```
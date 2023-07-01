# 麦酒とパン（ビールとパンの通販デモサイト）

beer-and-bread

## ページ構成
| パス                               | 概要       |
| ---                               | ---        |
| /                                 | 商品一覧    |
| /login                            | ログイン画面 |
| /user/{uuid}/cart                 | カート      |
| /user/{uuid}/checkout             | 購入手続き   |
| /user/{uuid}/order/confirmation   | 購入完了     |

## 商品一覧
| 商品ID | 商品カテゴリ | 商品名                       | 単価（円） |
| ---   | ---       | ---                         | --- |
| 1     | 1 (beer)  | アサヒ スーパードライ             | 223 |
| 2     | 1 (beer)  | キリン 一番搾り                 | 223 |
| 3     | 1 (beer)  | サッポロ 黒ラベル               | 223 |
| 4     | 1 (beer)  | サントリー ザ･プレミアムモルツ      | 245 |
| 5     | 1 (beer)  | サントリー パーフェクトサントリービール | 207 |
| 6     | 2 (bread) | チーズフォカッチャ               | 350 |
| 7     | 2 (bread) | ポンデケージョ                  | 350 |
| 8     | 2 (bread) | パンツェロット                   | 350 |
| 9     | 2 (bread) | ゼッポリーニ                    | 350 |
| 10    | 2 (bread) | ホットドッグ                    | 350 |

## テーブル
* Users
    ```sql
    CREATE TABLE Users (
        uuid     CHAR(36) NOT NULL     COMMENT 'UUID形式のユーザーID',
        username VARCHAR(255) NOT NULL COMMENT 'ユーザーの名前',
        email    VARCHAR(255) NOT NULL COMMENT 'ユーザーのメールアドレス',
        PRIMARY KEY (uuid)
    ) COMMENT='ユーザー情報を管理するテーブル';
    ```

* Products
    ```sql
    CREATE TABLE Products (
        id          INT AUTO_INCREMENT     COMMENT '商品ID',
        category    INT                    COMMENT '商品カテゴリ（1:beer,2:bread）',
        name        VARCHAR(255) NOT NULL  COMMENT '商品名',
        price       DECIMAL(10,2) NOT NULL COMMENT '商品価格',
        PRIMARY KEY (id)
    ) COMMENT='商品情報を管理するテーブル';
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
# Data Enginnering Study

## 今後のキャリア
### ファーストステップ
* **データエンジニア**<br>
    * データ基盤やインフラに関する知見を経た上で徐々にレイヤーを上げていく
    * エンジニアリングとビジネスのバランスが五分五分の立ち位置が理想

### セカンドステップ
* **CS Ops（x Oos）**
    * 主にカスタマーサクセスに対して、データドリブンな業務を実現させるためのデータ活用支援
* **アナリティクスエンジニア**
    * 主にアナリストに対して、データドリブンな業務を実現させるためのデータ活用支援

### 最終的
**CDO（Chief Data Officer）**<br>
* サービス全体（プロダクト, セールス, CS）のデータ戦略

## 学習計画
### 5月
* 書籍
    * [『エンジニアのためのデータ分析基盤入門』](https://amzn.asia/d/0yDiDoo)
* Udemy
    * [超速入門!【データサイエンスへの最初の一歩】PythonとSparkで学ぶデータ分析のための前処理と分散処理 一気見講座](https://www.udemy.com/course/spark-python-crush-course/)
        * データエンジニアリングの全体像と、`PySpark`におけるデータの前処理について学習
    * [データサイエンスのための前処理入門PythonとSparkで学ぶビッグデータエンジニアリング(PySpark) 速習講座](https://www.udemy.com/course/python-spark-pyspark/)
        * `PySpark`についてより実践的（実際に利用されている形）な内容を学習
    * [データサイエンスのためのストリーミング前処理入門　PythonとSparkで始めるビッグデータストリーミング処理入門](https://www.udemy.com/course/python-spark-streaming/) 
        * データエンジニアリングの中でもストリーミング処理について重点的に学習
            * `Kafka`と`PySpark Streaming`の連携など
    * [【実戦で学ぶデータ分析基盤構築講座】ローカル端末で1から始めるデータ分析基盤の構築とデータ活用のための活動](https://www.udemy.com/course/dataplatform_local/)
        * データ分析基盤の全体像について自身で構築
            * バッチ処理：データソースのDBから`Embulk`や`PySpark`を利用して、アクセスレイヤのDBに集計し、`Metabase`から確認を行う
            * ストリーミング処理：Webアプリを立ち上げて、`Kafka`や`PySpark Streaming`を利用して、アクセスレイヤのDBで集計し`Metabase`から確認を行う
    * [【PythonとSparkで始めるデータマネジメント入門】 ビッグデータレイクのためのテーブルデータ品質管理入門](https://www.udemy.com/course/python-spark-data-quality/)
    * [【PythonとSparkで始めるデータマネジメント入門】 ビッグデータレイクのための統合メタデータ管理入門](https://www.udemy.com/course/datamanagement-spark-metadata/)
    * ~~[【実戦で学ぶデータサイエンス講座】リレーショナルデータベースで始めるデータ活用とデータ分析のためのSQLを学ぼう](https://www.udemy.com/course/business_sql/)~~
        * SQLについての内容がメインであり、SQLは一定の理解度があるため延期

### 6月
* 書籍
    * [『実践的データ基盤への処方箋』](https://amzn.asia/d/7FBkI6V)
* Udemy
    * [Google BigQueryとGoogle Data Portal【旧Data Studio】から始めるデータ活用入門](https://www.udemy.com/course/bigquery_dataportal_basic/)
    * ~~[BigQueryで学ぶ！実践SQLデータ分析：ITサービス改善につなげよう](https://www.udemy.com/course/bq-sql-analysis/)~~
        * またここで学びたかったBigQueryは上の教材で学べるため延期
* 実践
    * **クラウド上でにおいてWebアプリからBIツールでのデータ分析基盤の構築**
        * データソース　　　　　：自作Webアプリ（EC2）
        * プロセシングレイヤー　：
        * ストレージレイヤー　　：
        * アクセスレイヤー　　　：Metabase
    * **[データ分析基盤_各社事例集](https://docs.google.com/document/d/1DYD324wwbWTu5QFk93WcG7pb18XCNw561MBtwO_mVBo/edit?usp=sharing)を収集＆調査**
        * 事例から不足知識を補う
        * サービス毎の理想イメージを掴む
### その他
* [Tableau ラーニング](https://www.tableau.com/ja-jp/learn)
    * [Tableau 認定資格](https://www.tableau.com/ja-jp/learn/certification)
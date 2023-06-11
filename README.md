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
        * データ分析基盤の全体像について学習
        * [メモ](./%E3%82%A8%E3%83%B3%E3%82%B8%E3%83%8B%E3%82%A2%E3%81%AE%E3%81%9F%E3%82%81%E3%81%AE%E3%83%87%E3%83%BC%E3%82%BF%E5%88%86%E6%9E%90%E5%9F%BA%E7%9B%A4%E5%85%A5%E9%96%80.md)
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
        * [メモ](./%E3%80%90%E5%AE%9F%E6%88%A6%E3%81%A7%E5%AD%A6%E3%81%B6%E3%83%87%E3%83%BC%E3%82%BF%E5%88%86%E6%9E%90%E5%9F%BA%E7%9B%A4%E6%A7%8B%E7%AF%89%E8%AC%9B%E5%BA%A7%E3%80%91%E3%83%AD%E3%83%BC%E3%82%AB%E3%83%AB%E7%AB%AF%E6%9C%AB%E3%81%A71%E3%81%8B%E3%82%89%E5%A7%8B%E3%82%81%E3%82%8B%E3%83%87%E3%83%BC%E3%82%BF%E5%88%86%E6%9E%90%E5%9F%BA%E7%9B%A4%E3%81%AE%E6%A7%8B%E7%AF%89%E3%81%A8%E3%83%87%E3%83%BC%E3%82%BF%E6%B4%BB%E7%94%A8%E3%81%AE%E3%81%9F%E3%82%81%E3%81%AE%E6%B4%BB%E5%8B%95.md)
    * [【PythonとSparkで始めるデータマネジメント入門】 ビッグデータレイクのためのテーブルデータ品質管理入門](https://www.udemy.com/course/python-spark-data-quality/)
        * データ品質管理について学習
            * 防ぐ
            * 見つける
            * 修正する
        * [メモ](./%E3%80%90Python%E3%81%A8Spark%E3%81%A7%E5%A7%8B%E3%82%81%E3%82%8B%E3%83%87%E3%83%BC%E3%82%BF%E3%83%9E%E3%83%8D%E3%82%B8%E3%83%A1%E3%83%B3%E3%83%88%E5%85%A5%E9%96%80%E3%80%91%20%E3%83%93%E3%83%83%E3%82%B0%E3%83%87%E3%83%BC%E3%82%BF%E3%83%AC%E3%82%A4%E3%82%AF%E3%81%AE%E3%81%9F%E3%82%81%E3%81%AE%E3%83%86%E3%83%BC%E3%83%96%E3%83%AB%E3%83%87%E3%83%BC%E3%82%BF%E5%93%81%E8%B3%AA%E7%AE%A1%E7%90%86%E5%85%A5%E9%96%80.md)
    * [【PythonとSparkで始めるデータマネジメント入門】 ビッグデータレイクのための統合メタデータ管理入門](https://www.udemy.com/course/datamanagement-spark-metadata/)
        * メタデータについて学習
            * 種類
            * 格納方法
        * [メモ](./%E3%80%90Python%E3%81%A8Spark%E3%81%A7%E5%A7%8B%E3%82%81%E3%82%8B%E3%83%87%E3%83%BC%E3%82%BF%E3%83%9E%E3%83%8D%E3%82%B8%E3%83%A1%E3%83%B3%E3%83%88%E5%85%A5%E9%96%80%E3%80%91%20%E3%83%93%E3%83%83%E3%82%B0%E3%83%87%E3%83%BC%E3%82%BF%E3%83%AC%E3%82%A4%E3%82%AF%E3%81%AE%E3%81%9F%E3%82%81%E3%81%AE%E7%B5%B1%E5%90%88%E3%83%A1%E3%82%BF%E3%83%87%E3%83%BC%E3%82%BF%E7%AE%A1%E7%90%86%E5%85%A5%E9%96%80.md)
    * ~~[【実戦で学ぶデータサイエンス講座】リレーショナルデータベースで始めるデータ活用とデータ分析のためのSQLを学ぼう](https://www.udemy.com/course/business_sql/)~~
        * SQLについての内容がメインであり、SQLは一定の理解度があるため延期

### 6月
* 書籍
    * [『実践的データ基盤への処方箋』](https://amzn.asia/d/7FBkI6V)
* Udemy
    * [Google BigQueryとGoogle Data Portal【旧Data Studio】から始めるデータ活用入門](https://www.udemy.com/course/bigquery_dataportal_basic/)
        * GCPにおけるデータ分析基盤の構築
            * BigQueryにおけるDWHとDMの設計実装
            * Looker Studioにおけるダッシュボードの作成
        * [メモ](./Google%20BigQuery%E3%81%A8Google%20Data%20Portal%E3%80%90%E6%97%A7Data%20Studio%E3%80%91%E3%81%8B%E3%82%89%E5%A7%8B%E3%82%81%E3%82%8B%E3%83%87%E3%83%BC%E3%82%BF%E6%B4%BB%E7%94%A8%E5%85%A5%E9%96%80.md)
    * ~~[BigQueryで学ぶ！実践SQLデータ分析：ITサービス改善につなげよう](https://www.udemy.com/course/bq-sql-analysis/)~~
        * BigQueryは上の教材で学べるため延期
* 実践
    * **クラウド上でのWebアプリにおけるデータ分析基盤の構築**
        * GCP
            * データソース　　　　　：自作Webアプリ（GCE）
            * プロセシングレイヤー　：Dataproc（or Dataflow）
                * [GCPのデータ処理・ETL系サービスの使い分け](https://qiita.com/tomoyanamekawa/items/e45317bada702159add0)
            * ストレージレイヤー　　：BigQuery
            * アクセスレイヤー　　　：Looker Studio
            * メタデータ　　　　　　：Data Catalog
        * AWS
            * データソース　　　　　：自作Webアプリ（EC2）
            * プロセシングレイヤー　：Kinesis
            * ストレージレイヤー　　：S3
            * アクセスレイヤー　　　：Athena
            * メタデータ　　　　　　：AWS Glue Data Catalog
    * **[データ分析基盤_各社事例集](https://docs.google.com/document/d/1DYD324wwbWTu5QFk93WcG7pb18XCNw561MBtwO_mVBo/edit?usp=sharing)を収集＆調査**
        * 事例から不足知識を補う
        * サービス毎のアーキテクチャーイメージを掴む

### 参考資料
* [〜未踏の地〜データドリブン経営の最新考](https://blog.trocco.io/event/business_and_data_newspicks_20230530)
    * [メモ](./%E3%80%9C%E6%9C%AA%E8%B8%8F%E3%81%AE%E5%9C%B0%E3%80%9C%E3%83%87%E3%83%BC%E3%82%BF%E3%83%89%E3%83%AA%E3%83%96%E3%83%B3%E7%B5%8C%E5%96%B6%E3%81%AE%E6%9C%80%E6%96%B0%E8%80%83.md)
* [データエンジニアが最初に学ぶべき3つのポイント：「ETL」「データモデリング」「ワークフロー」](https://gihyo.jp/article/2023/06/3things-data-engineer-should-learn-first)
* [データエンジニアのことを“バ美肉おじさん”に聞いてみよう
業界トップの菱沼氏が思う、仕事の魅力と必要なスキルとは](https://logmi.jp/tech/articles/328753)
* [Tableau ラーニング](https://www.tableau.com/ja-jp/learn)
    * [Tableau 認定資格](https://www.tableau.com/ja-jp/learn/certification)
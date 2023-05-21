# データサイエンスのための前処理入門PythonとSparkで学ぶビッグデータエンジニアリング(PySpark) 速習講座

## 【教材】
* [データサイエンスのための前処理入門PythonとSparkで学ぶビッグデータエンジニアリング(PySpark) 速習講座](https://www.udemy.com/course/python-spark-pyspark/)
* [PySparkの環境構築](https://github.com/yk-st/pyspark_settings)

## 【内容】
### セクション3: PySparkの基本
※前教材と似た内容

### セクション4: PySparkSQL
※前教材と似た内容

### セクション5: PySparkを本番環境で使う
* `Jupyter Notebook`ではなく`pyファイル`を`Spark Submit`を利用して実行する
* `Spark Submit`コマンド
    * ```bash
        $ spark-submit [メモリ設定のオプションなど] spark_etl_sample.py 引数
      ```
* チューニングTips（メモリー設定の前に確認すべきポイント）
    1. Spark web インタフェースでのボトルネックの確認
    2. メモリ（キャッシュ）への登録
    3. repartition数を大きくしてみる
    4. Executor(ノード)の台数を増やす(クラウドであれば容易)　メモリ設定などですごく迷うのであれば、さっとノード追加して動かしてしまったほうが結局安上がり
* 
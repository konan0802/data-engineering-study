# 超速入門!【データサイエンスへの最初の一歩】PythonとSparkで学ぶデータ分析のための前処理と分散処理 一気見講座

## 【教材】
* [超速入門!【データサイエンスへの最初の一歩】PythonとSparkで学ぶデータ分析のための前処理と分散処理 一気見講座](https://www.udemy.com/course/spark-python-crush-course/)
* [PySparkの環境構築](https://github.com/yk-st/pyspark_settings)

## 【内容】
### セクション1: 紹介
* 環境構築
    * ローカルのメモリが少なかったためAWSのEC2上に構築
    * [`Docker.ipynb`](https://github.com/yk-st/pyspark_settings/blob/main/Docker.ipynb) 通りにPySpark環境を構築

### セクション2: 環境構築と基本操作（DataFrame）
* 分散処理とは？
    * スレッド処理：一台のパソコンの中でスレッドを立ち上げ処理を行う
    * 分散処理　　：複数の端末にまたがって処理を行う
* PySparkとは？
    * 分散処理を実現するエンジン
    * 一つの大きな仕事を処理するためのフレームワーク
* PySparkの仕組み
    * ドライバー　　　：コントローラー
    * エグゼキューター：ワーカー
* ノートブックとは？
    * GUIで視覚的に分析を可能にしたノートのような分析環境
* Sparkがデータ操作で利用するもの
    * SQL
    * DataFrame：コードチック
    * RDD
* Sparkの2つの読み込みタイプ
    * スキーマオンリード：事前のテーブル定義がなくても、データ読み込み可能
    * スキーマオンライト：データを読み込むためには、事前のデータ定義が必要

### セクション3: PySpark基本操作（SQLとDataFrame）

### セクション4: 非構造データのラングリング（エクストラ）

### セクション5: ボーナスレクチャー

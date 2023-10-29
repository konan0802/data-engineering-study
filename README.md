# Data Enginnering Study

## 今後のキャリア
**1. データの利活用を通じた事業推進**
**2. データドリブンな組織の醸成**

### ◇ 最初
* `データエンジニア`
    * データ分析基盤の構築・運用
    * 社内でのデータ活用推進
        * 徐々にデータ活用における上流や戦略寄りのロールになるためにも

### ◇ 2, 3年後
* `アナリティクスエンジニア`
    * ステークホルダーと連携を行い、データ分析による意思決定を実現させるための、<br>
      BIの作成、DWHやDMの調整など、データ分析基盤の中でもユースケース寄りの立場での活用支援
* `CS Ops（x Oos）`
    * 主にカスタマーサクセス領域において、ダッシュボードやヘルススコアを活用した、<br>
      データドリブンな業務を実現させるための業務フロー改善

### ◇ 最終的
* `CDO（Chief Data Officer）`
    * サービス全体（プロダクト, セールス, CS, 開発）を鑑みたデータ戦略
* `PdM`
    * PdMに必要な4つのスキル（開発, UX, ビジネス, グロース）において、<br>
      これまでのキャリアを踏まえて「開発」と「グロース」領域に強いPdM

## 学習計画
### 5月
* 書籍
    * [『エンジニアのためのデータ分析基盤入門』](https://amzn.asia/d/0yDiDoo)
        * データ分析基盤の全体像について学習
        * [メモ](./Book/%E3%82%A8%E3%83%B3%E3%82%B8%E3%83%8B%E3%82%A2%E3%81%AE%E3%81%9F%E3%82%81%E3%81%AE%E3%83%87%E3%83%BC%E3%82%BF%E5%88%86%E6%9E%90%E5%9F%BA%E7%9B%A4%E5%85%A5%E9%96%80.md)
* Udemy
    * [超速入門!【データサイエンスへの最初の一歩】PythonとSparkで学ぶデータ分析のための前処理と分散処理 一気見講座](https://www.udemy.com/course/spark-python-crush-course/)
        * データエンジニアリングの全体像と、PySparkにおけるデータの前処理について学習
    * [データサイエンスのための前処理入門PythonとSparkで学ぶビッグデータエンジニアリング(PySpark) 速習講座](https://www.udemy.com/course/python-spark-pyspark/)
        * PySparkについてより実践的（実際に利用されている形）な内容を学習
    * [データサイエンスのためのストリーミング前処理入門　PythonとSparkで始めるビッグデータストリーミング処理入門](https://www.udemy.com/course/python-spark-streaming/) 
        * データエンジニアリングの中でもストリーミング処理について重点的に学習
            * KafkaとPySpark Streamingの連携など
    * [【実戦で学ぶデータ分析基盤構築講座】ローカル端末で1から始めるデータ分析基盤の構築とデータ活用のための活動](https://www.udemy.com/course/dataplatform_local/)
        * データ分析基盤の全体像について自身で構築
            * バッチ処理
                * データソースのDBからEmbulkやPySparkを利用して、アクセスレイヤのDBに集計し、Metabaseから確認を行う
            * ストリーミング処理
                * Webアプリを立ち上げて、KafkaやPySpark Streamingを利用して、アクセスレイヤのDBで集計しMetabaseから確認を行う
        * [メモ](./Udemy/%E3%80%90%E5%AE%9F%E6%88%A6%E3%81%A7%E5%AD%A6%E3%81%B6%E3%83%87%E3%83%BC%E3%82%BF%E5%88%86%E6%9E%90%E5%9F%BA%E7%9B%A4%E6%A7%8B%E7%AF%89%E8%AC%9B%E5%BA%A7%E3%80%91%E3%83%AD%E3%83%BC%E3%82%AB%E3%83%AB%E7%AB%AF%E6%9C%AB%E3%81%A71%E3%81%8B%E3%82%89%E5%A7%8B%E3%82%81%E3%82%8B%E3%83%87%E3%83%BC%E3%82%BF%E5%88%86%E6%9E%90%E5%9F%BA%E7%9B%A4%E3%81%AE%E6%A7%8B%E7%AF%89%E3%81%A8%E3%83%87%E3%83%BC%E3%82%BF%E6%B4%BB%E7%94%A8%E3%81%AE%E3%81%9F%E3%82%81%E3%81%AE%E6%B4%BB%E5%8B%95.md)
    * [【PythonとSparkで始めるデータマネジメント入門】 ビッグデータレイクのためのテーブルデータ品質管理入門](https://www.udemy.com/course/python-spark-data-quality/)
        * データ品質管理について学習
            * 防ぐ
            * 見つける
            * 修正する
        * [メモ](./Udemy/%E3%80%90Python%E3%81%A8Spark%E3%81%A7%E5%A7%8B%E3%82%81%E3%82%8B%E3%83%87%E3%83%BC%E3%82%BF%E3%83%9E%E3%83%8D%E3%82%B8%E3%83%A1%E3%83%B3%E3%83%88%E5%85%A5%E9%96%80%E3%80%91%20%E3%83%93%E3%83%83%E3%82%B0%E3%83%87%E3%83%BC%E3%82%BF%E3%83%AC%E3%82%A4%E3%82%AF%E3%81%AE%E3%81%9F%E3%82%81%E3%81%AE%E3%83%86%E3%83%BC%E3%83%96%E3%83%AB%E3%83%87%E3%83%BC%E3%82%BF%E5%93%81%E8%B3%AA%E7%AE%A1%E7%90%86%E5%85%A5%E9%96%80.md)
    * [【PythonとSparkで始めるデータマネジメント入門】 ビッグデータレイクのための統合メタデータ管理入門](https://www.udemy.com/course/datamanagement-spark-metadata/)
        * メタデータについて学習
            * 種類
            * 格納方法
        * [メモ](./Udemy/%E3%80%90Python%E3%81%A8Spark%E3%81%A7%E5%A7%8B%E3%82%81%E3%82%8B%E3%83%87%E3%83%BC%E3%82%BF%E3%83%9E%E3%83%8D%E3%82%B8%E3%83%A1%E3%83%B3%E3%83%88%E5%85%A5%E9%96%80%E3%80%91%20%E3%83%93%E3%83%83%E3%82%B0%E3%83%87%E3%83%BC%E3%82%BF%E3%83%AC%E3%82%A4%E3%82%AF%E3%81%AE%E3%81%9F%E3%82%81%E3%81%AE%E7%B5%B1%E5%90%88%E3%83%A1%E3%82%BF%E3%83%87%E3%83%BC%E3%82%BF%E7%AE%A1%E7%90%86%E5%85%A5%E9%96%80.md)
    * ~~[【実戦で学ぶデータサイエンス講座】リレーショナルデータベースで始めるデータ活用とデータ分析のためのSQLを学ぼう](https://www.udemy.com/course/business_sql/)~~
        * SQLについての内容がメインであり、SQLは一定の理解度があるため延期
* イベント
    * [〜未踏の地〜データドリブン経営の最新考](https://blog.trocco.io/event/business_and_data_newspicks_20230530)
        * [メモ](./Event/%E3%80%9C%E6%9C%AA%E8%B8%8F%E3%81%AE%E5%9C%B0%E3%80%9C%E3%83%87%E3%83%BC%E3%82%BF%E3%83%89%E3%83%AA%E3%83%96%E3%83%B3%E7%B5%8C%E5%96%B6%E3%81%AE%E6%9C%80%E6%96%B0%E8%80%83.md)

### 6月
* 書籍
    * [『実践的データ基盤への処方箋』](https://amzn.asia/d/7FBkI6V)
        * データ活用しビジネス価値を創出するための現場のノウハウ
        * 「使われないデータ基盤」を「使われるデータ基盤」にし、さらには「進化し続けるデータ基盤」にするための処方箋
        * [メモ](./%E5%AE%9F%E8%B7%B5%E7%9A%84%E3%83%87%E3%83%BC%E3%82%BF%E5%9F%BA%E7%9B%A4%E3%81%B8%E3%81%AE%E5%87%A6%E6%96%B9%E7%AE%8B.md)
* Udemy
    * [Google BigQueryとGoogle Data Portal【旧Data Studio】から始めるデータ活用入門](https://www.udemy.com/course/bigquery_dataportal_basic/)
        * GCPにおけるデータ分析基盤の構築
            * BigQueryにおけるDWHとDMの設計実装
            * Looker Studioにおけるダッシュボードの作成
        * [メモ](./Udemy/Google%20BigQuery%E3%81%A8Google%20Data%20Portal%E3%80%90%E6%97%A7Data%20Studio%E3%80%91%E3%81%8B%E3%82%89%E5%A7%8B%E3%82%81%E3%82%8B%E3%83%87%E3%83%BC%E3%82%BF%E6%B4%BB%E7%94%A8%E5%85%A5%E9%96%80.md)
    * ~~[BigQueryで学ぶ！実践SQLデータ分析：ITサービス改善につなげよう](https://www.udemy.com/course/bq-sql-analysis/)~~
        * BigQueryは上の教材で学べるため延期
* イベント
    * [キーエンスの歴史から学ぶ！小さくはじめて最速で成果をだすデータ活用の方法](https://blog.trocco.io/seminar/keyence_quick-win_20230613)
        * [メモ](./Event/%E3%80%8E%E3%82%AD%E3%83%BC%E3%82%A8%E3%83%B3%E3%82%B9%E3%81%AE%E6%AD%B4%E5%8F%B2%E3%81%8B%E3%82%89%E5%AD%A6%E3%81%B6%EF%BC%81%E5%B0%8F%E3%81%95%E3%81%8F%E3%81%AF%E3%81%98%E3%82%81%E3%81%A6.md)
    * [第18回 Customer系エンジニア座談会](https://customer-x-engineer.connpass.com/event/285778/)

### 7月
* 実践
    * **クラウド上でのデータ分析基盤の構築**
        * [デモアプリ](./Practice/APP.md)の作成
        * [GCP](./Practice/GCP.md)でデータ基盤構築
    * **[データ分析基盤_各社事例集](https://docs.google.com/document/d/1DYD324wwbWTu5QFk93WcG7pb18XCNw561MBtwO_mVBo/edit?usp=sharing)を収集＆調査**
        * 事例から不足知識を補う
        * サービス毎のアーキテクチャーイメージを掴む
* イベント
    * [データ基盤管理の考え方~データカタログ、データレイクの極意~](https://findy.connpass.com/event/288091/)
        * [メモ](./Event/%E3%83%87%E3%83%BC%E3%82%BF%E5%9F%BA%E7%9B%A4%E7%AE%A1%E7%90%86%E3%81%AE%E8%80%83%E3%81%88%E6%96%B9%E3%80%9C%E3%83%87%E3%83%BC%E3%82%BF%E3%82%AB%E3%82%BF%E3%83%AD%E3%82%B0%E3%80%81%E3%83%87%E3%83%BC%E3%82%BF%E3%83%AC%E3%82%A4%E3%82%AF%E3%81%AE%E6%A5%B5%E6%84%8F.md)
    * [データマネジメントの勘所~マルチプロダクトSaaSを支えるデータ戦略の重要性~](https://techplay.jp/event/908124)
        * [メモ](./Event/%E3%83%87%E3%83%BC%E3%82%BF%E3%83%9E%E3%83%8D%E3%82%B8%E3%83%A1%E3%83%B3%E3%83%88%E3%81%AE%E5%8B%98%E6%89%80~%E3%83%9E%E3%83%AB%E3%83%81%E3%83%97%E3%83%AD%E3%83%80%E3%82%AF%E3%83%88SaaS%E3%82%92%E6%94%AF%E3%81%88%E3%82%8B%E3%83%87%E3%83%BC%E3%82%BF%E6%88%A6%E7%95%A5%E3%81%AE%E9%87%8D%E8%A6%81%E6%80%A7~.md)

### 8月
* 自社のデータ分析基盤の立ち上げ
    * ステークホルダーのMTGに参加したり、ヒアリングなどを行い要件定義
    * ETLパイプラインからDWH(Redshift)の立ち上げなどのデータ分析基盤の構築
    * ヘルススコアやプロダクトKPIのBIダッシュボードの設計実装
    * データフローの運用体制を策定

## 参考資料
* [データエンジニアが最初に学ぶべき3つのポイント：「ETL」「データモデリング」「ワークフロー」](https://gihyo.jp/article/2023/06/3things-data-engineer-should-learn-first)
* [データエンジニアのことを“バ美肉おじさん”に聞いてみよう
業界トップの菱沼氏が思う、仕事の魅力と必要なスキルとは](https://logmi.jp/tech/articles/328753)
* [ダッシュボードを作ったら業務工数削減に繋がった件](https://speakerdeck.com/mkmk000/datusiyubodozuo-tutaraye-wu-gai-shan-nixi-gatutajian)
* [データ活用が事業貢献していることを示すための取り組み](https://speakerdeck.com/cyberagentdevelopers/detahuo-yong-gashi-ye-gong-xian-siteirukotowoshi-sutamenoqu-rizu-mi)
* [Tableau ラーニング](https://www.tableau.com/ja-jp/learn)
    * [Tableau 認定資格](https://www.tableau.com/ja-jp/learn/certification)
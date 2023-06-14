# クラウド上でのデータ分析基盤の構築（GCP）

## データスタック
* データソース　　　　　：自作Webアプリ（GCE）
* プロセシングレイヤー　：Dataproc（or Dataflow）
    * [GCPのデータ処理・ETL系サービスの使い分け](https://qiita.com/tomoyanamekawa/items/e45317bada702159add0)
* ストレージレイヤー　　：BigQuery, Cloud Storage
* アクセスレイヤー　　　：Looker Studio
* メタデータ　　　　　　：Data Catalog
# AWSのデータ分析基盤について

## サービス
* Redshift プロビジョニング
    * DC2のストレージは160GB
    * データ量が増えた際にノード数を増やす必要が出てくる
* Redshift Serverless
    * 利用時間に応じた課金体系なため、クエリを実行すればするほど費用がかさむ
* Redshift Spectrum
* Athena
    * スケジューラーが存在しない

### ざっくり
* とにかくコストを安く済ませたいのであればAthena。
* パフォーマンス全振りであればRedshift。
* バランス型のRedshift Spectrumで、よく使うデータはRedshiftにロードし、利用頻度が低いのはS3においてSpectrumでクエリする

## 試算
### Redshift プロビジョニング
* 260.832USD（36,815円）
    * 0.494USD × 8RPU × 3.3h × 20日
        * 0.494USD/h
        * 8RPU ※最低
        * 実行3.3h（60s × 200回のクエリ）
        ※最低料金時間：60s

### Redshift Serverless
* 100.48USD（14,182円）
    * 0.314USD × 320h
        * 0.314USD/h（dc2.large）
        * 320h/月
            * 平日：15h × 20日
            * 休日：2h × 10日

### Redshift Spectrum
* 100.48USD（14,182円）
    * 0.314USD × 320h
        * 0.314USD/h（dc2.large）
        * 320h/月
            * 平日：15h × 20日
            * 休日：2h × 10日

### Athena
* 数十ドル（数千円）
    * 5.00USD/1TB


## RedshiftのクラスターとSpectrumの使い分け
* 利用頻度が少ないデータをS3に避難して、Spectrumで読み取る
* 利用判断としてはクラスター内のストレージを節約するため。
* SpectrumとクラスターのデータをJOINすることも可能
* MetabaseからSpectrumも利用可能なため、使い所に関してはそれほそ差がない
* データ分析基盤においておいて利用頻度が少ないとは一定の用途でしか利用しないデータ
# プロジェクト概要
## プログラム（プロジェクト）名
簡易ブログアプリ「myblog」<br>
(ローカル環境で開発)

<!-------------------------------------------------- -->
## プログラム作成のきっかけ
・PHP/Larabelを学習するために作成。<br>
以前、Ruby/Railsでブログアプリを制作した際に<br>
PHPで作るとどのような記述になるのだろうと<br>
興味を持ち開発に至った。<br>
<!-------------------------------------------------- -->
## ビジュアル（UI）の紹介

### トップページ(記事一覧)
<img width="1440" alt="スクリーンショット 2019-10-18 17 54 59" src="https://user-images.githubusercontent.com/46291510/67080589-82b67d00-f1d0-11e9-8130-5b1b77fad89e.png">
<br>

***

### 新規投稿
<img width="1440" alt="スクリーンショット 2019-10-18 17 58 13" src="https://user-images.githubusercontent.com/46291510/67080782-e2148d00-f1d0-11e9-80a4-128c63dc991d.png"><br>

***

### 記事編集
<img width="1434" alt="スクリーンショット 2019-10-18 18 02 33" src="https://user-images.githubusercontent.com/46291510/67081090-7bdc3a00-f1d1-11e9-8fc1-b483f01c7b5d.png">
<br>

***

### 記事詳細
<img width="1440" alt="スクリーンショット 2019-10-18 18 01 06" src="https://user-images.githubusercontent.com/46291510/67081017-53ecd680-f1d1-11e9-8a1c-5151b5fb95e5.png">
<br>

***

### 記事詳細(コメント投稿/コメント削除機能)
![result](https://i.gyazo.com/c7d79c1b82cdd8547cde5e36a70c1f6b.gif)](https://gyazo.com/c7d79c1b82cdd8547cde5e36a70c1f6b)<br>

***


<!-------------------------------------------------- -->
## 開発環境

- PHP 7.1.23
- Composer 1.9.0
- Laravel 5.8.35
- sqlite 3.24.0

<!-------------------------------------------------- -->
## 使用技術
- 記事投稿機能を実装
  - 投稿
  - 詳細
  - 編集
  - 削除
- コメントの機能を実装
  - コメント投稿
  - 削除

<!-------------------------------------------------- -->
## データベース設計

### postsテーブル
|カラム名|カラムの型|オプション|
|------|----|-------|
|title|string|not null|
|body|text|not null|


##### アソシエーション
- hasMany :Comment<br>

### commentsテーブル
|カラム名|カラムの型|オプション|
|------|----|-------|
|post_id|integer|not null, foreign_key|
|body|string|not null|
|password|string|null: false|


##### アソシエーション
- belongsTo :Post<br>


<!-------------------------------------------------- -->
## 製作時期と製作期間
製作期間 2019/010/11-2019/10/18<br>
作業時間 約25時間<br>



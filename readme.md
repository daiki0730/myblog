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

<!-- ### ・トップページ
![result](https://i.gyazo.com/9faa8c3b0f3d6ab19f92cb1e56fe970a.gif)<br>
***
### 記事一覧(全ユーザーの記事)
![result](https://i.gyazo.com/ece0dbf23d28de57400572846187a2e6.gif)<br>
***
### 記事詳細画面(全体)
![result](https://i.gyazo.com/da560e906b491d952e2985a36ffbe52e.gif)<br>
***
### 記事詳細画面(コメント投稿/コメント削除機能)
![result](https://i.gyazo.com/98ac7fb5d6f28cfb7aefb14b5dcd42c5.gif)<br>
***
***
### 投稿画面
![result](https://user-images.githubusercontent.com/46291510/65245742-19d3da80-db28-11e9-97e4-f826424b21a8.png)<br> -->



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
作業時間 約10時間<br>



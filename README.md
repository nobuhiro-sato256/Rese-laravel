# Rese-laravel
# atte
概要説明<br>
数々の飲食店が存在しており、ユーザーが手軽に予約をすることができる飲食店予約サービス
## 作成した目的
外部の飲食店サービスを利用すると手数料がかかってしまうため、自社で予約サービスを持つことにした。
## アプリケーションURL
デプロイ未実施、localhostで確認
## 他のリポジトリ
無し
## 機能一覧
飲食店の閲覧、予約機能<br>
ユーザーの新規登録、ログイン機能<br>
ユーザーのマイページから予約確認、変更、キャンセルの実施。お気に入り店舗の確認<br>
店舗一覧検索機能<br>
メールによる新規登録時の認証機能<br>
## 使用技術
PHP　7.4.9<br>
Laravel 8.83.27<br>
MySQL 8.0.26<br>
PHPMyadmin<br>
Nginx 1.21.1<br>
Laravel Fortity 1.19.1<br>
Docker/Docker-compose<br>　　
## テーブル設計
<img src="https://github.com/nobuhiro-sato256/atte-laravel/assets/60766413/f38bcd56-8b2e-463a-9ca5-e66596764b92" width="300">

## ER図
<img src="https://github.com/nobuhiro-sato256/atte-laravel/assets/60766413/4673859e-4038-4f4a-9df2-6ea69b6c881d" width="300">

## 環境構築
# Composerのインストール
```
composer install
```
# .envファイルのコピー、修正
```
cp .env.example .env
```
.envファイル　11行目以降
```
DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
+ DB_HOST=mysql
DB_PORT=3306
- DB_DATABASE=laravel
- DB_USERNAME=root
- DB_PASSWORD=
+ DB_DATABASE=laravel_db

## About This Package

自分たちで使いやすいようにバリデーションやミドルウェア、言語ファイル等をパッケージ拡張で切り出したものです。  
一部のファイルは App 配下へコピーされます。

## 注意事項

config/app.php の locale と timezone が勝手に日本向けに書き換わります。  
config/app_settings.php が追加されます。  
resources/lang/ja/ 以下ファイルが追加されます。  
app/Http/Rules/CurrentPassword.php が追加されます。  



## 使い方

Laravel をインストール後、composer.json に以下を追加してください。

```

"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/moobay9/laravelpackages.git",
        "symlink": true
    }
],
"require": {
    "funaffect/packages": "dev-master"
},
```

追加後、`composer install` するとパッケージがインストールされます。
パッケージ追加後は忘れずに `php artisan vendor:publish --tag=packages` を実行してください。

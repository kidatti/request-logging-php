# request-logging-php

HTTP によるアクセスのログを残します。
各種APIのコールバック確認などで利用に利用できます。
ログは log.txt へ保存されます。

### 利用方法

* アドレス:ポートで立ち上げます

```php
php -S localhost:8000
```

* アクセス後、ファイルを表示します

```
tail -f log.txt
```

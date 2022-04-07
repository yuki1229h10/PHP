<?php
$dsn = 'mysql:dbname=selfphp; host=127.0.0.1; charset=utf8';
$usr = 'root';
$password = '';

try {
    $db = new PDO($dsn, $usr, $password);
    print '接続に成功しました。';
} catch (PDOException $e) {
    die("接続エラー:{$e->getMessage()}");
} finally {
    $db = null;
}

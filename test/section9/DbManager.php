<?php
function getDb(): PDO
{
    $dsn = 'mysql:dbname=selfphp; host=127.0.0.1; charset=utf8';
    $usr = 'root';
    $password = '';

    $db = new PDO($dsn, $usr, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}

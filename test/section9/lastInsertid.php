<?php
require_once '../section9/DbManager.php';

try {
    $db = getDb();
    $db->exec("INSERT INTO member(nam, sex, old, enter, memo)VALUES('山田','男',18,'2021-09-30','')");
    print "直近のID値:{$db->lastInsertId()}";
} catch (PDOException $e) {
    die("エラーメッセージ:{$e->getMessage()}");
}

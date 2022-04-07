<?php
require_once '../section9/DbManager.php';

try {
    $db = getDb();
    $stt = $db->prepare('INSERT INTO book(isbn,title,price,publish,published)values(:isbn,:title,:price,:publish,:published)');
    $stt->bindValue(':isbn', $_POST['isbn']);
    $stt->bindValue(':title', $_POST['title']);
    $stt->bindValue(':price', $_POST['price']);
    $stt->bindValue(':publish', $_POST['publish']);
    $stt->bindValue(':published', $_POST['published']);
    $stt->execute();
    header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/insert_form.php');
} catch (PDOException $e) {
    die("エラーメッセージ:{$e->getMessage()}");
}


$stt = $db->prepare('INSERT INTO book(isbn,title,price,publish,published) values(?,?,?,?,?)');
$stt->bindValue(1, $_POST['isbn']);
$stt->bindValue(2, $_POST['title']);
$stt->bindValue(3, $_POST['price']);
$stt->bindValue(4, $_POST['publish']);
$stt->bindValue(5, $_POST['published']);

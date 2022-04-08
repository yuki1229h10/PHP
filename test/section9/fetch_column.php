<?php
require_once '../section9/DbManager.php';

$db = getDb();
$stt = $db->query('SELECT publish, title FROM book');
// print_r($stt->fetchAll(PDO::FETCH_COLUMN));
// print_r($stt->fetchAll(PDO::FETCH_COLUMN | PDO::FETCH_UNIQUE));
print_r($stt->fetchAll(PDO::FETCH_COLUMN | PDO::FETCH_GROUP));

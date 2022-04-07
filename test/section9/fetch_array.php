<?php
require_once '../section9/DbManager.php';

$db = getDb();
$stt = $db->query('SELECT * FROM book ORDER BY published DESC');
print_r($stt->fetchAll(PDO::FETCH_ASSOC));

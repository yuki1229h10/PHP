<?php
require_once '../section9/DbManager.php';

$db = getDb();
$stt = $db->query('SELECT COUNT(*) FROM book');
print "件数:{$stt->fetchColumn()}件";

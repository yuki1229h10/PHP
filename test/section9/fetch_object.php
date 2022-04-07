<?php
require_once '../section9/DbManager.php';
require_once '../section9/Book.php';

$db = getDb();
$stt = $db->query("SELECT * FROM book WHERE isbn='978-4-7981-4102-2'");
if ($row = $stt->fetchObject('Book', [0.1])) {
    print "{$row->title}:{$row->discount()}円";
}

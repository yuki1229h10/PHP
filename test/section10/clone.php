<?php
require_once 'Person1.php';

$p1 = new Person('ライ', '東');
$p2 = clone $p1;
$p2->firstName = '奈落';
$p2->lastName = '写楽';
print_r($p1);
print_r($p2);

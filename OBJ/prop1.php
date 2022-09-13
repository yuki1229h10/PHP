<?php

require_once 'Person2.php';

$p1 = new Person();
$p1->lastName = '山田';
$p1->firstName = '哲人';
$p2 = new Person();

$p2->lastName = '鈴木';
$p2->firstName = '花子';

print "<p>{$p1->lastName}{$p1->firstName}</p>";
print "<p>{$p2->lastName}{$p2->firstName}</p>";

<?php
require_once 'Person2.php';

$p1 = new Person();
$p1->lastName = '山田';
$p1->firstName = '太朗';

$p2 = new Person();
$p2->lastName = '鈴木';
$p2->firstName = '花子';

print "私は{$p1->lastName}{$p1->firstName}";
print "私は{$p2->lastName}{$p2->firstName}";

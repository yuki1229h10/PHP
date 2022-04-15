<?php
require_once 'Person4.php';
require_once 'FriendList.php';

$list = new FriendList();
$list->add(new Person('まさし', 'タイソン'));
$list->add(new Person('マナ', 'ララプランジヤ'));
$list->add(new Person('ケニー', 'アッカーマン'));

foreach ($list as $value) {
    print $value->show();
}

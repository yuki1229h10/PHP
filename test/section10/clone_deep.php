<?php
require_once 'Person1.php';
require_once 'FriendList.php';

$list = new FriendList();
$list->add(new Person('アスマ', '猿飛'));
$list->add(new Person('イタチ', 'うちは'));
$list->add(new Person('ナルト', 'うずまき'));

$list2 = clone $list;
var_dump($list2(1) === $list(1));

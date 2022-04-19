<?php
require_once 'Person1.php';
require_once 'FriendList.php';

$list = new FriendList();
$list->add(new Person('Taro', 'Yamada'));
$list->add(new Person('Kanta', 'Suzuki'));
$list->add(new Person('Midori', 'Okuyama'));

print $list(0);

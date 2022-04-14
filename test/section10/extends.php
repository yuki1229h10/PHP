<?php
require_once '../section10/BusinessPerson.php';

$bp = new BusinessPerson('猿', '犬');
$bp->work();
$bp->show();

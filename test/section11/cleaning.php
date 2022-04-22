<?php
require_once '../vendor/autoload.php';
$str = '<div onclick="alert(\'ほげーーーー\')">HogeHoge</div>';
// $pur = new HTMLPurifier();
print $pur->purify($str);

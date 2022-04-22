<?php
$ref = new ReflectionClass(DateTime::class);
$method = $ref->getMethod('createFromFormat');
$dt = $method->invoke(null, 'Y年m月d日 H時i分s秒', '2022年4月20日 17時00分00秒');
print($dt->format('Y-m-d H:i:s'));

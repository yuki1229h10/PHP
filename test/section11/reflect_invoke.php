<?php
$ref = new ReflectionClass(DateTime::class);
$method = $ref->getMethod('format');
$instance = $ref->newInstance('2022/04/20 17:35:00');
print($method->invoke($instance, 'Y年m月d日 g時i分s秒'));

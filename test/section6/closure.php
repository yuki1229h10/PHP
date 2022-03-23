<?php

function myArrayWalk(array $array, callable $func): void
{
    foreach ($array as $key => $value) {
        $func($value, $key);
    }
}

$data = ['Kensuke', 'Ken', 'Sasamoto'];

myArrayWalk($data, function ($value, $key) {
    print "{$key}:{$value}<br />";
});

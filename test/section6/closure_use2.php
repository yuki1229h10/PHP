<?php

function hoge()
{
    $data = [100, 50, 10, 5];
    $result = 0;

    myArrayWalk($data, function ($value, $key) use (&$result) {
        global $result;
        $result += $value;
    });

    print "合計値：{$result}";
}

hoge();

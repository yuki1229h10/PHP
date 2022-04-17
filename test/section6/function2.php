<?php

declare(strict_types=1);
// function getTriangleArea(float $base, float $height): float
// {
//     return $base * $height / 2;
// }

// $area = getTriangleArea(8, 10);
// print $area;



// function hoge(?int $value): void
// {
//     var_dump($value);
// }

// hoge(100);
// hoge(null);
// hoge();

// function hoge2(): void
// {
// return null;
// }



// function diamond($diagonal1, $diagonal2)
// {
//     return  $diagonal1 * $diagonal2 / 2;
// }

function diamond(float $diagonal1, float $diagonal2): float
{
    return $diagonal1 * $diagonal2 / 2;
}

print '菱形の面積は' . diamond(5, 2) . 'です。';


function getTriangleArea($base, $height)
{
    if ($base <= 0 || $height <= 0) {
        return;
    }
    return $base * $height / 2;
}

print getTriangleArea(1, 1);
// print getTriangleArea('5', 10);

function hoge(?int $value): void
{
    var_dump($value);
}

hoge(100);
hoge(null);
hoge();

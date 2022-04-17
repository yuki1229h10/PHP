<?php
// $base = 8;
// $height = 10;
// $area = $base * $height / 2;
// print "三角形の面積は{$area}です。";

function getTriangle($base, $height)
{
    print $base * $height / 2;
}

$area = getTriangle(8, 10);
print "三角形の面積は{$area}です。";

<?php
function sum($x, $y, $z)
{
    return $x + $y + $z;
}

$result = sum(100, 200, 300);
echo $result . PHP_EOL;
?>

<?php
function hello()
{
    return "hello";
}
$result = hello();
echo $result . PHP_EOL;

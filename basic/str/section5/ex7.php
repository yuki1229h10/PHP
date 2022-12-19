<?php
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i . PHP_EOL;
}
echo "終わり" . PHP_EOL;
?>

<?php
for ($i = 0; $i < 10; $i++) {
    $x = $i % 2;
    if ($x == 1) {
        continue;
    }
    echo $i . PHP_EOL;
}
echo "終わり" . PHP_EOL;

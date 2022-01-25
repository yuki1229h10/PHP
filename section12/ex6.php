<?php
function search($scores, $target)
{
    for ($i = 0; $i < count($scores); $i++) {
        $score = $scores[$i];
        if ($score === $target) {
            return true;
        }
    }
    return false;
}

$scores = [90, 72, 58, 80, 66, 50];
$target = (int) $argv[1];

$found = search($scores, $target);
if ($found === true) {
    echo "Found" . PHP_EOL;
} else {
    echo "Not Found" . PHP_EOL;
}

<?php
$diceA = 6;
$diceB = "6";

if ($diceA == $diceB) {
    echo "Win";
} else {
    echo "Lose";
}

?>

<?php
$diceA = 6;
$diceB = "6";

if ($diceA === $diceB) {
    echo "Win";
} else {
    echo "Lose";
}

?>

<?php
$diceA = 6;
$diceB = "6";
$diceC = (int) $diceB;

if ($diceA === $diceC) {
    echo "Win";
} else {
    echo "Lose";
}

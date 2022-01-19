<?php
$countries = [
    "Japan" => ["Tokyo", "Osaka", "Nagoya"],
    "England" => ["London", "Birmingham", "Glasgow"],
    "France" => ["Paris", "Marseille", "Lyon"],
];

$cities = $countries["England"];
for ($i = 0; $i < count($cities); $i++) {
    echo $cities[$i] . PHP_EOL;
}

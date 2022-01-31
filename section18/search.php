<?php
// $name = null;
// if (!isset($_GET["name"])) {
//     $name = null;
// } else if (!is_string($_GET["name"])) {
//     $name = false;
// } else {
//     $name = $_GET["name"];
// }

$name = filter_input(INPUT_GET, "name");

var_dump($name);
die("debug");

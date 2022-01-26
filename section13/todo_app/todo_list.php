<?php
require_once("functions.php");
$todo_list = read_todo_list(false);

// print_r($todo_list);
for ($i = 0; $i < count($todo_list); $i++) {
    $todo  = $todo_list[$i];
    echo $todo[0] . ":" . $todo[1] . "(" . $todo[2] . ")" . PHP_EOL;
}

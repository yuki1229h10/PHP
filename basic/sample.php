<?php
$a_bool = true;
$a_string = "foo";
$a_string2 = 'foo';
$an_int = 12;

echo get_debug_type($a_bool), "\n";
echo get_debug_type($a_string), "\n";

if (is_int($an_int)) {
  $an_int += 4;
}

var_dump($an_int);

if (is_string($a_string2)) {
  echo "String: $a_string2";
}

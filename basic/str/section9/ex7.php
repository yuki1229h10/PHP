<?php
$colors = ["Red", "Green", "Blue"];
// substr($colors[0], 0, 1);
for ($i = 0; $i < count($colors); $i++) {
    $result = substr($colors[$i], 0, 1);
    echo $result;
}

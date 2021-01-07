<?php

function descendingOrder($n) {
    $array = str_split($n);
    arsort ($array, $flags = SORT_NUMERIC);
    return (int)join($array);
}

$val1 = "121237344556788699"; // 987654321
$func = 'descendingOrder';
var_dump($func($val1));  // answer = 998877665544332211
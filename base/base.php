<?php

function descendingOrder($n) {
    $result = 0;
    str_split($n);
    arsort ($array, $flags = SORT_NUMERIC);
    return $result;
}

echo "_________ start" . "<br>"; // Start
$val1 = "123456789"; // 987654321

//var_dump(join([1, 2, 3, 4, 5]));

$func = 'descendingOrder';
var_dump($func($val1) == "987654321");
var_dump($func($val1));
echo "_________ end";  // End

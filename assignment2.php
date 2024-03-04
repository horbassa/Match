<?php
function smallestIndex($array, $size) {
    $minElement = min($array);
    return array_search($minElement, $array);
}

$num = array(40, 10, 20, 30, 50);
echo smallestIndex($num, count($num));
?>

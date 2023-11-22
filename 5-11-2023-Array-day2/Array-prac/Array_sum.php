<?php

$array1 = [
    1,
    2,
    4,
    5,
    7,


];
$array2 = [
    2,
    3,
    4,
    6,
    5,


];

$merge_array = array_merge($array1, $array2);
$sum = array_sum($merge_array);
echo $sum;
// // list($banana, $orange, $banana) = $same;

// // $sum = array_sum($fruitlist);

// foreach ($sum as $value) {

//     echo $value;





?>
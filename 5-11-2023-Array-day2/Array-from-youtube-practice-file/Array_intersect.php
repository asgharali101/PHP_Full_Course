<?php

$array1 = [
    'name1' => 'asghar',
    'name2' => 'ali',
    'name3' => 'mehnaz',
    'name4' => 'gul',
    'name5' => 'bisma',


];

$array2 = [
    'name1' => 'asghar',
    'name2' => 'ali',
    'name3' => 'bisma',
    'name4' => 'gul',
    'name5' => 'bisma',

];


$array4 = [
    'name1' => 'asghar',
    'name2' => 'ali',
    'name3' => 'bisma',
    'name4' => 'gul',
    'name5' => 'bisma',

];

$array3 = array_intersect($array1, $array2, $array4);

foreach ($array3 as $key => $value) {
    echo $value . '<br>';
}
?>
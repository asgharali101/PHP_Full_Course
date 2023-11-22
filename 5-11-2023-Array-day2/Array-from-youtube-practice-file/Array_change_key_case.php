<?php


$name1 = [
    'asghar',
    'ahmed',
    'mehnaz',
    'gul',

];

$name2 = [
    'a' => 'asghar',
    'b' => 'ali',
    'c' => 'mehnaz',
    'd' => 'gul',

];

$array3 = array_values($name1, );

foreach ($array3 as $key => $value) {
    echo $value . ' ';
}



?>
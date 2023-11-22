<?php

//its opposite to list
// LIST mai values ko $var kerai gai----- OR  --- EXTRACT mai key ko  $var kerai gai 

$name1 = [
    'a' => 'asghar',
    'b' => 'ahmed',
    'c' => 'mehnaz',
    'd' => 'gul',

];

$name2 = [
    'a' => 'asghar',
    'b' => 'ali',
    'c' => 'mehnaz',
    'd' => 'gul',

];

$array3 = array_merge($name1, $name2);

$array4 = extract($array3);
echo $a;



?>
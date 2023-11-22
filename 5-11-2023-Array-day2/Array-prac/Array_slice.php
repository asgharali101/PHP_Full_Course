<?php

$names = [
    'asghar',
    'ahmed',
    'gul',
    'fahhad',
    'gul  ',
    'fatima',
    'aqsa',
];

//unset($names[6]);


$newarray = array_slice($names, 3, 5, false);

foreach ($newarray as $key => $value) {

    echo $key . $value . '<br>';
}


// $array = [];


// unset($names[6]);


// $newarray = array_slice($names, 3, 5, false);

// foreach ($newarray as $key => $value) {


//     $array[] = $key . $value . '<br>';
// }

// foreach ($array as $key => $value) {


//     echo $value . '<br>';
// }
?>
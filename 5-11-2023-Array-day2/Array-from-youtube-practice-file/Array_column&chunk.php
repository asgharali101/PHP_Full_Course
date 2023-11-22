<?php

$fruitnames = [
    [
        'Shop' => 'Al-jasim-shop-rate',
        'banana' => 300,
        'orange' => 500,
        'apple' => 400,
        'grapes' => 100,
        'peans' => 350,
        'watermelon' => 550,

    ],

    [
        'Shop' => 'Ali-fruit-shop-rate',

        'banana' => 500,
        'orange' => 600,
        'apple' => 300,
        'grapes' => 150,
        'peans' => 380,
        'watermelon' => 450,

    ],

    [
        'Shop' => 'Al-ibrar-shop-rate',
        'orange' => 400,

        'banana' => 350,
        'apple' => 600,
        'grapes' => 200,
        'peans' => 250,
        'watermelon' => 650,

    ],

];

$column = array_column($fruitnames, 'banana');

foreach ($column as $key => $value) {
    echo 'banana' . $value . '<br>';
}











//array chunk 
echo '<h2> Array_chunk </h2>';
$array = [
    'Shop' => 'Al-jasim-shop-rate',
    'banana' => 300,
    'orange' => 500,
    'apple' => 400,
    'grapes' => 100,
    'peans' => 350,
    'watermelon' => 550,

];

$array1 = array_chunk($array, 2);

echo "<pre>";
print_r($array1);
echo "</pre>";

foreach ($array1 as $key => $value) {
    echo '<br>' . implode("<br>", $value);
}




?>
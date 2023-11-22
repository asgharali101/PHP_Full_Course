<?php

//Ist way 
echo "<h2> 1st way </h2>";
$array1 = [
    'name1' => 'asghar',
    'name2' => 'ahmed',
    'name3' => 'mehnaz',
    'name4' => 'gul',
    'name5' => 'bisma',


];

$array2 = [
    'name1' => 'asghar',
    'name2' => 'ali',
    'name3' => 'mehnaz',
    'name4' => 'gul',
    'name5' => 'bisma',

];

$array3 = array_intersect($array1, $array2);

foreach ($array3 as $key => $value) {
    echo $value . '<br>';
}







//2nd way 
echo "<h2> 2nd way </h2>";

$colors = ['red', 'green', 'pink'];
list($red, $green, $pink) = $colors;

$colors2 = ['red', 'black', 'pink'];
list($red, $black, $pink) = $colors2;

$samecolors = [$red, $pink];

foreach ($samecolors as $value) {
    echo $value;
}

echo '<br> <br>';








//3rd way



echo "<h2> 3rd way </h2>";
$students_of_A = [
    'asghar',
    'qasim',
    'ahmed',
    'sajjal',
    'bisma',

];

$students_of_B = [
    'asghar',
    'ali',
    'ahmed',
    'gul',
    'bisma',

];



$samenames = [];

foreach ($students_of_A as $nameA) {
    foreach ($students_of_B as $nameB) {
        if ($nameA === $nameB) {
            echo $nameA . 'was foudn in list<br>'; // ya  $nameA mai save krai  
        }
    }
}








//4th way using columns


echo "<h2>4th way using columns</h2>";

$fruit1 = [
    'Shop' => 'Al-jasim-shop-rate',
    'banana' => 300,
    'orange' => 500,
    'apple' => 400,
    'grapes' => 100,
    'peans' => 350,
    'watermelon' => 550,
];

$fruit2 = [

    'Shop' => 'Ali-fruit-shop-rate',

    'banana' => 500,
    'orange' => 600,
    'apple' => 300,
    'grapes' => 150,
    'peans' => 380,
    'watermelon' => 450,


];

$allfruits = array_merge($fruit1, $fruit2);

$column = array_column($allfruits, 'banana');

foreach ($column as $key => $value) {
    echo 'banana' . $value . '<br>';
}



?>
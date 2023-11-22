<?php

echo "<h2>Array_pop </h2>";

//Array_pop
//          --we use it for desleting our last value 
$fruitnames =
    [
        'a' => 'apple',
        'b' => 'orange',
        'c' => 'babnaa',
        'd' => 'pinepple',
        'e' => 'watermelon',

    ];


array_pop($fruitnames);

foreach ($fruitnames as $key => $value) {
    echo $value . '<br>';
}

echo '<br> <br>';

//assignmnets

$array1 = [
    'asghar',
    'ali',
    'fahad',
    'gumnam',
];



$lastname = array_pop($array1);

foreach ($array1 as $key => $value) {
    echo $value . '<br>';
}

if ($lastname) {
    echo "Pop value: $lastname";
}











echo "<h2>Array_push </h2>";
//array_push 
//opoosite to array pop it gives as new value which we not write in array


$colornames = [
    'asghar' => 'black',
    'ali' => 'orange',
    'faraz' => 'white',
    'mehnaz' => 'pink',
];

array_push($colornames, 'red', 'blue', 'orange');


//we use here array walk not foreach loop for practicing
array_walk($colornames, 'pushIt');
function pushIt($colorname, $value)
{
    echo "$value   favcolor is -->>> $colorname" . "<br>";
}







//arraypop assignmnets
$colors = [
    'asghar' => 'black',
    'ali' => 'orange',
    'faraz' => 'white',
    'mehnaz' => 'pink',
];

array_push($colors, 'red', 'blue', 'orange', 'blue');

for ($i = 0; $i < count($colors); $i++) {
    echo $i;


}


?>
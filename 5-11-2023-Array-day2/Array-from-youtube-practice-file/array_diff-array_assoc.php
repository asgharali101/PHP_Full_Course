<?php
//aray_diff 
$numbers2 = range(1, 30, 2);
$numbers = range(1, 22);

$newarray = array_diff($numbers2, $numbers);

foreach ($newarray as $key => $value) {

    echo $value;

}






//array_diff_assoc
//its check both key and value must same if we keep key change and same value it show us diff


$names = [
    'a' => 'asghar',
    'b' => 'ahmed',
    'c' => 'faraz',
    'd' => 'khan',
    'e' => 'Mohammad',

];

$names1 = [
    'a' => 'asghar',
    'c' => 'Gulshan',
    'b' => 'ahmed',
];

$result = array_diff_assoc($names, $names1);

echo '<pre>';
print_r($result);
echo '<pre>';


?>
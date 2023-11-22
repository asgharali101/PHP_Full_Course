<?php

//explode = means convert string into array;
$array = 'hello mr ali where are you yesterday';
//$show = explode(' ', $array, 4);
$show = explode(' ', $array, -4);

echo '<pre>';
print_r($show);
echo '</pre>';

echo '<br> <br>';




//implode = means convert array into string;

$implode = ['asghar', 'ali', 'fahad'];
///$print = implode('-', $implode);
//$print = implode('-------------------', $implode);
//$print = implode('<br>', $implode);
$print = implode('<h2>', $implode);




echo $print;


echo '<br> <br>';
?>
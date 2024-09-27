<?php
// array_diff=a function which give us compliment values from two different arrays
$numbers = range(1, 30,);
$floaton = range(1, 20);

$newArray = array_diff($numbers, $floaton);

foreach ($newArray as $value) {
  echo $value;
}
echo
"<pre>";
print_r($newArray);
"</pre>";



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

foreach ($result as $value) {
  echo $value . "";
}

// output faraz/khan/Mohammad-------->>leave match value of ahmed

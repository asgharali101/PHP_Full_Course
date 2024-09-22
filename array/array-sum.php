<?php
$digits = [22.4, 3300, 31.0, 230, 888, 203, 309];
$total = array_sum($digits);

// foreach ($total as $value) {
//   echo $value;
// }

echo $total;

$School_products = [
  "Book" => 200,
  "Pen" => 10,
  "Notebook" => 50,
];

$other_products = [
  "oppo" => 20000,
  "vivo" => 23000,
];

$sum = array_merge($School_products, $other_products);
echo "The total price of products is" . array_sum($sum) . "<br> <br>";


$array1 = [
  [1, 4, 5, 6, 7],
  [2, 4, 6, 8, 9, 3],
  [2, 4, 5],
];
// $merge_array = array_merge($array1);
// echo array_sum($merge_array);

$total_sum = 0;
foreach ($array1 as $value) {
  $total_sum += array_sum($value);
}

echo $value;

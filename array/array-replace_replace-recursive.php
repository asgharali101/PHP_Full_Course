<?php

$products = ["oppo" => 30000, "Samsung" => 20000, "Vivo" => 25000, "Infinix" => 12000];
$changerates = ["oppo" => 32000, "Vivo" => 28000, "Samsung" => 25000];

$newarray = array_replace($products, $changerates);

foreach ($newarray as $key => $value) {
  echo $key . ": new price is =" . $value . "<br>";
}


$array1 = [
  ["name" => "Asghar", "Subject" => "Math", "Marks" => 90]
];


$aray2 = [
  ["name" => "Ali", "Subject" => "sindhi", "Marks" => 80]
];

$changearray = array_replace_recursive($array1, $aray2);

echo "<pre>";
print_r($changearray);
echo "</pre>";

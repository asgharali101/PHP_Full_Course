<?php
// Array_pop=means delete the last value;
$fruits = ["apple", "Banana", "orange"];

$newarray = array_pop($fruits);

echo $newarray;

echo "<pre>";
print_r($fruits);
echo "</pre>";


// Array_push=means add value in last you can add /31 1Q1/2/3 more;

$student_detail = ["Asghar", 18, "asgharburdi786@gmail.com", "Intermediate", 22, 22];

$addnew = ["Village" => "Haji sajjawal"];


foreach ($addnew as $detail) {
  if (count($student_detail) >= 5) {
    array_shift($student_detail);
  }
  $newone = array_push($student_detail, $addnew);
}



echo "<pre>";
print_r($newone);
echo "</pre>";


$old_product = ["Oppo", "headphone", "Mouse",];
$new_product = ["laptop", "keyboard"];

array_push($old_product, $new_product);
echo "Added products <br>";
print_r($old_product);


$removeItems = array_pop($old_product);
echo "remove item $removeItems <br>";

echo "after removing last one <br>";
print_r($addnew);

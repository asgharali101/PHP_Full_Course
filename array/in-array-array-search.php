<?php
// in_array=means find something that availble or not in array;
$fruits = ["Apple", "Orange", "Banana", "Pineapple"];

echo in_array("Orange", $fruits) . "<br>";


if (in_array("Apple", $fruits)) {
  echo "find successfully <br>";
} else {
  echo "can't find";
}

// array_search=function which search your value's index on which index your value is;

$vege = ["patato", "Tomato", "Venger", "carrot", "onion"];

echo array_search("Tomato", $vege) . "<br>";


$students = ["Asghar" => 100, "Ahmed" => 90, "Ali" => 80];
$find = array_search(90, $students);


if ($find == true) {
  echo "$find has 90 marks";
} else {
  echo "noone take 90 marks";
}

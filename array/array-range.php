<?php
$alphabets = range("a", "z");
$vowel = "";

foreach ($alphabets as $key => $value) {
  if ($value == "a") {
    echo $value . "=== is vowel letter <br>";
    $vowel .= $value;
  } elseif ($value == "e") {
    echo $value . "=== is vowel letter <br>";
    $vowel .= $value;
  } elseif ($value == "i") {
    echo $value . "=== is vowel letter <br>";
    $vowel .= $value;
  } elseif ($value == "o") {
    echo $value . "=== is vowel letter <br>";
    $vowel .= $value;
  } elseif ($value == "u") {
    echo $value . "=== is vowel letter <br>";
    $vowel .= $value;
  } else {
    echo $value . "<br>";
  }
}

echo $vowel . "<br>";
$numbers = range("0", "100");


foreach ($numbers as $number) {
  // echo $number . "<br>";

  if ($number % 2 == 0) {
    echo $number . "<br>";
  }
}

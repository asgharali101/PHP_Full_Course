<?php
$originalArray = array(
    'apple' => 'red',
    'banana' => 'yellow',
    'cherry' => 'red'
);

$flippedArray = array_flip($originalArray);

foreach ($flippedArray as $key => $value) {
    echo $key . $value;
}

print_r($flippedArray);

?>
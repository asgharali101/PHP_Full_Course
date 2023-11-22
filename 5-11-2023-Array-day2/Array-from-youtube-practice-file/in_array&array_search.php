<?php

$products = [
    ['name' => 'Laptop', 'price' => 999.99],
    ['name' => 'Smartphone', 'price' => 499.99],
    ['name' => 'Headphones', 'price' => 79.99],

];

$found = 'price';

if (in_array($found, $products)) {
    echo "Yes $found is available in an array";
} else {
    echo "No $found is not available in an array";

}



?>
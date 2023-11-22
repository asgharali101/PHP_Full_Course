<?php

$numbers = [4, 2, 9, 7, 1, 6, 3, 8, 5];

$searchElement = 5;



foreach ($numbers as $number) {

    if ($number === $searchElement) {
        echo "Yes $searchElement is available in the array <br>";

    } // elseif ($number !== $searchElement) {
    //     echo "No $searchElement is not available in the array <br>";

    // }
}

?>
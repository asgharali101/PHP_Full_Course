<?php
$inputArray = array(1, 2, 2, 3, 4, 4, 5);
$uniqueArray = array_unique($inputArray);

foreach ($uniqueArray as $key => $value) {
    echo $value;
}

//print_r($uniqueArray);

?>
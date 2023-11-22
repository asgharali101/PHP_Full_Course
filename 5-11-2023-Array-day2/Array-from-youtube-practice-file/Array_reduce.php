<?php
$numbers = [1, 2, 3, 4, 5];

function sumFunction($n, $m)
{
    return $n + $m;
}

$sum = array_reduce($numbers, 'sumFunction',//10,
);

echo $sum . '<br>';




// find even numbers

$array = range(1, 100);


$evens = array_reduce($array, 'findEvens');

function findEvens($n, $m)
{
    if ($m % 2 == 0) {
        echo $m + $n . "is even number <br>";
    }
}


?>
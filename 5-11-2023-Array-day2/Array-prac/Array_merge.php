<?php
$number = [1, 5, 3, 7, 2, 9, 10, 4, 8, 6,];
$students = ['a', 'b', 'd', 'c', 'k', 'n', 'p', 'q', 'l', 'g'];
$names = ['asghar', 'ahmed', 'gul', 'fahhad', 'mehnaz', 'fatima', 'aqsa'];

$merge = array_merge($number, $students, $names);

foreach ($merge as $value) {
    echo $value . '<br>';
}
echo '<br>';
?>
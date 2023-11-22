<?php
//------prac of SORT-------------


echo "<h2>sort  VS rsort----------</h2>";

$number = [1, 5, 3, 7, 2, 9, 10, 4, 8, 6,];
$students = ['a', 'b', 'd', 'c', 'k', 'n', 'p', 'q', 'l', 'g'];
$names = ['asghar', 'ahmed', 'gul', 'fahhad', 'mehnaz', 'fatima', 'aqsa'];
//implode('-', $number);
//sort($number);
// sort($students);
rsort($names);




foreach ($names as $key => $value) {
    echo $value . '<br>';
}





//asort  VS arsort----------
echo "<h2>asort  VS arsort----------</h2>";

$names1 = [
    '4' => 'asghar',
    '2' => 'ahmed',
    '1' => 'gul',
    '3' => 'fahhad',
    '6' => 'mehnaz',
    '5' => 'fatima',
    '7' => 'aqsa'
];

// asort($names1);
arsort($names1);


foreach ($names1 as $key => $value) {
    echo $key . $value . "  ";


    echo "<br> <br>";

}








echo "<h2>ksort  VS krsort----------</h2>";

$names1 = [
    '4' => 'asghar',
    '2' => 'ahmed',
    '1' => 'gul',
    '3' => 'fahhad',
    '6' => 'mehnaz',
    '5' => 'fatima',
    '7' => 'aqsa'
];

// krsort($names1);
ksort($names1);


foreach ($names1 as $key => $value) {
    echo $key . $value . "  ";

}
echo "<br> <br>";

?>
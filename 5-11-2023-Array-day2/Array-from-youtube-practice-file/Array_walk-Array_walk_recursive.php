<?php
echo '<h3>Array Walk</h3>';


function hello($subjects, $marks)
{
    echo $subjects . $marks . 'marks' . '<br>';
}

$asgharData = [
    'Phy:' => 45,
    'Che:' => 80,
    'Bio:' => 90,
    'Eng:' => 65,
];


array_reduce($asgharData, "hello", "in this subject takes=");

$array1 = range(1, 10);

$newarray = array_walk($array1, 'doubleValue', );

function doubleValue($key, $value, )
{
    if (strlen($value) > 5) {
        unset($value);
    }

}




// echo $extra;



//Array Walk Recursive;

echo '<h3>Array Walk Recursive</h3>';

$students = [
    $asgharData,
    'name' => 'Fahad',
    [
        'Phy:' => 45,
        'Che:' => 80,
        'Bio:' => 90,
        'Eng:' => 65,
    ],
    'name1' => 'Asghar',
    [
        'Phy:' => 25,
        'Che:' => 50,
        'Bio:' => 60,
        'Eng:' => 45,
    ]
];


array_walk_recursive($students, 'studentsData', );

function studentsData($value, $key)
{
    echo $key . $value . '<br>';
}
;



?>
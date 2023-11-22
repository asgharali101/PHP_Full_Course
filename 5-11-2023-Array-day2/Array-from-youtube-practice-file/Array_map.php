<?php

echo "<h2>Example 1: </h2>";

function mapStructure($asghar, $alp, $numbers)
{
    echo $alp + $numbers . "<br>";
}

$asgharData = [
    'name:' => 'Asghar',
    'phy:' => 45,
    'Che:' => 80,
    'Bio:' => 90,
    'Eng:' => 65,
];
$alphabets = range(1, 30);
$numbers = range(1, 30);

array_map('mapStructure', $asgharData, $alphabets, $numbers);

// Example 2
echo "<h2>Example 2: </h2>";

$numbers1 = range(1, 10);
$numbersInUrdu = [
    'Aik (ایک)',
    'Do (دو)',
    'Teen (تین)',
    'Char (چار)',
    'Panch (پانچ)',
    'Chhah (چھہ)',
    'Saat (سات)',
    'Aath (آٹھ)',
    'Nau (نو)',
    'Das (دس)'
];

function assiocative($num1, $num2)
{
    return [$num2 => $num1];
}

$show = array_map('assiocative', $numbersInUrdu, $numbers1);

echo '<pre>';
print_r($show);
echo '</pre>';

// Example 3
echo "<h2>Example 3: </h2>";

$a = [1, 2, 3, 4, 5];
$b = ['one', 'two', 'three', 'four', 'five'];
$c = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];

$d = array_map(null, $a, $b, $c);
echo '<pre>';
print_r($d);
echo '</pre>';
?>
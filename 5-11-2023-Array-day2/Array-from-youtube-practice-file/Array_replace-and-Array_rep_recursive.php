<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>
        asghar
    </h2>
</body>

</html>

<?php
$fruits = [];

$languages = array('PHP', 'JavaScript', 'Python', 'Java', 'C++', 'Html');

foreach ($languages as $key => $value) {
    echo $value . '<br>';
}

echo '<br>';

$length = count($languages);

for ($i = $length - 1; $i >= 0; $i--) {
    echo $languages[$i] . '<br>';
}




echo '<pre>';
print_r($languages);
echo '</pre>';


//replace with loop
// $empty = [];


// foreach ($array1 as $key => $value) {
//     $empty[] = $value . '<br>';
// }

// foreach ($empty as $key => $value) {
//     echo $value . '<br>';
// }
?>
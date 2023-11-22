<?php
$alphabets = range('z', 'a', );
// $alphabets = range('z', 'h', );
//sort($alphabets);

echo '<pre>';
print_r($alphabets);



foreach ($alphabets as $alphabet) {
    if ($alphabet == 'a') {
        echo $alphabet . '--- is vowel' . '<br>';

    }

    if ($alphabet == 'e') {
        echo $alphabet . '--- is vowel' . '<br>';

    }

    if ($alphabet == 'i') {
        echo $alphabet . '--- is vowel' . '<br>';

    }

    if ($alphabet == 'o') {
        echo $alphabet . '--- is vowel' . '<br>';

    }
    if ($alphabet == 'u') {
        echo $alphabet . '--- is vowel' . '<br>';

    }
    // if ($alphabet == 'a' || $alphabet == 'e' || $alphabet == 'i' || $alphabet == 'o' || $alphabet == 'u') {
    //     $alphabets . ' is vowel';
    // }


    if ($alphabet == 'a' || $alphabet == 'e' || $alphabet == 'i' || $alphabet == 'o' || $alphabet == 'u') {
        continue;
    } else {
        echo $alphabet . '<br>';
    }

}
?>
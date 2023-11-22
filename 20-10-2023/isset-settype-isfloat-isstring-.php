<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even and Odd Numbers</title>
</head>

<body>
    <?php

    $var = 'asghar';
    $var1 = -20;
    $var2 = 20.99;
    $var3 = true;
    $var4 = ['asghar', 50, 'ali'];
    $var5 = null;






    echo '<h2>Get type and set type</h2>';
    // Get type and set type;
    

    /*echo gettype($var4) . ": " . $var1;
    echo '<br>';
    echo settype($var3, 'integer');
    echo gettype($var3);
    echo '<br>';
    echo "<br />";

    //-------------------------------
    echo settype($var, 'integer') ? 'true' : 'false';
    echo '<br>'; //------>>.change variable datatype;
    
    echo gettype($var);
    echo '<br>';*/
    //---------------------------------->>.get datatype name means it tell you it is string;
    






    // Istype-----------------
    echo '<h2>Istype</h2>';

    if (isset($var5)) {
        echo $var5 . 'var is set and value is not null';
    } else {
        echo $var5 . 'var is not set and value is null';
    }





    // Is-array-----------------
    echo '<h2>isarray</h2>';

    if (is_array($var3)) {
        echo $var3('var is array');
    } else {
        echo $var3 . ('var is not array');
    }




    // Is-bool-----------------
    echo '<h2>isboolean</h2>';

    if (is_bool($var3)) {
        echo $var3 . 'var is boolean';
    } else {
        echo $var3 . 'var is not boolean';
    }






    ///isfloat
    echo '<h2>isfloat</h2>';

    if (is_float($var2)) {
        echo $var2 . ' :var is float';
    } else {
        echo $var2 . ' :var is not float';
    }





    //is integer
    echo '<h2>isinteger</h2>';

    if (is_integer($var1)) {
        echo $var1 . ' :var is integer';
    } else {
        echo $var1 . ' :var is not integer';
    }






    // Is-null-----------------
    echo '<h2>isnull</h2>';

    if (is_null($var2)) {
        echo $var2 . ' var is null';
    } else {
        echo $var2 . ' var is not null';
    }





    // numeric    mean both Float&integer-----------------
    echo '<h2>isnumeric</h2>';

    if (is_numeric($var2)) {
        echo $var2 . 'var is numeric';
    } else {
        echo $var2 . 'var is not numeric';
    }




    // Is-bool-----------------
    echo '<h2>isobject</h2>';

    if (is_object($var2)) {
        echo $var2 . 'var is object';
    } else {
        echo $var2 . 'var is not object';
    }






    // Is-resource-----------------
    echo '<h2>isresource</h2>';

    if (is_resource($var2)) {
        echo $var2 . 'var is resource';
    } else {
        echo $var2 . 'var is not resource';
    }




    // Is-resource-----------------
    echo '<h2>isscaler</h2>';

    if (is_scalar($var1)) {
        echo $var1 . 'var is scaler';
    } else {
        echo $var1 . 'var is not scaler';
    }



    ?>
</body>

</html>
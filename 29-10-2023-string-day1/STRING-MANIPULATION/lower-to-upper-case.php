<?php

$name = "asghar ali burdi";

echo substr($name, 7, 3);


?>

<form method="post">


    <label for="inputString">lower to upper case</label>
    <input type="text" name="inputupper" id="inputString">
    <input type="submit" value="upper">


</form>

<?php



if (isset($_POST['inputupper'])) {
    $name = $_POST['inputupper'];
    $uppername = strtoupper($name);

    echo 'orignal name:' . $name . '<br>';
    echo 'convert name into uppercase:' . $uppername . '<br> <br>';

}

?>
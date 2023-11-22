<?php




?>

<form method="post">


    <label for="inputString">UPPER to LOWER case</label>
    <input type="text" name="inputlower" id="inputString">
    <input type="submit" value="upper">


</form>

<?php



if (isset($_POST['inputlower'])) {
    $name = $_POST['inputlower'];
    $uppername = strtolower($name);

    echo 'orignal name:' . $name . '<br>';
    echo 'convert name into lowercase:' . $uppername . '<br> <br>';

}

?>
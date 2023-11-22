<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>cookies Assignment</title>


</head>


<body>
    <?php

    //session practice 
    session_start();


    echo 'fav color is: ' . $_SESSION['color'] . '<br>';
    //echo $_SESSION['username'];
    echo $_SESSION['username'] . '<br>';

    //session_unset();
    //session_destroy();
    //print_r($color);
    
    //code with harry
    setcookie('category', 'books', time() + 86400, '/');
    echo 'your cookies is ready now <br>';

    $cat = $_COOKIE['category'];
    echo "here is all your $cat" . '<br> <br>';


    //yaho baba we create var and set them in cookies
    $cookieName = 'username';
    $coockie_value = 'Asghar';

    setcookie($cookieName, $coockie_value, time() + 86400 * 30, "/");

    $cat = $_COOKIE[$cookieName];


    (!isset($cat)) ? $cat = "cookie is not set" : "$cat";

    ?>


    <?php echo "the user name is " . "<a href='#'> $cat</a> "; ?>





</body>

</html>
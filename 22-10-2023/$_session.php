<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> SESSION Assignment</title>


</head>


<body>
    <?php
    //echo '<pre>';
    //print_r($_session);
    session_start();

    $_SESSION['color'] = 'red';
    $_SESSION["animal"] = 'lion';

    $color = $_SESSION['color'];
    $animal = $_SESSION["animal"];




    // session_destroy();
    
    echo 'favcolor is: ' . "<h2>$color </h2>" . '<br>';
    echo 'favanimal is: ' . "<h2>$animal</h2>" . '<br>';
    echo $color;


    // unset($_SESSION['color']);
    // Start the session
    

    // Set some session variables
    $_SESSION['username'] = 'Asghar';
    $_SESSION['email'] = 'john@example.com';
    //session_unset();
    
    // Unset a specific session variable
    // unset($_SESSION['email']);
    
    // Destroy the session
    //session_destroy();
    
    // Ensure all session variables are removed
    //$_SESSION = array();
    
    // The session is now destroyed and all data is cleared
    






    ?>





</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web form </title>

    <style>
    /* Style for the form container */
    .form-container {
        width: 30%;
        margin: 0 auto;
        padding: 50px;
        background-color: #f2f2f2;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    /* Style for form input fields */
    .form-input {
        width: 50%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff;
    }

    /* Style for the submit button */
    .submit-button {
        width: 50%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Style for the submit button on hover */
    .submit-button:hover {
        background-color: #0056b3;
    }
    </style>



</head>

<body>
    <?php

   /* echo '<pre>';
    print_r($_GET);

    //echo $_GET['name'];
    
    ?>

    <!-- <form action="form_submission.php" target="_blank"> -->
    <form target="_blank">
        <input type="text" placeholder="Name" name="user_name">
        <input type="number" placeholder="Marks" name="marks">
        <br>

        <button>Submit</button>
    </form>



    222222

    <?php
    /*
        echo '<pre>';
        print_r($_GET);

        echo $_GET['number_1'];
        echo $_GET['number_2'];
        echo $_GET['operate'];

        // $_GET['number_1'] . $ . $_GEt['number_2']

        if ($_GET['opr'] === '+') {
            
        }
        ?>

    <!-- <form action="form_submission.php" target="_blank"> -->
    <form target="_blank">
        <input type="text" placeholder="Name" name="user_name">
        <input type="number" placeholder="Marks" name="marks">
        <br>

        <button>Submit</button>
    </form>

    */


    ?>

    <?php

    echo '<pre>';
    print_r($_GET);
    $number1 = $_GET['number_1'];
    $number2 = $_GET['number_2'];
    $operator = $_GET['operator'];

    if ($operator === '+') {
        echo $number1 + $number2;

    } elseif ($operator === '-') {
        echo $number1 - $number2;

    } elseif ($operator === '*') {
        echo $number1 * $number2;

    } elseif ($operator === '/') {
        echo $number1 / $number2;
    }


    ?>

    <div class="form-container">
        <form action='list-webform-assignment.php' method='post'>
            <input class="form-input" type="text" placeholder="Number1" name="number_1">
            <input class="form-input" type="text" placeholder="Number2" name="number_2">
            <input class="form-input" type="text" placeholder="Operator (+, -, *, /)" name="operator">
            <button class="submit-button" type="submit">Submit</button>
        </form>
    </div>








</body>

</html>
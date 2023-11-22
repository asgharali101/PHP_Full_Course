<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>server Assignment</title>
    <style>
    .form-container {

        height: 80vh;
        padding-top: 20px;
        width: 50%;
        margin: 0 auto;
        /* This centers the container horizontally */
        text-align: center;
        /* This centers the form content horizontally */

        background-color: #f2f2f2;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    div {
        width: 80%;
        text-align: start;
    }




    .form-input {
        width: 80%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff;
    }


    .submit-button {
        width: 80%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }


    .submit-button:hover {
        background-color: #0056b3;
    }
    </style>

</head>


<body>
    <?php
    echo '<pre>';
    print_r($_POST['name']);
    echo '</pre>';
    echo '<pre>';
    print_r($_SERVER['name']);

    echo $_GET['name'];
    ?>

    <form class="form-container" action='<?php echo $_SERVER['PHP_SELF'] ?>' method="POST">
        <div>
            <label for="name">Your Name:</label>
            <input class='form-input' type="text" id="name" name="name" /><br>


            <label for="email">Your Email:</label>
            <input class='form-input' type="text" id="email" name="email" /><br>


            <label for="name">Age</label>
            <input class='form-input' type="number" id="age" name="age" /><br>

            <input class='submit-button' type="submit" value="Submit">
        </div>
    </form>
</body>

</html>
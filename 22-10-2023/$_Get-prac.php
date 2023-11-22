<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Feedback Form Assignment</title>
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

    label {
        display: block;
        margin-bottom: 5px;
        text-align: left;
        margin-left: 60px;
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

    table {
        width: 100%;
        margin-top: 80px;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    </style>

</head>


<body>
    <?php
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    /*if (isset($_POST['submit'])) {
        echo 'this form is post method' . '<br>';
        echo 'name' . $_POST['name'] . '<br>';
        echo 'email' . $_POST['email'] . '<br>';
        echo 'feedback' . $_POST['feedback'] . '<br>';

    } elseif (isset($_GET['submit'])) {
        echo 'this form is get method' . '<br>';
        echo 'name' . $_GET['name'] . '<br>';
        echo 'email' . $_GET['email'] . '<br>';
        echo 'feedback' . $_GET['feedback'] . '<br>';
        exist();
    }*/




    if (isset($_POST['name'])) {
        echo '<h4>your name is</h4> ' . $_POST['name'] . '<br>';

        echo '<h4>your mail is</h4> ' . $_POST['email'] . '<br>';

        echo '<h4>your age is</h4> ' . $_POST['age'] . '<br>';

        echo '<h4>your school name is</h4> ' . $_POST['school'] . '<br>';

        echo '<h4>your total marks is</h4> ' . $_POST['marks'] . '<br>';


    }

    //echo '<pre>';
    //print_r($_GET);
    
    //echo $_GET['name'];
    
    ?>
    <form class="form-container" action="<?php $_php_SELF ?>" method="Post">
        <label for="name">Your Name:</label>
        <input class='form-input' type="text" id="name" name="name" /><br>


        <label for="email">Your Email:</label>
        <input class='form-input' type="text" id="email" name="email" /><br>


        <label for="name">Age</label>
        <input class='form-input' type="number" id="age" name="age" /><br>

        <label for="school">school</label>
        <input class='form-input' type="text" id="name" name="school" /><br>


        <label for="marks">Marks</label>
        <input class='form-input' type="number" id="name" name="marks" /><br>



        <label for="feedback">Your Feedback:</label>
        <textarea class='form-input' id="feedback" name="feedback"></textarea><br>

        <input class='submit-button' type="submit" value="Submit">
    </form>

    <table border="2" action='list-webform-assignment.php'>
        <thead>
            <tr>
                <th name='name'>Name</th>
                <th name='email'>Email</th>
                <th name='age'>Age</th>
                <th name='school'>School</th>
                <th name='marks'>Marks</th>
                <th name='marks'>Feedback</th>

            </tr>
        </thead>

        <tbody>
            <tr>
                <td>
                    <?php echo $_POST['name'] ?>
                </td>

                <td>
                    <?php echo $_POST['email'] ?>
                </td>

                <td>
                    <?php echo $_POST['age'] ?>
                </td>
                <td>
                    <?php echo $_POST['school'] ?>
                </td>
                <td>
                    <?php echo $_POST['marks'] ?>
                </td>
                <td>
                    <?php echo $_POST['feedback'] ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
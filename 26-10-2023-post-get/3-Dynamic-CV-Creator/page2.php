<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Second Page Form</title>
    <style>
    form {
        display: flex;
        width: 100%;
        justify-content: space-between;
    }

    .dev1 {
        width: 50%;
        margin: 0px 20px;
    }

    .dev2 {
        width: 50%;
        margin: 0px 20px;

    }

    .container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px 60px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    textarea {
        height: 150px;
    }

    .submit-button {
        background-color: #007BFF;
        color: white;
        padding: 10px 20px;
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
    <h1>Contact Information</h1>


    <form action="page3.php" method="POST">

        <div class="dev1">

            <h2>page1 information</h2>
            <?php if (isset($_POST['name'])) { ?>
            <label for="name">Name</label>
            <input type="text" name="name" value="<?php echo $_POST['name']; ?>">

            <label for="father_name">fathername</label>
            <input type="text" name="father_name" value="<?php echo $_POST['fathername']; ?>">

            <label for="gender">Gender</label>
            <input type="  text" name="gender" value="<?php echo $_POST['gender']; ?>">




            <label for="country">country</label>
            <?php
                for ($i = 0; $i < count($_POST['country']); $i++) { ?>
            <input type="text" name="country[]" id="country" value="<?php echo $_POST['country'][$i] ?>">
            <?php } ?>


            <?php } ?>


        </div>


        <div class="dev2">
            <h2>new information</h2>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required><br>

            <label for="contact_number">Contact Number:</label>
            <input type="text" id="contact" name="contact_number" required><br>

            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea><br>

            <input type="submit" value="Next">

        </div>
    </form>

</body>

</html>
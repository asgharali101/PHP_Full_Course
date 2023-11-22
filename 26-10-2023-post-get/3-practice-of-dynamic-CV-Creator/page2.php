<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Info</title>
    <style>
    .form-container {
        max-width: 300px;
        margin: 0 auto;
    }

    .form-input {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
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
    <h2>CONTACT INFO</h2>
    <form action="page3.php" method="post">
        <label for="email">Email:</label>
        <input type="text" name="email" class="form-input"><br>
        <label for="contact_number">Contact Number:</label>
        <input type="text" name="contact_number" class="form-input"><br>
        <label for="address">Address:</label>
        <input type="text" name="address" class="form-input"><br>
        <input type="  text" name="name" value="<?php echo $_POST['name']; ?>">
        <input type="  text" name="father_name" value="<?php echo $_POST['father_name']; ?>">
        <input type="  text" name="gender" value="<?php echo $_POST['gender']; ?>">
        <input type="  text" name="country" value="<?php echo $_POST['country']; ?>">
        <input type="submit" value="Next" class="submit-button">
    </form>
</body>

</html>
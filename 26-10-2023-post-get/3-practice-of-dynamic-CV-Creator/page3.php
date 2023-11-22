<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Professional Info</title>
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
    <h2>PROFESSIONAL INFO</h2>
    <form action="page4.php" method="post">
        <label for="school_name">School Name:</label>
        <input type="text" name="school_name" class="form-input"><br>
        <label for="college_name">College Name:</label>
        <input type="text" name="college_name" class="form-input"><br>
        <label for="university_name">University Name:</label>
        <input type="text" name="university_name" class="form-input"><br>
        <label for="school_dates">School Dates:</label>
        <input type="date" name="school_dates" class="form-input"><br>
        <label for="college_dates">College Dates:</label>
        <input type="date" name="college_dates" class="form-input"><br>
        <label for="university_dates">University Dates:</label>
        <input type="date" name="university_dates" class="form-input"><br>
        <label for="summary">Summary:</label>
        <textarea name="summary" class="form-input"></textarea><br>

        <input type="text" name="email" class="form-input" value="<?php echo $_POST['email']; ?>"><br>

        <input type="text" name="contact_number" class="form-input" value="<?php echo $_POST['contact_number']; ?>"><br>

        <input type="text" name="address" class="form-input" value="<?php echo $_POST['address']; ?>"><br>

        <input type="text" name="name" value="<?php echo $_POST['name']; ?>">
        <input type="text" name="father_name" value="<?php echo $_POST['father_name']; ?>">
        <input type="text" name="gender" value="<?php echo $_POST['gender']; ?>">
        <input type="text" name="country" value="<?php echo $_POST['country']; ?>">
        <input type="submit" value="Next" class="submit-button">
    </form>
</body>

</html>
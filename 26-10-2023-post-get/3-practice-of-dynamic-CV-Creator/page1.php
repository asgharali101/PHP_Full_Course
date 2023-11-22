<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Personal Info</title>
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
    <h2>PERSONAL INFO</h2>
    <form action="page2.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-input"><br>
        <label for="father_name">Father's Name:</label>
        <input type="text" name="father_name" class="form-input"><br>
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="Male" class="form-input"> Male
        <input type="radio" name="gender" value="Female" class="form-input"> Female<br>
        <label for="country">Country:</label>
        <select name="country" class="form-input">
            <option value="USA">USA</option>
            <option value="Canada">Canada</option>
            <option value="Canada">pakistan</option>
            <option value="Canada">India</option>


            <!-- Add more country options -->
        </select><br>



        <input type="submit" value="Next" class="submit-button">
    </form>
</body>

</html>
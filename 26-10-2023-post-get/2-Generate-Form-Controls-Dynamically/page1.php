<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Page 1</title>
</head>

<body>
    <h1>Page 1</h1>
    <form action="page2.php" method="POST">
        <label for="no_of_fields">Number of Text Fields:</label>
        <input type="number" name="no_of_fields" id="no_of_fields" required>

        <label>Gender:</label>
        <input type="radio" name="gender[]" value="Male"> Male
        <input type="radio" name="gender[]" value="Female"> Female

        <label for="country">Select Country:</label>
        <input type="checkbox" name="country[]" value="USA">USA
        <input type="checkbox" name="country[]" value="Canada">Canada
        <input type="checkbox" name="country[]" value="UK">UK
        <!-- Add more options as needed -->

        <input type="submit" value="Submit">
    </form>
</body>

</html>
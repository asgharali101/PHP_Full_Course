<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CV Display</title>
</head>

<body>
    <h2>CV</h2>
    <?php

    echo "Name: " . $_POST["name"] . "<br>";
    echo "Father's Name: " . $_POST["father_name"] . "<br>";
    echo "Gender: " . $_POST["gender"] . "<br>";
    echo "Country: " . $_POST["country"] . "<br>";
    echo "Email: " . $_POST["email"] . "<br>";
    echo "Contact Number: " . $_POST["contact_number"] . "<br>";
    echo "Address: " . $_POST["address"] . "<br>";
    echo "School Name: " . $_POST["school_name"] . "<br>";
    echo "College Name: " . $_POST["college_name"] . "<br>";
    echo "University Name: " . $_POST["university_name"] . "<br>";
    echo "School Dates: " . $_POST["school_dates"] . "<br>";
    echo "College Dates: " . $_POST["college_dates"] . "<br>";
    echo "University Dates: " . $_POST["university_dates"] . "<br>";
    echo "Summary: " . $_POST["summary"] . "<br>";

    ?>
</body>

</html>
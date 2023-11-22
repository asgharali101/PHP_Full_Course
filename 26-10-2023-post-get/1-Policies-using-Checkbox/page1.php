<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox Assignment</title>
</head>

<body>
    <h1>Checkbox Assignment</h1>
    <form action="page2.php" method="GET">
        <label><input type="checkbox" name="stipend" id="stipend"> Stipend</label><br>
        <label><input type="checkbox" name="discipline" id="discipline"> Discipline</label><br>
        <label><input type="checkbox" name="attendance" id="attendance"> Attendance</label><br>
        <label><input type="checkbox" name="assignment" id="assignment"> Assignment</label><br>

        <input type="hidden" name="message" id="message">
        <label><input type="checkbox" name="agree" id="agree"> Agree</label><br>

        <input type="submit" value="Submit">
    </form>


</body>

</html>
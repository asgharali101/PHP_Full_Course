<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CV</title>
    <style>
    table {
        border-collapse: collapse;
        width: 60%;
        margin: 20px auto;
    }

    th,
    td {
        border: 1px solid #000;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }
    </style>
</head>

<body>


    <h2>CV</h2>
    <table>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Name</td>
            <td>
                <?php echo $_POST["name"]; ?>
            </td>
        </tr>
        <tr>
            <td>Father's Name</td>
            <td>
                <?php echo $_POST["father_name"]; ?>
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <?php echo $_POST["gender"]; ?>
            </td>
        </tr>
        <tr>
            <td>Country</td>
            <?php
            for ($i = 0; $i < count($_POST['country']); $i++) { ?>
            <td>
                <?php echo $_POST['country'][$i]; ?>
            </td>
            <?php } ?>

        </tr>
        <tr>
            <td>Email</td>
            <td>
                <?php echo $_POST["email"]; ?>
            </td>
        </tr>
        <tr>
            <td>Contact Number</td>
            <td>
                <?php echo $_POST["contact_number"]; ?>
            </td>
        </tr>
        <tr>
            <td>Address</td>
            <td>
                <?php echo $_POST["address"]; ?>
            </td>
        </tr>
        <tr>
            <td>School Name</td>
            <td>
                <?php echo $_POST["school_name"]; ?>
            </td>
        </tr>
        <tr>
            <td>School Start Date</td>
            <td>
                <?php echo $_POST["school_start_date"]; ?>
            </td>
        </tr>
        <tr>
            <td>School End Date</td>
            <td>
                <?php echo $_POST["school_end_date"]; ?>
            </td>
        </tr>
        <tr>
            <td>College Name</td>
            <td>
                <?php echo $_POST["college_name"]; ?>
            </td>
        </tr>
        <tr>
            <td>College Start Date</td>
            <td>
                <?php echo $_POST["college_start_date"]; ?>
            </td>
        </tr>
        <tr>
            <td>College End Date</td>
            <td>
                <?php echo $_POST["college_end_date"]; ?>
            </td>
        </tr>
        <tr>
            <td>University Name</td>
            <td>
                <?php echo $_POST["university_name"]; ?>
            </td>
        </tr>
        <tr>
            <td>University Start Date</td>
            <td>
                <?php echo $_POST["university_start_date"]; ?>
            </td>
        </tr>
        <tr>
            <td>University End Date</td>
            <td>
                <?php echo $_POST["university_end_date"]; ?>
            </td>
        </tr>
        <tr>
            <td>Summary</td>
            <td>
                <?php echo $_POST["summary"]; ?>
            </td>
        </tr>
    </table>


</body>

</html>
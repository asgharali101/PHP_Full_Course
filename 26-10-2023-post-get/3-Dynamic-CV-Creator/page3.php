<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Feedback Form Assignment</title>
    <style>
        form {
            width: 100%;
            display: grid;
            grid-template-columns: 33.3% 33.3% 33.3%;
        }

        .form-container {

            padding-top: 20px;
            width: 100%;
            margin: 0 auto;
            /* This centers the container horizontally */
            text-align: center;
            /* This centers the form content horizontally */
            background-color: #f2f2f2;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .form-label {
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

        .form-table {
            width: 100%;
            margin-top: 80px;
            border-collapse: collapse;
        }

        .table-header,
        .table-data {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        .table-header {
            background-color: #f2f2f2;
        }

        .table-data:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>


</head>


<body>
    <div class="form-container">
        <h1>Professional Information</h1>
        <form action="page4.php" method="POST">

            <div class='form-container'>
                <h2>form2 information</h2>

                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-input" value="<?php echo $_POST['email']; ?>">

                <label for="contact" class="form-label">Contact</label>
                <input type="number" name="contact_number" class="form-input"
                    value="<?php echo $_POST['contact_number']; ?>">

                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" class="form-input" value="<?php echo $_POST['address']; ?>">


            </div>


            <div class='form-container'>
                <h2>New form information</h2>

                <label for="school" class="form-label">School Name:</label>
                <input type="text" id="school" name="school_name" class="form-input" required>

                <label for="college" class="form-label">College Name:</label>
                <input type="text" id="college" name="college_name" class="form-input" required>

                <label for="university" class="form-label">University Name:</label>
                <input type="text" id="university" name="university_name" class="form-input" required>

                <label for="school_dates" class="form-label">School Date Range:</label>
                <input type="text" id="school_start_date" name="school_start_date" class="form-input"
                    placeholder="Start Date" required>
                <input type="text" id="school_end_date" name="school_end_date" class="form-input" placeholder="End Date"
                    required>

                <label for="college_dates" class="form-label">College Date Range:</label>
                <input type="text" id="college_start_date" name="college_start_date" class="form-input"
                    placeholder="Start Date" required>
                <input type="text" id="college_end_date" name="college_end_date" class="form-input"
                    placeholder="End Date" required>

                <label for="university_dates" class="form-label">University Date Range:</label>
                <input type="text" id="university_start_date" name="university_start_date" class="form-input"
                    placeholder="Start Date" required>
                <input type="text" id="university_end_date" name="university_end_date" class="form-input"
                    placeholder="End Date" required>

                <label for="summary" class="form-label">Summary:</label>
                <textarea id="summary" name="summary" class="form-input" required></textarea>

                <input type="submit" value="Next" class="submit-button">

            </div>
            <div class="form-container">
                <h2>page1 information</h2>
                <label class="form-label" for="name">Name</label>
                <input class="form-input" type="text" name="name" value="<?php echo $_POST['name']; ?>">

                <label class="form-label" for="fathername">Father Name:</label>
                <input class="form-input" type="text" name="father_name" value="<?php echo $_POST['father_name']; ?>">


                <label class="form-label" for="gender">Gender</label>
                <input class="form-input" type="  text" name="gender" value="<?php echo $_POST['gender']; ?>">


                <label class="form-label" for="country">Country:</label>
                <?php
                if (isset($_POST['country'])) { ?>

                    <?php
                    for ($i = 0; $i < count($_POST['country']); $i++) { ?>
                        <input class="form-input" type="text" name="country[]" id="country"
                            value="<?php echo $_POST['country'][$i] ?>">
                    <?php } ?>

                <?php } ?>
            </div>



        </form>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Page 3</title>
    <style>
    .custom-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px;
    }

    .custom-table th,
    .custom-table td {
        border: 1px solid #000;
        padding: 10px;
        text-align: center;
    }

    .custom-table th {
        background-color: #007BFF;
        color: #fff;
    }

    .custom-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    </style>
</head>

<body>
    <h1>Page 3</h1>
    <table class="custom-table">
        <thead>
            <tr>

                <th>Names</th>
                <th>gender</th>
                <th>country</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                for ($i = 0; $i < count($_POST['inputnames']); $i++) { ?>
                <td>
                    <?php echo $_POST['inputnames'][$i]; ?>
                </td>


            </tr>
            <?php } ?>

            <tr>

                <td><label>Gender:</label></td>

                <?php for ($i = 0; $i < count($_POST['gender']); $i++) { ?>
                <input type="text" value=" <?php echo $_POST['gender'][$i] ?>">


            </tr>
            <?php } ?>

        </tbody>
    </table>


    <label for="country">Country:</label>
    <?php
    if (isset($_POST['country'])) {

        for ($i = 0; $i < count($_POST['country']); $i++) {
            $country = $_POST['country'][$i];
            ?>
    <input type="text" name="country[]" id="country" value="<?php echo $country ?>">
    <?php

        } ?>

    <?php } ?>







</body>

</html>
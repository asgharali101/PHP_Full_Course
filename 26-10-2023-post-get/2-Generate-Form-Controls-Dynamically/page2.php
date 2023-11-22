<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page2</title>
</head>
<style>
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
    font-weight: 600;
    font-size: 20px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

input[type="text"],
textarea {
    width: 50%;
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


<body>
    <h1>Page 2</h1>
    <form action="page3.php" method="POST">
        <?php
        $no_of_fields = $_POST['no_of_fields'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];


        for ($i = 1; $i <= $no_of_fields; $i++) { ?>

        <tr>
            <td>
                <?php echo "<label for='name' name='labelnames[]'>name. $i</label> " ?>
            </td>

            <td>
                <?php echo "<input type='text' name='inputnames[]'/> " ?>
            </td>


        </tr>

        <?php } ?>

        <tr>
            <td><label>Gender:</label></td>
            <?php if (isset($_POST['gender'])) { ?>

            <?php for ($i = 0; $i < count($_POST['gender']); $i++) { ?>
            <input type="text" name='gender' value="<?php echo $_POST['gender'][$i] ?>">


            <?php } ?>

            <?php } ?>
        </tr>

        <tr>
            <td><label for="country">Country:</label></td>
            <?php if (isset($_POST['country'])) { ?>

            <?php for ($i = 0; $i < count($_POST['country']); $i++) { ?>
            <input type="text" name='country' value="<?php echo $_POST['country'][$i] ?>">


            <?php } ?>

            <?php } ?>
        </tr>

        <button>submit</button>

    </form>



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
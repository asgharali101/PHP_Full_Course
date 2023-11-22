<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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


    <form class="form-container" method="post">


        <label for="inputString">low TO upp && upp to low:</label>
        <input class="form-input" type="text" name="convertstr" id="inputString">
        <input class="submit-button" type="submit" value="convert">





    </form>

    <?php

    $inputString = $_POST['convertstr']; // Your input string
    
    $reversedCaseString = "";

    for ($i = 0; $i < strlen($inputString); $i++) {
        $char = $inputString[$i];

        // Check if the character is uppercase by comparing it to its lowercase version
        if ($char === strtoupper($char)) {
            $reversedCaseString .= strtolower($char); // Convert uppercase to lowercase
        } else {
            $reversedCaseString .= strtoupper($char); // Convert lowercase to uppercase
        }
    }

    echo "Original String: $inputString<br>";
    echo "Reversed Case String: $reversedCaseString" . '<br> <br>';




    ?>

</body>

</html>
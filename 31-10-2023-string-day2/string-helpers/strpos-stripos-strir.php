<!DOCTYPE html>
<html>

<head>
    <title>String Position Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            display: block;
            margin-bottom: 10px;
        }

        .form-input {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-submit {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 15px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="post" action="">
            <label class="form-label" for="stringInput">Enter a string:</label>
            <input class="form-input" type="text" name="stringInput" id="stringInput" required><br>

            <label class="form-label" for="searchPosition">Search for position:</label>
            <input class="form-input" type="text" name="searchPosition" id="searchPosition" required><br>

            <input class="form-submit" type="submit" value="Search" name="searchButton">
        </form>

        <?php
        if (isset($_POST['searchButton'])) {
            $string = $_POST["stringInput"];
            $position = $_POST["searchPosition"];

            $result = strpos($string, $position);

            echo "The position of '$position' in the string is $result.";
        }
        ?>
    </div>
</body>

</html>
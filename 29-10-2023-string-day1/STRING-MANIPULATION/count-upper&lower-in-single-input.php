<!DOCTYPE html>
<html>

<head>
    <title>Count Capital and Lowercase Letters</title>
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
            width: 98%;
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

        .result-table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .result-table th,
        .result-table td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ccc;
        }

        .result-table th {
            background-color: #007BFF;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="post" action="">
            <label class="form-label" for="input1">Enter the input string:</label>
            <input class="form-input" type="text" name="input1" id="input1" required><br>

            <input class="form-submit" type="submit" value="Count" name="count">
        </form>

        <?php
        if (isset($_POST['count'])) {
            $string1 = $_POST["input1"];

            $countCapital = 0;
            $countLowercase = 0;

            for ($i = 0; $i < strlen($string1); $i++) {
                $char = $string1[$i];
                if ($char >= 'A' && $char <= 'Z') {
                    $countCapital++;
                } elseif ($char >= 'a' && $char <= 'z') {
                    $countLowercase++;
                }
            }

            echo "<h2>Result</h2>";
            echo '<table class="result-table">';
            echo '<tr><th>Type</th><th>Count</th></tr>';
            echo "<tr><td>Uppercase Letters</td><td>$countCapital</td></tr>";
            echo "<tr><td>Lowercase Letters</td><td>$countLowercase</td></tr>";
            echo '</table>';
        }
        ?>
    </div>
</body>

</html>
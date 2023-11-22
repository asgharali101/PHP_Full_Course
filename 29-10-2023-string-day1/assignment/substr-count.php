<!DOCTYPE html>
<html>

<head>
    <title>Substring Count</title>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .container {
        max-width: 490px;
        margin: 0 auto;
        padding: 30px 50px;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-label {
        display: block;
        margin-bottom: 10px;
    }

    .form-input {
        width: 95%;
        padding: 15px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-submit {
        background-color: #007BFF;
        color: #fff;
        border: none;
        padding: 15px 50px;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        font-size: 20px;
        font-weight: 600;
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
        background-color: black;
        color: #fff;
    }

    h2 {
        font-size: 35px;
        ;
    }
    </style>
</head>

<body>
    <div class="container">
        <form method="post" action="">
            <label class="form-label" for="input1">Enter the input string:</label>
            <input class="form-input" type="text" name="input1" id="input1" required><br>

            <label class="form-label" for="input2">Find:</label>
            <input class="form-input" type="text" name="input2" id="input2" required><br>

            <input class="form-submit" type="submit" value="Count" name="count">
        </form>

        <?php
        if (isset($_POST['count'])) {
            $string1 = $_POST["input1"];
            $string2 = $_POST["input2"];
            $count = substr_count($string1, $string2);
            echo "<h2>Result</h2>";
            echo '<table class="result-table">';
            echo $string1;
            echo '<tr><th>Search Term</th><th>Count</th></tr>';
            echo "<tr><td>$string2</td><td>$count</td></tr>";
            echo '</table>';
        }
        ?>
    </div>
</body>

</html>
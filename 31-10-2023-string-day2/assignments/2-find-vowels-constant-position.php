<!DOCTYPE html>
<html>

<head>
    <title>Positions of Vowels</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }

    .title {
        text-align: center;
        color: #007BFF;
    }

    .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-label {
        font-weight: bold;
    }

    .input-field {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .submit-button {
        background-color: #007BFF;
        color: #fff;
        border: none;
        padding: 10px 15px;
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
        padding: 10px;
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
        <h2 class="title">Positions of Vowels</h2>
        <form method="post" action="">
            <label class="form-label" for="textInput">Enter some text:</label>
            <input class="input-field" type="text" name="textInput" id="textInput" required>
            <input class="submit-button" type="submit" name="countButton" value="Count">
        </form>

        <?php
        if (isset($_POST['countButton'])) {
            $inputText = $_POST['textInput'];

            $inputText = strtolower($inputText);

            $vowelPositions = array();

            $vowels = 0;
            $consonants = 0;

            // Loop through each character in the input text
            for ($i = 0; $i < strlen($inputText); $i++) {
                $char = $inputText[$i];

                // Check if the character is a vowel
                if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
                    $vowels++;
                    $vowelPositions[] = "Position of $char = $i";
                } else {
                    $consonants++;
                }
            }
            ?>
        <table class="result-table">
            <tr>
                <th>Result</th>Value</th>
            </tr>
            <tr>
                <td>Total vowels</td>
                <td>
                    <?php echo $vowels; ?>
                </td>
            </tr>
            <tr>
                <td>Total consonants</td>
                <td>
                    <?php echo $consonants; ?>
                </td>
            </tr>
            <?php
                if (!empty($vowelPositions)) {
                    foreach ($vowelPositions as $vowelPosition) {
                        echo '<tr><td>Vowel Position</td><td>' . $vowelPosition . '</td></tr>';
                    }
                }
                ?>
        </table>
        <?php
        }
        ?>
    </div>
</body>

</html>
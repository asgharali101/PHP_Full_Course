<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Character Conversion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        td {
            border: 1px solid #ddd;
            padding: 20px 10px;
            text-align: left;
        }

        th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .original-name,
        .converted-name {}

        .form-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .submit-button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #0056b3;
        }

        .form-label {
            font-size: 24px;
        }
    </style>
</head>

<body>
    <form class="form-container" method="post">
        <label class="form-label" for="convertstr">Enter string</label>
        <input class="form-input" type="text" name="convertstr" id="convertstr">
        <input class="submit-button" type="submit" value="Convert">
    </form>

    <?php
    if (isset($_POST['convertstr'])) {
        $inputString = $_POST['convertstr'];
        $letters = strlen($inputString);
        $words = str_word_count($inputString);
        $spaces1 = trim($inputString);
        $spaces = 0;
        $spaces -= (strlen($spaces1) - strlen($inputString));


    }
    ?>

    <div class="container">
        <h2>Table Design</h2>
        <table>
            <tr>
                <th class="original-name">input string</th>
                <th class="original-name">Total Alphabets</th>
                <th class="converted-name">Total Words</th>
                <th class="converted-name">Total Spaces</th>

            </tr>
            <tbody>
                <tr>
                    <td class="converted-name">
                        <?php echo $inputString; ?>
                    </td>
                    <td class="original-name">
                        <?php echo $letters; ?>
                    </td>
                    <td class="converted-name">
                        <?php echo $words; ?>
                    </td>
                    <td class="converted-name">
                        <?php echo $spaces; ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>
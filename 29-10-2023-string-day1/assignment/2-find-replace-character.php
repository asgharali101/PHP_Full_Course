<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Character Replacement</title>
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

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .original-name,
        .converted-name {
            width: 50%;
        }

        h2 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-left: 10px;

        }

        .label {
            font-weight: bold;
            margin-top: 60px;
        }

        .input {
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 98%;
            height: 20vh;

        }

        .input-short {
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        ::placeholder {
            font-size: 30px;
        }


        input[type="text"]:focus::placeholder {
            font-size: 30px;
            /* Increase the font size when focused */
        }
    </style>
</head>


<body>
    <div class="container">
        <h2>Character Replacement</h2>
        <form action="" method="post">
            <div style="display:flex; justify-items: center;align-items: center;">

                <label for="findChar">Find:</label>
                <input class="input-short" type="text" name="findChar">

                <label for="replaceChar">Replace:</label>
                <input class="input-short" type="text" name="replaceChar">

            </div>

            <label class="label" for="word">Word:</label>
            <input class="input" type="text" name="word" placeholder="write your word"><br>

            <input type="submit" name="replace" value="Replace">
        </form>

        <?php
        if (isset($_POST['replace'])) {
            $findChar = $_POST["findChar"];
            $replaceChar = $_POST["replaceChar"];
            $word = $_POST["word"];

            $newWord = str_replace($findChar, $replaceChar, $word);
            ?>
            <div>
                <h2>Table Design</h2>
                <table>
                    <tr>
                        <th class="original-name">Original name</th>
                        <th class="converted-name">Converted name</th>
                    </tr>
                    <tbody>
                        <tr>
                            <td class="original-name">
                                <?php echo $word; ?>
                            </td>
                            <td class="converted-name">
                                <?php echo $newWord; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php } ?>
    </div>
</body>

</html>
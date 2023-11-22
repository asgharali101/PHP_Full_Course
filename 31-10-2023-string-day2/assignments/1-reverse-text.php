<!DOCTYPE html>
<html>

<head>
    <title>Reverse Text</title>
</head>

<body>
    <h2>Reverse Text</h2>
    <form method="post" action="">
        <label for="textInput">Enter some text:</label>
        <input type="text" name="textInput" id="textInput" required>
        <input type="submit" name="reverseButton" value="Reverse">
    </form>

    <?php
    if (isset($_POST['reverseButton'])) {
        $inputText = $_POST['textInput'];

        // Initialize an empty string to store the reversed text
        $reversedText = '';

        // Loop through the input text in reverse order and build the reversed text
        for ($i = strlen($inputText) - 1; $i >= 0; $i--) {
            $reversedText .= $inputText[$i];
        }

        // Display the reversed text
        echo "<strong>Reversed Text:</strong> $reversedText";
    }
    ?>
</body>

</html>
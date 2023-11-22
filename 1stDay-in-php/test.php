<?php

// example 1

// echo '<h1>Table of Two</h1>';

// for ($i = 1; $i <= 10; $i++) {
//     // $multiplication = $i * 2;
    
//     // echo "<h3>2 x $i = $multiplication </h3>";
//     echo "<h3>2 x $i = " . $i * 2;
// }


// Example
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
</head>
<body>
    
    <table>
        <thead>
            <tr>
                <th>Table</th>
                <th>Number</th>
                <th>Result</th>
            </tr>
        </thead>

        <tbody>
            <?php
            for ($i = 1; $i <= 10; $i++) {
            ?>
            <tr>
                <td>2</td>
                <td><?php echo $i ?></td>
                <td><?php echo $i * 2 ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
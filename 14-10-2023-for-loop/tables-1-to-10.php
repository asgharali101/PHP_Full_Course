<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tables</title>

</head>

<body>
    <?php
    //!st Assignment
    echo '<h2>Tables 1 to 10 </h2>';
    ?>

    <table border='2' style="width:100%">
        <thead>
            <tr>
                <th style='background-color:black;color:white;font-size:20px;'>Table 1</th>
                <th style='background-color:black;color:white;font-size:20px;'>Table 2</th>
                <th style='background-color:black;color:white;font-size:20px;'>Table 3</th>
                <th style='background-color:black;color:white;font-size:20px;'>Table 4</th>
                <th style='background-color:black;color:white;font-size:20px;'>Table 5</th>
                <th style='background-color:black;color:white;font-size:20px;'>Table 6</th>
                <th style='background-color:black;color:white;font-size:20px;'>Table 7</th>
                <th style='background-color:black;color:white;font-size:20px;'>Table 8</th>
                <th style='background-color:black;color:white;font-size:20px;'>Table 9</th>
                <th style='background-color:black;color:white;font-size:20px;'>Table 10</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $number = 1;
            $total = 0;

            for (; $number <= 10; $number++) {
                ?>

            <tr>
                <td style='text-align:center; color:black;background-color:yellow;'>
                    <?php echo '1 x ' . $number . '=' . (1 * $number) ?>
                </td>
                <td style='text-align:center; color:black;background-color:yellow;'>
                    <?php echo '2 x ' . $number . '= ' . (2 * $number) ?>
                </td>
                <td style='text-align:center; color:black;background-color:yellow;'>
                    <?php echo '3 x ' . $number . '= ' . (3 * $number) ?>
                </td>
                <td style='text-align:center; color:black;background-color:yellow;'>
                    <?php echo '4 x ' . $number . ' = ' . (4 * $number) ?>
                </td>
                <td style='text-align:center; color:black;background-color:yellow;'>
                    <?php echo '5 x ' . $number . ' = ' . (5 * $number) ?>
                </td>
                <td style='text-align:center; color:black;background-color:yellow;'>
                    <?php echo '6 x ' . $number . ' = ' . (6 * $number) ?>
                </td>
                <td style='text-align:center; color:black;background-color:yellow;'>
                    <?php echo '7 x ' . $number . ' = ' . (7 * $number) ?>
                </td>
                <td style='text-align:center; color:black;background-color:yellow;'>
                    <?php echo '8 x ' . $number . ' = ' . (8 * $number) ?>
                </td>
                <td style='text-align:center; color:black;background-color:yellow;'>
                    <?php echo '9 x ' . $number . ' = ' . (9 * $number) ?>
                </td>
                <td style='text-align:center; color:black;background-color:yellow;'>
                    <?php echo '10 x ' . $number . ' = ' . (10 * $number) ?>
                </td>


            </tr>

            <?php echo $total ?>


            <?php } ?>
        </tbody>

    </table>








    <?php ///////////////////////////////////////// 2nd assignment?>




    <h2 style='text-align:center;'>Tables 1 to 10 </h2>

    <table border='1' style='width:50%;margin:auto; margin-bottom:200px'>
        <thead>
            <th style='background-color:black;color:white;font-size:20px;'>x</th>
            <th style='background-color:black;color:white;font-size:20px;'>1</th>
            <th style='background-color:black;color:white;font-size:20px;'>2</th>
            <th style='background-color:black;color:white;font-size:20px;'>3</th>
            <th style='background-color:black;color:white;font-size:20px;'>4</th>
            <th style='background-color:black;color:white;font-size:20px;'>5</th>
            <th style='background-color:black;color:white;font-size:20px;'>6</th>
            <th style='background-color:black;color:white;font-size:20px;'>7</th>
            <th style='background-color:black;color:white;font-size:20px;'>8</th>
            <th style='background-color:black;color:white;font-size:20px;'>9</th>
            <th style='background-color:black;color:white;font-size:20px;'>10</th>
        </thead>
        <tbody>
            <?php
            $number = 1;

            for (; $number <= 10; $number++) {
                ?>
            <tr>
                <td style='background-color:black;color:white;font-size:17px; text-align:center'>
                    <?php echo 1 * $number ?>
                </td>
                <td style='text-align:center;'>
                    <?php echo 2 * $number ?>
                </td>
                <td style='text-align:center;'>
                    <?php echo 3 * $number ?>
                </td>
                <td style='text-align:center;'>
                    <?php echo 1 * $number ?>
                </td>
                <td style='text-align:center;'>
                    <?php echo 4 * $number ?>
                </td>
                <td style='text-align:center;'>
                    <?php echo 5 * $number ?>
                </td>
                <td style='text-align:center;'>
                    <?php echo 6 * $number ?>
                </td>
                <td style='text-align:center;'>
                    <?php echo 7 * $number ?>
                </td>
                <td style='text-align:center;'>
                    <?php echo 8 * $number ?>
                </td>
                <td style='text-align:center;'>
                    <?php echo 9 * $number ?>
                </td>
                <td style='text-align:center;'>
                    <?php echo 10 * $number ?>
                </td>
            </tr>

            <?php } ?>
        </tbody>

    </table>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of tables</title>

</head>

<body>
    <?php
    //!st Assignment
    echo '<h2>Tables 1 to 10 </h2>';
    ?>



    <table border='2' style='width:50%;margin:auto;column-gap:10px'>
        <thead>
            <th style='color:white;background-color:black;padding:10px;margin:20px;'> 2</th>
            <th style='color:white;background-color:black;padding:10px;margin:20px;'> 3</th>
            <th style='color:white;background-color:black;padding:10px;margin:20px;'>4</th>
            <th style='color:white;background-color:black;padding:10px;margin:20px;'>5</th>
            <th style='color:white;background-color:black;padding:10px;margin:20px;'>6</th>
            <th style='color:white;background-color:black;padding:10px;margin:20px;'>7</th>
            <th style='color:white;background-color:black;padding:10px;margin:20px;'>8</th>
            <th style='color:white;background-color:black;padding:10px;margin:20px;'>9</th>
            <th style='color:white;background-color:black;padding:10px;margin:20px;'>10</th>
        </thead>
        <tbody>
            <?php
            $day = 1;
            $total2 = 0;
            $total3 = 0;
            $total4 = 0;
            $total5 = 0;
            $total6 = 0;
            $total7 = 0;
            $total8 = 0;
            $total9 = 0;
            $total10 = 0;
            for (; $day <= 10; $day++) {
                ?>
                <tr>
                    <td style='color:white;background-color:black'>
                        <?php
                        echo 2 * $day . ' ';
                        $total2 += $day * 2;
                        ?>
                    </td>

                    <td style='color:white;background-color:black'>
                        <?php
                        echo 3 * $day;
                        $total3 += $day * 3;
                        ?>
                    </td>

                    <td style='color:white;background-color:black'>
                        <?php
                        echo 4 * $day . ' ';
                        $total4 += $day * 4;
                        ?>
                    </td>

                    <td style='color:white;background-color:black'>
                        <?php
                        echo 5 * $day;
                        $total5 += $day * 5;
                        ?>
                    </td>

                    <td style='color:white;background-color:black'>
                        <?php
                        echo 6 * $day;
                        $total6 += $day * 6;
                        ?>
                    </td>

                    <td style='color:white;background-color:black'>
                        <?php
                        echo 7 * $day;
                        $total7 += $day * 7;
                        ?>
                    </td>

                    <td style='color:white;background-color:black'>
                        <?php
                        echo 8 * $day;
                        $total8 += $day * 8;
                        ?>
                    </td>

                    <td style='color:white;background-color:black'>
                        <?php
                        echo 9 * $day;
                        $total9 += $day * 9;
                        ?>
                    </td>

                    <td style='color:white;background-color:black'>
                        <?php
                        echo 10 * $day;
                        $total10 += $day * 10;
                        ?>
                    </td>


                </tr>
            <?php } ?>
            <tr>
                <th style='font-size:20px;color:black;background-color:yellow;'>
                    <?php echo $total2; ?>
                </th>

                <th style='font-size:20px;color:black;background-color:yellow;'>
                    <?php echo $total3; ?>
                </th>

                <th style='font-size:20px;color:black;background-color:yellow;'>
                    <?php echo $total4; ?>
                </th>

                <th style='font-size:20px;color:black;background-color:yellow;'>
                    <?php echo $total5; ?>
                </th>

                <th style='font-size:20px;color:black;background-color:yellow;'>
                    <?php echo $total6; ?>
                </th>

                <th style='font-size:20px;color:black;background-color:yellow;'>
                    <?php echo $total7; ?>
                </th>

                <th style='font-size:20px;color:black;background-color:yellow;'>
                    <?php echo $total8; ?>
                </th>

                <th style='font-size:20px;color:black;background-color:yellow;'>
                    <?php echo $total9; ?>
                </th>

                <th style='font-size:20px;color:black;background-color:yellow;'>
                    <?php echo $total10; ?>
                </th>



            </tr>

        </tbody>

    </table>



    <?php
    /*$sum = 0;

   
    for ($number = 1; $number <= 20; $number++) {
        if ($number % 2 == 0) {
            echo ($sum + $number) . '<br>';
        }
    }
    echo 'the total is' . $sum;*/


    $total1 = 0;
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 === 0) {
            echo $i . '<br> ';
            $total1 += $i;
        }
    }
    echo 'the total is :' . $total1 . '<br> <br> <br>';





    //2nd the table of 3
    

    $total2 = 0;
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 === 1) {
            echo $i . ' <br>';
            $total2 += $i;
        }
    }
    echo 'the total is: ' . $total2 . '<br> <br> <br>';






    //2nd the table of 2 without if satement
    



    $sum = 0;
    for ($i = 1; $i <= 10; $i++) {
        echo 3 * $i . '<br> ';
        $sum += $i;
    }

    echo 'the the total is: ' . $sum;


    ?>





</body>

</html>
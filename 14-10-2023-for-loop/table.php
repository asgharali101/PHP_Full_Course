<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tables</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
</head>
<body>

<table>
                <tr>
                    <td></td>
                    <td></td>
 </tr>
</table>

               <?php
                echo '<h2>1st Table</h2>';
                ?>
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
            $number=1;
            $table=5;
            for(;$number<=10;$number++){
                ?>
                <tr>
                    <td><?php echo $table ?></td>
                    <td><?php echo $number ?></td>
                    <td><?php echo $table*$number ?></td>
                </tr>
           <?php }
            ?>
</table>



                <?php
                echo '<h2>2nd Table</h2> <br>';
                ?>
                <table>
               
                    <thead>
                        <tr>
                            <th>table</th>
                            <th>number</th>
                            <th>Result</th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php

                            $table2=2;
                            $number2=1;

                            for(;$number2<=10;$number2++){
                                
                            ?>
                            <tr>
                                <td><?php echo $table2;  ?></td>
                                <td><?php echo $number2; ?></td>
                                <td><?php echo $table2*$number2;?></td>

                            </tr>
                           <?php }?>
                            
                        </tbody>
                </table>


</body>
</html>


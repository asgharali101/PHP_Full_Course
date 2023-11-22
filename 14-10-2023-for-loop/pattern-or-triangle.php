<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>triangle</title>

</head>

<body>
    <?php
    for ($i = 'A'; $i <= 'E'; $i++) {
        for ($j = 'A'; $j <= $i; $j++) {
            echo $j;
        }
        echo '<br>';
    }
    echo '<br>';
    echo '<br>';






    echo '<h2>12</h2>';
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i - $j;

        }
        echo '<br>';
    }
    echo '<br>';
    echo '<br>';







    echo '<h2>13</h2>';
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i += $j;

        }
        echo '<br>';
    }
    echo '<br>';
    echo '<br>';





    echo '<h2>14</h2>';
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i * $j;

        }
        echo '<br>';
    }

    echo '<br>';
    echo '<br>';
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i - 1;
        }
        echo '<br>';
    }


    echo '<h4>reverseable the number</h4>';
    for ($i = 10; $i >= 1; $i--) {
        echo $i . '<br>';
    }
    echo '<br>';
    echo '<br>';
    echo '<br>';





    //  examplas
    echo '<h3>1</h3>';

    //1st row
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . ' ';
        }


        echo '<br>';
    }





    echo '<br>';
    echo '<br>';
    echo '<br>';




    //2nd row
    echo '<h3>2</h3>';

    for ($i = 1; $i <= 5; $i++) {
        for ($j = $i; $j <= 5; $j++) {
            echo 2 * $j . ' ';
        }


        echo '<br>';
    }

    echo '<br>';
    echo '<br>';
    echo '<br>';





    //3rd row
    echo '<h3>3</h3>';

    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo 2 * $j . ' ';
        }


        echo '<br>';
    }

    echo '<br>';
    echo '<br>';
    echo '<br>';






    //// echo '<h3>5</h3>';
    

    echo '<h3>5</h3>';


    for ($i = 1; $i <= $j; $i++) {
        for ($j = $i; $j <= 05; $j++) {
            echo $j . ' ';
        }

        echo '<br>';
    }






    ////// echo '<h3>6</h3>';
    
    echo '<h3>6</h3>';

    for ($i = 1; $i <= 5; $i++) {
        for ($j = $i; $j <= 5; $j++) {
            echo $j;
        }
        echo '<br>';
    }








    ////// echo '<h3>7</h3>';
    
    echo '<h3>7</h3>';
    for ($i = 1; $i <= 05; $i++) {
        for ($j = $i; $j <= 5; $j++) {
            echo $j;
        }
        echo '<br>';
    }




    for ($i = 5; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . ' ';
        }
        echo '<br>';
    }




    ///using name and make awesome square
    
    echo '<h3>8</h3>';
    $name = 'Asghar';
    $count = strlen($name);

    for ($i = 0; $i <= 6; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo $name[$j];
        }
        echo '<br>';
    }



    ///using name reverseable 
    
    echo '<h3>9</h3>';
    $name1 = 'asghar';
    $count1 = strlen($name1);

    for ($i = 0; $i <= $count1; $i++) {
        for ($c = $i; $c < $count1; $c++) {
            echo $name1[$c];
        }
        echo '<br>';
    }





    //echo '<h3>10</h3>';
    echo '<h3>10</h3>';

    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo '<br>';
    }


    echo '<br>';
    echo '<br>';
    echo '<br>';




    //echo '<h3>11</h3>';
    echo '<h3>11</h3>';

    for ($i = 1; $i <= 10; $i++) {
        for ($j = $i; $j <= 10; $j++) {
            echo $j;
        }
        echo '<br>';
    }



    echo '<h2>all table with loop</h2>';


    for ($i = 2; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            echo ' ' . ($i * $j) . ' ';
        }

        echo '<br>';
    }


    for ($i = 1; $i <= 10; $i++) {
        for ($j = $i; $j <= 10; $j++) {
            echo $j - 1;
        }
        echo '<br>';
    }

    ?>


</body>

</html>
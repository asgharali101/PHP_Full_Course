<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list </title>


</head>

<body>


    <h2>Disorder || order</h2>




    <?php
    //1------------
    
    $type = 'order';
    if ($type === 'disorder') {
        echo '<ul>';
        for ($i = 'a'; $i < 'z'; $i++) {
            echo '<li>' . $i . '</li>';
        }
        echo '</ul>';

    } elseif ($type === 'order') {
        echo '<ol>';
        for ($i = 'a'; $i < 'z'; $i++) {
            echo '<li>' . $i . '</li>';
        }
        echo '</ol>';
    }
    echo '<br>';
    echo '<br>';
    ?>









    <h2>Disc || square || circle</h2>



    <?php


    $type_1 = 'circle';

    if ($type_1 === 'square') {

        for ($i = 'a'; $i < 'z'; $i++) {
            echo "&#9632; $i" . '<br>';

        }

    } elseif ($type_1 === 'disc') {

        for ($i = 1; $i <= 30; $i++) {
            echo "&#9679; $i" . '<br>';
        }



    } elseif ($type_1 === 'circle') {
        for ($i = 1; $i <= 30; $i++) {
            echo "&#9711; $i" . '<br>';

        }
    } else {
        echo 'you put  unvalid type';
    }
    ?>









    <?php
    $type_2 = 'circle';
    if ($type_2 === 'circle') {
        // for ($i = 1; $i <= 20; $i++) {
        echo "<ul>  </ul>";
        //}
    
        ?>

        <ul>

            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
        </ul>

    <?php } ?>



</body>

</html>
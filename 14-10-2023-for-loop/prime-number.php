<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prime number</title>
</head>

<body>
    <?php
    /* for ($i = 2; $i <= 100; $i++) {
         $isprime = true;

         for ($j = 2; $j < $i; $j++) {
             if ($i % $j === 0) {
                 $isprime = false;
                 break;
             }
         }


         if ($isprime) {
             echo $i . 'is prime number' . PHP_EOL;
         }
     }*/



    for ($i = 2; $i <= 100; $i++) {
        $isprime1 = true;

        for ($j = 2; $j < $i; $j++) {
            if ($i % $j === 0) {
                $isprime1 = false;
                break;
            }

        }

        if ($isprime1) {
            echo $i . 'is prime number';
        }
    }

    /*$total = 0;
    for ($i = 1; $i <= 10; $i++) {
        echo $i * 3;
        $total += $i * 3;
    }

    echo 'the total is' . $total;*/





    ?>
</body>

</html>
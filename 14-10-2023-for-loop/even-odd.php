<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even and Odd Numbers</title>
</head>
<body>
<?php

        //1:even numbers
               echo '<h2>Even Numbers</h2>';

            
            for($number=2;$number<=50;$number+=2){
               // if($number%2 ===0){
                    echo $number.' is even number <br>';
                // }else{
                    // echo $number.' is not even number <br>';
                // }
            }



            // odd numbers

            echo'<h2>Odd numbers</h2>';
            
            for($counter=1;$counter<=30;$counter+=2){
                if($counter%2 !==0 ){
                    echo $counter.'  is odd number <br>';
                }else{
                    echo $counter .'  is not odd number <br>';
                }
            }


            //bizz and buzz game

            echo '<h2>Play game</h2>';


            // 3 and 5 fizz and buzz game
            echo '<h4>Fizz buz &&fizzbuzz game of 3&5 tables </h4><br>';
            for($number1=1;$number1<=50;$number1++){
                if($number1%3 ===0 && $number1%5 ===0){
                    echo $number1. 'Fizzbuzz <br>';
                }elseif($number1%3 === 0){
                    echo $number1. 'fizz <br>';
                }elseif($number1%5 ===0){
                    echo $number1 . 'Buzz <br>';
                }
                }


                //jim and john game 

                echo '<h4>jim--5 and john---6 game </h4 >';
                for($number2=1; $number2<=120; $number2++ ){
                    if($number2%5 === 0 && $number2%6 ===0){
                        echo $number2 .'Jim&john <br>';
                    }elseif($number2%5 ===0){
                        echo $number2 . 'jim <br>';
                    }elseif($number2%6===0){
                        echo $number2 .'John <br>';
                    }
                }
                
            





            //Intergers 
            echo '<h2>integers</h2>';

            for($integers=-30; $integers<=22;$integers++){
                if($integers%2 ===1){
                    echo $integers. 'odd <br>';
                }elseif($integers%2 ===0 ){
                    echo $integers . 'positive <br>';
                }else{
                    echo $integers . 'negative <br>';
                }
            }



?>


<h2>asghAR </h2>
</body>
</html>

xml_error_string
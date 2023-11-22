<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

//we get result through marks
 $english=30;
 $math=50;
 $physics=65;
 $sindhi=44;
 $biology=60;


$total=($english+$math+$physics+$sindhi+$biology);

echo'Total:'. $total;
echo '<br>';



$persentage=$total/500*100;
echo "persentage".$persentage;
echo '<br>';


if($total>360 && $total<=370){
    echo'GRADE:A';
  
}
elseif ($total>340 && $total<360){
    echo 'Grade:B';
}
elseif($total>320 && $total<340){
    echo "Grade:C";
}
elseif ($total>=300 && $total<320){ //diffferne 
    echo "Grade:D";
}
elseif($total>=280 && $total<300){
    echo "Grade:E";
}elseif($total>=260 && 280 ){
    echo "Pass";
}else{
    echo"fail";
}
echo '<br>';

echo '<h1>Assign-2</h1> <br />';


$che=30;
$science=80;
$zoology=50;
$microbio=40;

$total1=($che+$science+$zoology+$microbio);
echo "Total marks".$total1;

echo'<br>';

$persentage1=($total1/400)*100;
echo 'persentage'.$persentage1."%";
echo '<br>';



if($persentage1>=80 && $persentage1<90){
    echo "Grade:A",'<br>';
}elseif($persentage1>=70 && $persentage1<80){
    echo"Grade:B",'<br>';

}elseif($persentage1>=60 && $persentage1<70){
    echo "Grade:C",'<br>';
}elseif($persentage1>=50 && $persentage1<60){
    echo "Grade:D",'<br>';
}elseif($persentage1>=40 && $persentage1<50){
    echo "Pass",'<br>';
}else{
    echo 'Fail','<br>';
}

$prac=(500+100)*100;
echo 'prac'.$prac;

    
echo"<br>";





 //exchange values


 $A=10;
 $B=20;

 $new=$A;
  $A=$B;
  $B=$new;

  echo 'change'. $A;


echo "<h2>asghar<h2>";  





             //main points for noted

             //var_dump
$asghar=50;
$asghar1='ali';

var_dump($asghar1.$asghar);
echo"<br>";
echo"<br>";






             //1:Arthamatic operators   Q

             $a1=3;
             $b2=4;
             $c3=5;

             echo $c3+$b2+$a1/$a1;echo"<br>"; //Arthamatic her ek ekdosrai sai 
            // arthamatic hoga 

            //Exp
            $vars=$b2-$c3+$a1%$a1;// if we put all of these here old $var1 found error here
            echo "arthamatic-exp:".$vars;
            echo'<br>';




            //Assignment operators

            $a=2;
            $b=4;
            $c=5;

            // echo 'vara'.$a+=$b+$c+$b;
            // echo"<br>";  //Assignment means sab $var 
             //kisi new yaa or kisi old var kai assign krnaaaa 

             //Exp:--
             //$b += $c;
             //$c+=$b**$a;
            // $a/=$b;
             $a+=$c-$b;
             echo 'Assignment-exp:'.$a;
             echo '<br>';






             




             //Data types   

             $number=30 ;  //number
             $string='asghar' ; //string
             $boolen=false; //boolen
             $float=8.88;  //float
             $array=['asghar',$number,$string];
             $array1=['hello',30,'css'];
           /*  $object={
                name:'Ali',
                fname:'as',
            };
                echo $array[1];
                echo "<br>";
                var_dump($array);*/





                //const


                define('asghar',90);
                define('name','asghar');
                define('score','red');


                $sum=asghar+$array[1];

                echo $sum;
                


             

?>


<h2>asghAR </h2>
</body>
</html>


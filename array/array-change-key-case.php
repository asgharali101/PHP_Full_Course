<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>array change key case</title>
</head>

<body>
  <h2 style="color:yellow; background-color: black;padding:20px 0px;text-align: center;margin:0px;">Change key Case</h2>
  <?php
  $student = [
    "name" => "Arshad Ali",
    "class" => "intermediate",
    "school" => "GBDCS",

  ];
  $key_case = array_change_key_case($student, CASE_UPPER);


  echo "<[re>";
  print_r($key_case);
  echo "</pre>";
  foreach ($key_case as $key => $value) {
    echo $key . "==" . $value . "<br>";
  }


  for ($i = 2; $i <= 100; $i++) {
    $isprime = true;
    for ($j = 2; $j < $i; $j++) {
      if ($i % $j == 0) {
        $isprime = false;
        break;
      }
    }
    if ($isprime) {
      echo "$i is prime number <br>";
    }
  };




  ?>
</body>

</html>
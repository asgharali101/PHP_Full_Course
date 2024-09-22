<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array Flip</title>
</head>

<body>
  <h2 style="color:yellow;font-size: 35px; background-color: black;padding:20px 0px;text-align: center;margin:0px;">Array Flip <br> <span style="font-size:17px;color: white;"> key=value ---- value=key
      // its mean key flip into value and value flip into key</span></h2>

  <?php
  // key=value change into value=key
  // its mean key flip into value and value flip into key
  $name = [
    "Asghar" => 90,
    "Ahmed" => 80,
    "kaif" => 85,
    "Subhan" => 75,
  ];
  $products = ["Fogg", "Bold", "Al-utar", "Open"];

  $change = array_flip($name);

  print_r($change);
  echo "<br>";
  foreach ($change as $key => $product) {
    echo $key . "=" . $product . "<br>";
  }
  ?>
</body>

</html>
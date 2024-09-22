<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array Chunk</title>
</head>

<body>
  <h2 style="color:yellow; background-color: black;padding:20px 0px;text-align: center;margin:0px;">Array Chunk</h2>
  <?php

  $products = [
    "Oppo" => 40000,
    "Xiaomi" => 30000,
    "Redmi" => 22000,
    "Vivo" => 20000,
  ];

  $array_chunk = array_chunk($products, 3,);

  foreach ($array_chunk as $value) {
    echo $value . "<br>";
  }

  ?>
</body>

</html>
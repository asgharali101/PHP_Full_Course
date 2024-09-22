<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>array column</title>
</head>

<body>
  <h2 style="color:yellow; background-color: black;padding:20px 0px;text-align: center;margin:0px;">Change Column</h2>
  <?php
  $student = [
    "Arshad" => [
      "name" => "Arshad Ali",
      "collification" => "gradution",
      "school" => "GBDCS",
    ],
    "Asghar" => [
      "name" => "Asghar Ali",
      "collification" => "intermediate",
      "school" => "GBDCS",
    ]

  ];

  $products = [
    "mobile_in_2023" => [
      "Oppo" => 37000,
      "Xiaomi" => 25000,
    ],
    "mobile_in_2024" => [
      "Oppo" => 40000,
      "Xiaomi" => 30000,
    ]
  ];

  $join = array_column($products, "Oppo");

  // echo $join;

  foreach ($join as $value) {
    echo $value . "<br>";
  }


  ?>
</body>

</html>
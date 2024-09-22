<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array count</title>
</head>

<body>
  <h2 style="color:yellow; background-color: black;padding:20px 0px;text-align: center;margin:0px;">Array count</h2>
  <?php
  $student = [
    "Asghar",
    "Ahmed",
    "Faraz",
    "Ali",
    "Gul",
    "Asghar",
    "Ali",
    "Faraz",
    "Asghar",
    "Asghar",
    "Asghar",
    "Asghar",
    "Asghar",
    "Asghar",

  ];

  $count_array = array_count_values($student);
  foreach ($count_array as $key => $value) {
    echo $key . $value;
  }
  ?>
</body>

</html>
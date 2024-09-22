<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array Combine</title>
</head>

<body>
  <h2 style="color:yellow; background-color: black;padding:20px 0px;text-align: center;margin:0px;">Array Combine</h2>
  <?php
  // array_combine= means keep first array in KEY & 2nd for $value
  // array_combine(key,value)
  $products = [
    "Oppo",
    "Xiaomi",
    "Redmi",
    "Vivo",
  ];
  $price = [50000, 40000, 35000, 30000,];

  $array_chunk = array_combine($products, $price,);

  foreach ($array_chunk as $value) {
    echo $value . "<br>";
  }

  ?>


  <!-- large example in html format -->
  <?php
  $name = ["Name", "Age", "City"];
  $detail = ["Asghar", 18, "Sehwan"];

  $data = array_combine($name, $detail);
  ?>
  <table border="6" style="width: 50%; justify-content: center;text-align: center;">
    <thead>
      <tr>
        <?php
        foreach ($data as $key => $value) { ?>
          <th><?php echo $key; ?></th>
        <?php } ?>
        ?>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php
        foreach ($data as $value) { ?>
          <td><?php echo $value ?></td>
        <?php } ?>
        ?>
      </tr>
    </tbody>
  </table>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar 0f 2023</title>
</head>
<body>
    
    <h2>Best Calendar of sep2023</h2>
  
    <?php  
        for($day = 1; $day <=30; $day++){
    ?>
            <span style="padding: 30px; width: 10px; background: blue; margin: 5px; color: white; display: inline-block">
                <?= $day ?>
            </span>

            <?php if ($day%7 === 0) { ?>
                <br />
            <?php } ?>
    <?php
        }
    ?>

</body>
</html>


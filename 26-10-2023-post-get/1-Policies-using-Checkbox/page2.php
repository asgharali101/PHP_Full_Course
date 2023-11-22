<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>

<body>
    <h1>Result</h1>


    <form action="" method="GET">
        <?php echo $_GET['message'] ?>
    </form>

    <?php
    $asghar = "asghar";
    echo $asghar;
    $count = 0;

    if (isset($_GET['stipend'])) {
        $count += 1;
    }

    if (isset($_GET['discipline'])) {
        $count += 1;
    }

    if (isset($_GET['attendance'])) {
        $count += 1;
    }

    if (isset($_GET['assignment'])) {
        $count += 1;
    }

    if ($count <= 3 && isset($_GET['agree'])) {
        echo $_GET['message'] = 'You are selected';
    } else {
        echo $_GET['message'] = 'Fail';
    }
    ?>
</body>

</html>
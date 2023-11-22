<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_post</title>
</head>

<body>
    <?php
    /*$page = $_get['page'];
    $search_term = $_get['search'];
    $pages = 10;


    echo '<h3>searching for <h3>' . $search_term . '<br>';
    echo '<h3>page number <h3>' . $page . '<br>';

*/


    $page = $_GET['page'];
    $search_term = $_GET['search'];
    $pages = 10;

    echo '<h3>Searching for: ' . $search_term . '</h3>';
    echo '<h3>Page number: ' . $page . '</h3>';

    // Generate links for pages 1 to 10
    for ($i = 1; $i <= $pages; $i++) {
        echo "<a href='?page=$i&search=$search_term'>$i</a> ";
    }

    ?>

    <form action="" method="post"></form>
</body>

</html>
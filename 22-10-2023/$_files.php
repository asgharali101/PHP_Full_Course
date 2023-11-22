<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>$_FILES Assignment</title>


</head>


<body>
    <?php
    if (isset($_FILES['image'])) {
        // echo '<pre>';
        $fileName = $_FILES['image']['name'];
        $filePath = $_FILES['image']['full_path'];
        $fileSize = $_FILES['image']['size'];
        $fileTmp = $_FILES['image']['tmp_name'];
        $fileType = $_FILES['image']['type'];

        if (move_uploaded_file($fileTmp, 'upload-images/' . $fileName)) {
            echo 'file successfully uploaded';
        } else {
            echo 'error file could not upload';
        }
        //print_r($_FILES);
        //echo '</pre>';
    }


    ?>

    <div class="center-container">
        <form style="margin: 40px 0;" action="" method="POST" enctype="multipart/form-data">
            <input type="text" placeholder="Enter your name" name="name">
            <input type="file" name="image">
            <input type="submit">
        </form>
    </div>

    <?php
    echo "file name is <u><b>$fileName</b></u> <br>";
    echo "file path is <u><b>$filePath</b></u> <br>";
    echo "file type is <u><b>$fileType</b></u> <br>";
    echo "file tmp name is <u><b>$fileTmp </b></u><br>";
    echo "file size is <u><b>$fileSize</b></u> <br>";

    ?>


</body>

</html>
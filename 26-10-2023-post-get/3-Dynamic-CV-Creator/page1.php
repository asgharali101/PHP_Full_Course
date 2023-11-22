<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>1page</title>

    <style>
    .form-container {
        max-width: 300px;
        margin: 0 auto;
    }

    .form-input {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .submit-button {
        background-color: #007BFF;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .submit-button:hover {
        background-color: #0056b3;
    }
    </style>

</head>


<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>1page</title>
        <!-- Include Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>

        <div class="container">
            <form action="page2.php" method="Post">
                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input class="form-control" type="text" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="father_name">Father Name:</label>
                    <input class="form-control" type="text" id="father_name" name="fathername">
                </div>
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <input type="radio" name="gender" value="Male" class="form-input"> Male
                    <input type="radio" name="gender" value="Female" class="form-input"> Female<br>

                </div>
                <div class="form-group">

                    <label for="country">Select Country:</label>
                    <input type="checkbox" name="country[]" value="USA">USA
                    <input type="checkbox" name="country[]" value="Canada">Canada
                    <input type="checkbox" name="country[]" value="UK">UK
                    <!-- Add more options as needed -->

                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>

        <!-- Include Bootstrap JS and jQuery -->


        </div>
        </main>

    </body>

    </html>




</body>

</html>
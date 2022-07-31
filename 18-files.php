<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Files
        //How to upload files
        //1. Upload it to the root
        //2. Directly to the database
        //enctype="multipart/form-data"
        //specifies how the form data should be encoded
    print_r ($name = $_FILES['file']['name']);
    print_r ($type = $_FILES['file']['type']);
    print_r ($tmp_location = $_FILES['file']['tmp_name']);
    print_r ($error = $_FILES['file']['error']);


    ?>
    <form action="uploadpractise.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">SUBMIT</button>
    </form>
</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        if (isset($_POST)){
            $name = $_POST['name'];
            echo $name.",your form is submitted";
            echo "<br>"; 
            print_r($_POST);
        }     
 ?>
    <form action="14-post.php" method="post">
        <input type="text" name="name">
        <input type="text" name="age">
        <button type="submit">SUBMIT</button>
    </form>

</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_GET['submit'])){
    echo $_GET['name'];
}
?>

    <form action="" method="get">
        <input type="text" name="name">
        <input type="text" name="password">
        <button type="submit" name="submit">SUBMIT</button>
    </form>
</body>
</html>
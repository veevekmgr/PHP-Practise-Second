<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //SESSION   
    //Good to use for sensitive information
    //session exists as long as the browser is open

    session_start();

    //storing information
    $_SESSION["Name"]  = "Veevek";
    $_session["Age"] = 24;

    echo "Hello " . $_SESSION["Name"]."<br>";

    session_destroy();

    echo "Hello " . $_SESSION["Name"];
    
    ?>
</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Cookie
        //Arguments
        //Name
        //Value
        //Expire
        //Path
        //Domain
        //security
        //IF YOU DONT INCLUDE AN EXPIRATION DATE, IT WILL ONLY STORE FOR THE CURRENT SESSION
		$cookie_name = "name";
		$cookie_value = "veevek";
        //$time = time() +(86400 * 30);
        setcookie($cookie_name, $cookie_value );

        PRINT_R($_COOKIE);

        echo "<br>";
        print_r ($_COOKIE[$cookie_name]);

    ?>
</body>
</html>
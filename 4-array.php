<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cars1 = "BMW";
        $cars2 = "Audi";
        $cars3 = "Mercedes";

        $cars = array("BMW","Audi","Mercedes");
        echo $cars[0];

        echo "<br>";
        $myCar = array("Audi", 2015, 75.304);
        var_dump($myCar);
        echo "<br>";
        print_r($myCar);

        $cars2 = array("Volve","Chevy","Volkswagen");

        $cars = array_merge($cars, $cars2);
        echo "<br>";
        print_r($cars);
    ?>
</body>
</html>
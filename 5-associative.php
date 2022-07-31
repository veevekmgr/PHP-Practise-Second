<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
<?php
    $cars = array("Audi" => 50.50,"BMW" => 40.700,"Mercedes" =>60.300);
    var_dump($cars);
    echo "<br>";
    print_r($cars);
    echo "<br>";
    $cars1["Mercedes"] = 60.300;
    echo $cars1["Mercedes"]; 
    echo "<br>";
    foreach($cars as $key => $value){
        echo "My " . $key ." has ". $value. " mileage <br>";
    }
?>
    
</body>
</html>
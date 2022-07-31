<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Multidimensional Array
        //Expensive
        //Audi, Mercedes, BMW

        //Inexpensive
        //Volvo, Ford, Toyota

        $cars = array(
                    "Expensive" => array("Audi", "Mercedes", "BMW"),
                    "Inexpensive" => array(
                                        "around20lakh" => array("Toyota", "iron"),
                                        "around40lakh" => array("Volvo", "Ford")
                                    )
                );
        echo $cars["Inexpensive"]["around40lakh"][0];
    ?>
</body>
</html>
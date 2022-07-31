<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 10;
        $y = 0;

        function myFunction($y){
            $y = 20;
            echo $y;
        }
        myFunction($y);
        
    ?>
</body>
</html>
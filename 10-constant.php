<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Constants
        //Function - define()
        //Keyword - CONST

        //define
        //define(ARGUMENT1, ARGUMENT2);
        //constants are always in uppercase
        //name has same rules as variables
        define("COMPANY_NAME", "Apple" );
        $COMPANY_NAME = "Samsung";

        echo COMPANY_NAME;
        echo $COMPANY_NAME;

        //CONST
        const MY_NAME ="Veevek";
        echo MY_NAME;
    ?>
</body>
</html>
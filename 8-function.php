<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //functions
        //A function is a block of code written in a program to perform some specific task.

        //Two major types of functioms
        //Built-in Function
        //User-Defined Function

        //Why shoulsd we use functions?
        // 1. Reueability
        // 2. Easy for error detection
        // 3. Easily maintained

        //Camel Case
        //Every word after the first one is a capital
        // examples= myFunction();

        //Lower case
        //All lowercase, underscore inbetween
        //my_function();

        //Pascal case
        //Every word is capitalized
        //MYFUNCTION();

        function myFunction(){
            $x = "Hello!";
            echo $x;
            echo "<br>";
        }

        myFunction();
        
         //function with argument/Param
        $num1 = 5;
        $num2 = 5;
       
        //parameter
        function calculator($num1, $num2){
            echo $num1 * $num2;
            echo "<br>";
        }

        //Arguments
        calculator($num1, $num2);

        //function with return value
        //pass by value
        $num3 = 20;
        $num4 = 15;

        function add($num3, $num4){
            $result = $num3 +$num4;
            return $result;
        }

        echo add($num3, $num4);
        echo "<br>";

        function substract($num3, $num4){
            echo $num3 - $num4;
            #return $result;
        }

        //echo "The number is:" . substract($num3, $num4);


        //pass by reference
        $x = 10;
        function addByValue($x){
            $x += 5;
        }

        function addByReference(&$x){
            $x += 10;
        }

        addByValue($x);
        echo "The value is ". $x;
        echo "<br>";
        addByReference($x);
        echo "The value is ". $x;

    ?>
</body>
</html>
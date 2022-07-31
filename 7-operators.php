<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Arithmetic Operators
        // + --- Addition
        // - --- Substraction
        // * --- Multiplication
        // / --- Division
        // % --- Modulo Division


        //Assignment operators
        // += ---- Add and assign
        $x = 5;
        //$x = $x + 5;
        $x += 5;
        echo $x;
        echo "<br>";
        // -= ---- Substract and assign
        $x = 5;
        //$x = $x - 5;
        $x -= 5;
        echo $x;
        echo "<br>";
        // *= ---- Multiply and assign
        $x = 5;
        //$x = $x * 5;
        $x *= 5;
        echo $x;
        echo "<br>";
        // /= ---- Divide and assign
        $x = 5;
        //$x = $x / 5;
        $x /= 5;
        echo $x;
        echo "<br>";
        // .= ---- Concat and assign
        $str = "Dary is an old man";
        $str .= " because he is 70 years old.";
        echo $str;
        echo "<br>";

        //Comparision operators
        // > --- Greater than
        // < --- Smaller than
        // >= --- Greater than or equal to
        // <= --- Smaller than or equal to
        // == or === --- Equal to
        // != --- Not Equal
        /* Spaceship(<=>) - If the value on the left is less than the value on the right, the system will return  -1,
                     - If the value on the left is equal to the value on the right, the system will return  0,
                     - If the value on the left is greater than the value on the right, the system will return  1.*/


        
        //Increment and Decrement
        // ++$x ---- Pre-increment
            $x = 10;
            echo ++$x;
            echo "<br>";
        // $x++ ---- Post-increment
            $x = 10;
            echo $x++;
            echo "<br>";
            echo $x;
            echo "<br>";
        // --$x ---- Pre-decrement
            $x = 10;
            echo --$x;
            echo "<br>";
        // $x-- ---- Post-decrement
            $x = 10;
            echo $x--;
            echo "<br>";
            echo $x;
            echo "<br>";

        //Logical Operators
        // AND or && --- Both X and Y are true
            $x = 5;
            $y = 10;
            if($x == $y and 1 == 1){
                echo "True";
            }else{
                echo "False";
            }
            echo "<br>";
        // Or (||) --- Either X or Y are True
        $x = 5;
        $y = 10;
        if($x == $y or 1 == 1){
            echo "True";
        }else{
            echo "False";
        }
        echo "<br>";
        // XOR --- if Only one can be true, it return true else if both are true it return false
        $x = 10;
        $y = 10;
        if($x == $y xor 1 == 1){
            echo "True";
        }else{
            echo "False";
        }
        echo "<br>";
        // ! --- True if X is not True
        $x = 0;
        $y = 10;
        if(!$x == $y and 1 == 1){
            echo "True";
        }else{
            echo "False";
        }
        echo "<br>";
        // 1 =True - O = False

    ?>
</body>
</html>
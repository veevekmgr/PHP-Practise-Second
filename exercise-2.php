<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    //Assignment -1
        $price = 1000;
        $vat = 0.013;
        function calculateVat($price, $vat){
            $calculatePrice = ($price * $vat) + $price;
            return $calculatePrice;
        }

        echo "Price: ".$price."<br>";
        echo "Vat: ".$vat."<br>";

        echo "Total price: ".calculateVat($price, $vat)."<br>";

    //Assignment -2
        $year = 1999;

        function isLeapYear($year){
            if($year%4 == 0 || $year%100 == 0 || $year%400 == 0){
                return true;
            }else{
                return false;
            }
        }
        if(isLeapYear($year)){
            echo $year." is a Leap year";
        }else{
            echo $year." isnot a Leap year";
        }
        echo "<br>";

        //Assignment -3
        $num1 = 10;
        $num2 = 20;
        function addNumbers($num1, $num2){
            $add = $num1 + $num2;
            echo "Addition of ".$num1." and ".$num2." is ".$add;
            echo "<br>";
        }
        function subtractNumbers($num1, $num2){
            $substract = $num1 - $num2;
            echo "Subtraction of ".$num1." and ".$num2." is ".$substract;
            echo "<br>";
        }
        function multiplyNumbers($num1, $num2){
            echo "Multiplication of ".$num1." and ".$num2." is ".$num1 * $num2;
            echo "<br>";
        }
        function divideNumbers($num1, $num2){
            echo "Division of ".$num1." and ".$num2." is ".$num1 / $num2;
            echo "<br>";
        }

        addNumbers($num1, $num2);
        subtractNumbers($num1, $num2);
        multiplyNumbers($num1, $num2);
        divideNumbers($num1, $num2);

        //Assignment -4
        $num1 = 4;
        $num2 = 8;

        function swapNumbers($num1, $num2){
            $temp = $num1;
            $num1 = $num2;
            $num2 = $temp;

            echo "After swapping num 1 = ".$num1." num 2 = ".$num2;

        }
        swapNumbers($num1, $num2);
        echo "<br>";


        //Assignment -5
        /*$num1 = 11;
        function evenOrNot($num1){
            if($num1%2 ==0){
                return true;
            }else{
                return false;
            }
        }
        if(evenOrNot($num1)){
            echo $num1." is even.<br>";
        }else{
            echo $num1." is odd.<br>";
        }*/

        $num1 = 10;
        function evenOrNot($num1){
            if($num1%2 ==0){
                echo $num1." is even.<br>";
            }else{
                echo $num1." is odd.<br>";
            }
        }
        evenOrNot($num1);


        //Assignment -6
        $num1 = 2;
        function isPrime($num1){
            if($num1 == 1){
                return true;
            }else{
                for($i = 2; $i < $num1/2; $i++){
                    if($num1 % $i ==0){
                        return false;
                    }
                }
                return 1;
            }
        }
        if(isPrime($num1)){
            echo $num1." is Prime number.";
        }else{
            echo $num1." isnot Prime number.";
        }

    ?>
</body>
</html>
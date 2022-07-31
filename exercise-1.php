<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    //Exercise 1
        $x = 3;
        $y = 7;
        $z = ($x + $y) * 5 ;

        echo "The total is $z.";
        echo "<br>";
    
        //Exercise 2;
        $price = 10000;
        $vat = 0.13;
        $totalPrice = ($price * $vat) + $price;

        echo "Price: $price"."<br>"."Vat: $vat"."<br>"."Total Price: $totalPrice";
        echo "<br>";
        
        //Exercise 3
        $x = 4;
        $y = 9;
        $z = 4;

        $average = ($x + $y + $z)/3;

        echo number_format($average, 2, '.',' ');
        echo "<br>";

        //Exercise 4
        $countries = array("Nepal" => "Kathmandu", "Germany" => "Berlin", "Thailand" => "Bangkok", "India" => "New Delhi", "China" => "Beijing");

        foreach($countries as $key => $value){
            echo "The capital of ".$key. " is " .$value.".<br>";
        }

        //Exercise 5
        $cm = 150;
        $inch = 0.39;

        $cmToInch = $cm * $inch;

        echo "{$cm} centimeters is {$cmToInch} inches.<br>";

        //Exercise 6
        $expenses = array(40, 70, 20, 85, 40);
        $totalAmount = NULL;
        $amountOfExpenses = Null;

        foreach($expenses as $expense){
            $totalAmount = $expense + $totalAmount;
            $amountOfExpenses = $amountOfExpenses + 1;
        }
        echo "My ".$amountOfExpenses." biggest expenses were ".$totalAmount.".<br>";

        //Exercise 7


        $weather = array("rain", "sunshine", "clouds", "hail", "sleet", "snow","wind");
        echo "We've seen all kinds of weather this month. At the beginning of the month, we had ".$weather[5]." and ".$weather[6].". Then came ".$weather[1]." with a few ".$weather[2]." and some ".$weather[0].". At least we didn't get any $weather[3] or $weather[4].";  

    ?>
</body>
</html>
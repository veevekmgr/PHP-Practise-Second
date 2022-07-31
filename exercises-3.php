<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Assignment-1 (sorting)
        $numbers = array("Milk" => 30,"Cheese" => 40,"Butter" => 10, "Curd" => 5);

        asort($numbers);

        print_r($numbers);
        echo "<br>";


        $numbers = array(30, 40, 10, 5);

        rsort($numbers);

        print_r($numbers);
        echo "<br>";

    //Assignment -2 (birthday Countdown)
    $targetDays = strtotime("August 27, 2021 12:00 AM");

    $today = time();

    $differenceDays = ($targetDays - $today);

    $days = (int)($differenceDays / 86400);

    echo "Days till next Birthdays: " . $days . " days.";
    echo "<br>";

    //Assignment -3 (Random float Numbers)
    $randNumber = rand(0, 100) / 10;

    echo $randNumber;
    echo "<br>";

    //Assignment -4 (Lowercase check)
    $str = "THiS iS aN eXCePTioNaLLy eLiTe SeNTeNCe or reversed capitals (eXTENDED kEY gNERERATOR pRO). The iNiQUiTY BBS software based on Renegade";
    //$lowercaseCheck = strtolower($str);

    //echo $lowercaseCheck;
    function lowercaseCheck($str){
        echo strtolower($str);
    }


    lowercaseCheck($str);
    echo "<br>";


    //Assignment-5 (Punctuation marks)
    $string = "There are 14 punctuation marks that are commonly used in English grammar... They are the period, question mark, exclamation point, comma, semicolon, colon, dash, hyphen, parentheses, brackets, braces, apostrophe, quotation marks, and ellipsis.";
    $punctuation = 0;

    function searchText($string, $punctuation){
        for($i = 0; $i < strlen($string); $i++){
            if($string[$i] == "."){
                $punctuation++;
            }
        }
        echo " The text has ". $punctuation . " punctuation";

    }


    searchText($string, $punctuation);
    echo "<br>";


    //Assignment - 6 (Lowest and Highest values)
    $onlyNumbers = array(10, 756, 89, 900, 30, 3);

    echo "The maximum number in array is ".max($onlyNumbers).".<br>";
    echo "The minimum number in array is ".min($onlyNumbers).".<br>";

    //Assignment -7 (Repeat string)
    $name = "My name is Veevek Magar.";

    echo "<br>";
    echo str_repeat($name, 8)."<br>";



    
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Build in function

//String Functions- manipulate string value
    //String Length
    $str = "Today is a synny day";
    echo strlen($str)."<br>";

    //String Word count
    $firstName = "My first name is veevek";
    echo str_word_count($firstName)."<br>";

    //how to find text within a string
    $email = "nobishuzu123@gmail.com";
    if (strpos($email, "@")){
        echo "This is a valid email."."<br>";
    }else{
        echo "This is not a valid email."."<br>";
    }

    //Ucword - Every first letter of a word is uppercase
    echo ucwords("what is you name?"."<br>");

    //Every string to  uppercase
    echo strtoupper("what is you name?"."<br>");

    //Every string to  lowercase
     echo strtolower("what is you name?"."<br>");


//Math Function - return numeric value
    //Ceil
    echo ceil(1.50)."<br>";
    //Floor 
    echo floor(0.50)."<br>";

    //Round
    echo round(0.54335, 4)."<br>";

    echo exp(4);
    echo "<br>";
//Date Function - format a date or time into human readable format
    echo date('l-F-Y');
    echo "<br>";

    echo date('h:i:s a');

    //Set timezone
    //date_default_timezone_set();

    //string to time
    $time = strtotime("7:00pm August 27 2020");
    echo "<br>";
    echo $time;
    echo "<br>";
    //is the timestamp is the value represented as seconds calculated, since UNIX Epoch, January 1, 1970, and also called as UNIX timestamp.
    echo date('m/d/y H:i a', $time);
    echo "<br>";

//Array Function - access and manipulate arrays
    //Array Merge
    $personalInfo = array("Name" => 'Dary', "Age" => 20, "City" => 'Kathmandu');
    $moreInfo = array("State" => 3, "Weight" => 55);

    $personalInfo = array_merge($personalInfo, $moreInfo);

    foreach($personalInfo as $key => $value){
        echo $key .":" . $value ."<br>";
    }

   // print_r($personalInfo);
    echo "<br>";

    //print only keys
    print_r(array_keys($personalInfo));

    echo "<br>";
    //print only values
    print_r(array_values($personalInfo));

    //Add a value in array
    $cars = array("Volkswagen", "Audi", "Mercedes");
    array_push($cars, "Volvo");
    echo "<br>";
    print_r($cars);
    array_pop($cars);
    print_r($cars);
    //array_pop($cars);
    //print_r($cars);

    //Array search inside of an array
    echo "<br>";
    echo array_search("Audi", $cars);

    //count the numbers of item in an array
    echo "<br>";
    echo count($cars);

//Random number function
    echo "<br>";
    $min = 1;
    $max = 10;
    echo rand($min, $max);
    echo getrandmax();
    ?>
</body>
</html>
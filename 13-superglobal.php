<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //superglobals
        // GLOBALS - excess globals variable which is used to access global variable from anywhere from php scripts
        $x = 100;
        $y = 200;

        function add(){
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        add();
        echo $z;
        //$_POST
        //Collect data from html form (invisible)
        if (isset($_POST)){
            echo $_POST['name']. " ,your form is submitted";
        }
        echo "<br>";
        print_r($_POST);
        //$_GET 
        //$_SERVER
        //$_COOKIE ,
        //$_SESSION
        //$_FILES
    ?>

    <form action="13-superglobal.php" method="post">
        <input type="text" name="name">
        <input type="text" name="age">
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>
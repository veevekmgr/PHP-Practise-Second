<?php
    if(isset($_POST['submit'])){
        //add database connection
        require 'database.php';

        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPass = $_POST['confirmpassword'];

        if (empty($username) || empty($password) || empty($confirmPass)) {
            //header("Location: ../register.php?error=emptyfields&username=".$username);
            echo "<script type='text/javascript'>alert('Fields are empty!!');document.location='../register.php'</script>";
            exit();
        }elseif (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
            //header("Location: ../register.php?error=invalid username&username=".$username);
            echo "<script type='text/javascript'>alert('Invalid Username!!');document.location='../register.php'</script>";
            exit();
        }elseif ($password != $confirmPass) {
            echo "<script type='text/javascript'>alert('Passwords doesnot match! Please Try Again!!');document.location='../register.php'</script>";
            //header("Location: ../register.php?error=Passworddonotmatch&username=".$username);
            
            exit();
    }else{
        $sql = "SELECT username FROM users WHERE username = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../register.php?error=sqlerror");
            exit();
        }else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);

            if ($rowCount > 0){
                echo "<script type='text/javascript'>alert('Username already Taken. Please Try another!!');document.location='../register.php'</script>";
                //header("Location: ../register.php?error=usernameTaken");
                exit();
            }else{
                $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)){
                    echo "<script type='text/javascript'>alert('SQL ERROR!!');document.location='../register.php'</script>";
                    //header("Location: ../register.php?error=sqlerror");
                    exit();
                }else {
                    $hashedPass = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPass);
                    mysqli_stmt_execute($stmt);
                        echo "<script type='text/javascript'>alert('Resgistered Successfully!!');document.location='../login.php'</script>";
                        exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>

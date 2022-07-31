<?php
    if (isset($_POST['submit'])){
        require 'database.php';

        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)){
            //header("Location: ../register.php?error=emptyfields");
            echo "<script type='text/javascript'>alert('Fields are empty!!');document.location='../register.php'</script>";
            exit();
        }else{
            $sql = "SELECT * FROM users WHERE username = ?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../register.php?error=sqlerror");
                exit();
            }else {
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                $result = $stmt->get_result();

                if ($row = mysqli_fetch_assoc($result)){
                    $passCheck = password_verify($password, $row['password']);
                    if ($passCheck == false){
                        echo '<script>alert("You entered incorrect password!")</script>';
                        header("Location: ../login.php");
                      
                        exit();
                    }elseif($passCheck == true){
                        session_start();
                        $_SESSION['sessionId'] = $row['id'];
                        $_SESSION['username'] = $row['username'];
                        header("Location: ../index.php?success=LoggedIn");
                        exit();
                    }else{
                        header("Location: ../index.php?error=wrongpassword");
                        echo '<script>alert("You entered incorrect password!")</script>';
                        exit();
                    }
                }else{
                    header("Location: ../index.php?error=nouser");
                     exit();
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);

    }else{
        header("Location: ../index.php?error=accessforbidden");
        exit();
    }    
?>
<?php
    if (isset($_POST['submit'])){
        $file = $_FILES['file'];
        $name = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name']; //Temp loc
        $size = $_FILES['file']['size'];
        $error = $_FILES['file']['error'];

        //explode from punctuation mark
        $tempExtension = explode('.', $name);

        $fileExtension = strtolower(end($tempExtension));

        //Allowed Extension
        $isAllowed = array('jpg', 'jpeg', 'png', 'pdf');

        //0 is no error and 1 is equal to error
        if (in_array($fileExtension, $isAllowed)){  
            if ($error === 0){
                if ($size < 100000){
                    $newFileName = uniqid('', true)."." .$fileExtension;
                    $fileDestination = "uploads/" .$newFileName;
                    move_uploaded_file($tmp_name, $fileDestination);
                    header("Location: 18-files.php?uploadedsuccess");
                }else{
                    echo "Sorry, your file size is too big!";
                }

            }else{
                echo "Sorry! There was an error! Try it again";
            }

        }else {
            echo "Sorry, your file type is not accepted";
        }
    }
?>


<?php
if (isset($_POST['submit'])){
    $file = $_FILES['file'];
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];

    $tempExtension = explode(".", $name);

    $fileExtension = strtolower(end($tempExtension));

    $isAllowed = array("png", "jpg", "jpeg", "pdf");

    if (in_array($fileExtension, $isAllowed)){
        if($error === 0){
            if ($size <100000){
                $newFileName = uniqid('', True).".".$fileExtension;
                $fileDestination = "uploads/". $newFileName;
                move_uploaded_file($tmp_name, $fileDestination);

                header("Location: 18-files.php?uploadedSuccessful");
    
            }else{
                echo "Sorry, Your file size is bigger!!!";
            }
        } else {
            echo "Sorry, Thers was an error. Try it again!!";
        }
    }else{
        echo " Sorry, Your file type is not correct!";
    }
}
?>
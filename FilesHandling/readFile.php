<!--Read Files-->
<?php
    $filename = "tmp.txt";
    $file = fopen($filename, "r");
    if($file == false){
        echo "Error";
        exit();
    }
    $filesize = filesize($filename);
    $filetext = fread($file, $filesize);
    fclose($file);
    echo ( "File size : $filesize bytes" );
    echo $filetext;
?>
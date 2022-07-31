
<!--write Files-->
<?php
$filename = "write.txt";
$file = fopen( $filename, "w+" );
    if($file == false){
        echo "Error";
        exit();
    }
fwrite( $file, "This is a simple test\n" );
$filesize = filesize($filename);
$filetext = fread($file, $filesize);
echo ( "File size : $filesize bytes" );
echo $filetext;
fclose($file);
?>
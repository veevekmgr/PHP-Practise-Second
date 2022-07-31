<!--write Files-->
<?php
$filename = "write.txt";
$file = fopen( $filename, "w+" );
    if($file == false){
        echo "Error";
        exit();
    }
fwrite( $file, "This is a simple test\n" );
$file1 = fopen( $filename, "r" );
$filesize = filesize($filename);
$filetext = fread($file1, $filesize);
echo ("File size : $filesize bytes");
echo $filetext;
fclose($file);
?>
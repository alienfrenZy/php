<?php

    $file = "example.txt";
//w for write or r for read
if($handle = fopen($file,'r')) {
    
    echo $content = fread($handle, filesize($file)); //Each bite equals a character
    
    fclose($handle);
    
} else {
    
    echo "The application was not able to write on the file";
    
}




?>


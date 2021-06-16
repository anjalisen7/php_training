<?php

$file ="myfile.txt";
if(file_exists($file)){
    echo readfile($file);
    copy($file,("newfile.txt"));
}else{
    echo "file doesn't exist";
}

 
?>
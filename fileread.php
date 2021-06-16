<?php

$file ="myfile1.txt";
if(file_exists($file)){
    echo readfile($file);
}else{
    echo "file doesn't exist";
}

 
?>
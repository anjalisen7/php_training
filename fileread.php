<?php

$file ="myfile.txt";
if(file_exists($file)){
      rename("newfile.txt","oldfile.txt");
}else{
    echo "file doesn't exist";
}

 
?>
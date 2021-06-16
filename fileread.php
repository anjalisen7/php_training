<?php

$file ="myfile.txt";
 if(file_exists("textfiles")){
    rmdir("textfiles");
 }else{
      echo "Folder Doesn't Exist";
 }


 
?>
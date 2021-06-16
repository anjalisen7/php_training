<?php

$file ="myfile.txt";
 if(!file_exists("textfiles")){
    mkdir("textfiles");
 }else{
      echo "Folder Already Exist";
 }


 
?>
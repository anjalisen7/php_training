<?php

$file ="myfile.txt";
if(file_exists($file)){
      unlink("oldfile.txt");
}else{
    echo "file doesn't exist";
}

 
?>
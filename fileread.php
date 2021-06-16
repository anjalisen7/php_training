<?php

$file =  fopen("myfile.txt","r");

while(!feof($file)){
    $line=fgets($file);
    echo $line ."<br>";
}

 
?>
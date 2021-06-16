<?php

$file =  fopen("myfile.txt","r");

echo fread($file,100);
 

 
?>
<?php

$file =  fopen("myfile.txt","r");

echo fgets($file);
echo ftell($file);
echo fgets($file);
echo ftell($file);
 

 
?>
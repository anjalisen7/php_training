<?php

$file =  fopen("myfile.txt","r");

echo fgets($file);
echo ftell($file);
echo "<br>".fgets($file);
echo ftell($file);
  fseek($file,20);
  echo "<br>".fgets($file);

 
?>
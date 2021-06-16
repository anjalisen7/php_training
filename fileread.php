<?php

$file =  fopen("myfile.txt","r");
  echo "<ul>";
while(!feof($file)){
    $line=fgets($file);
    echo  "<li>".$line ."</li>";
}
echo "<ul>";
 
?>
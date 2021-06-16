<?php

$file ="myfile.txt";
 $path = realpath($file);
echo "<pre>";
  print_r (pathinfo($path,PATHINFO_FILENAME));
  echo "</pre>";

 
?>
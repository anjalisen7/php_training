<?php

$file ="myfile.txt";
 $path = realpath($file);
echo "<pre>";
  print_r (pathinfo($path));
  echo "</pre>";

 
?>
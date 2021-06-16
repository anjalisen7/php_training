<?php

$file =  fopen("myfile.txt","r");
      echo "<pre>";
    print_r(file("myfile.txt"));
    echo "</pre>";


 
?>
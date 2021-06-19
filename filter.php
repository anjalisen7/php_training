<?php
 $var = "anjali.(aashi//@gmail.)com";
 

 $var = (filter_var($var,FILTER_SANITIZE_EMAIL));
   if(filter_var($var,FILTER_VALIDATE_EMAIL)){
     echo "<br> $var is a valid EMAIL";
 }else{
    echo " <br> $var is not a valid EMAIL";
 }


?>

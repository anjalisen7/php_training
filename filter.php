<?php
 $var = "$$345&.90";
 

 $var = (filter_var($var,FILTER_SANITIZE_NUMBER_INT));
   if(filter_var($var,FILTER_VALIDATE_INT)){
     echo "<br> $var is a valid INTEGER";
 }else{
    echo " <br> $var is not a valid INTEGER";
 }


?>

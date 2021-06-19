<?php
 $var = "wow";
 

 var_dump($var,FILTER_VALIDATE_BOOLEAN,FILTER_NULL_ON_FAILURE);
   if(filter_var($var,FILTER_VALIDATE_BOOLEAN)){
     echo "<br> $var is boolean";
 }else{
    echo " <br> $var is not boolean";
 }


?>

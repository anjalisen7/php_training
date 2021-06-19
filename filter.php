<?php
 $var = "43535";
 

 var_dump(filter_var($var,FILTER_VALIDATE_BOOLEAN,FILTER_NULL_ON_FAILURE));
   if(filter_var($var,FILTER_VALIDATE_BOOLEAN)){
     echo "<br> $var is boolean";
 }else{
    echo " <br> $var is not boolean";
 }


?>

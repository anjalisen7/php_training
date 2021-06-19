<?php
 $var = "150e";
 

 $var = (filter_var($var,FILTER_SANITIZE_NUMBER_FLOAT ,FILTER_FLAG_ALLOW_SCIENTIFIC));
   if(filter_var($var,FILTER_VALIDATE_FLOAT)){
     echo "<br> $var is a valid FLOAT";
 }else{
    echo " <br> $var is not a valid FLOAT";
 }


?>

<?php
 $var = "raashi_rj@yahoo.in";
 

 var_dump(filter_var($var,FILTER_VALIDATE_EMAIL));
   if(filter_var($var,FILTER_VALIDATE_EMAIL)){
     echo "<br> $var is a valid email";
 }else{
    echo " <br> $var is not a valid email";
 }


?>

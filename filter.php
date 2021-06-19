<?php
 $var = "FA-F9-DD-B2-5E-0D";
 

//  var_dump(filter_var($var,FILTER_VALIDATE_EMAIL));
   if(filter_var($var,FILTER_VALIDATE_MAC)){
     echo "<br> $var is a valid MAC";
 }else{
    echo " <br> $var is not a valid MAC";
 }


?>

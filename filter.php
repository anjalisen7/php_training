<?php
 $var = "https://www.anjali      sen.net";
 

 $var = (filter_var($var,FILTER_SANITIZE_URL));
   if(filter_var($var,FILTER_VALIDATE_URL)){
     echo "<br> $var is a valid URL";
 }else{
    echo " <br> $var is not a valid URL";
 }


?>

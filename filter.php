<?php
 $int = 122;
 

 if(filter_var($int,FILTER_VALIDATE_INT)){
     echo "$int is integer";
 }else{
    echo "$int is not integer";
 }


?>

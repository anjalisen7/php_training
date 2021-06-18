<?php
 $int = 122;
 $min=1;
 $max =100;

 if(filter_var($int,FILTER_VALIDATE_INT,array("option"=> array("min-range"=> $min, "max-range"=>$max)))===false){
     echo ("value is not within the range");
 }else{
     echo "value is within the range";
 }


?>

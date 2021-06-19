<?php
 $url = "https://in.search.yahoo.com/search?fr=mcafee&type=E210IN885G91506&p=codeigniter+tutorial";
 

 if(filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)===false){
     echo "  valid url";
 }else{
    echo " Unvalid url";
 }


?>

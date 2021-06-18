<?php
 $ip = "2001:db8:0:1234:0:567:8:1";
 

 if(filter_var($ip,FILTER_VALIDATE_IP)){
     echo "$ip is valid ipv6";
 }else{
    echo "$ip is not valid ipv6";
 }


?>

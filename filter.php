<?php
 $var = 'thi"s i/s the best //thing.';
 

 echo (filter_var($var,FILTER_SANITIZE_MAGIC_QUOTES));
  


?>

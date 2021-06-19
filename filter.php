<?php
$arr = array(
   "emp_name" => "anjali sen",
   "emp_age" => "42",
   "emp_email" => "anjali.aasima.sen@gmail.com",
);
$filters = array(
       "emp_name" =>array(
          "filter" => FILTER_SANITIZE_STRING,
           "flags" =>  FILTER_FLAG_STRIP_HIGH
       ),        
       "emp_age" => array(
           "filter" => FILTER_VALIDATE_INT,
           "option" => array(
               "min-range" => 18,
               "max-range" => 45
           )
           ),
           "emp_email" => FILTER_VALIDATE_EMAIL,        
);

echo  "<pre>";
 print_r(filter_var_array($arr,$filters));
  echo "</pre>";
?>

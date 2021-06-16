<?php

$file =  fopen("myfile.txt","r");

echo "<br>".fgets($file);
echo"<br>". ftell($file);
echo "<br>".fpassthru($file);


 
?>
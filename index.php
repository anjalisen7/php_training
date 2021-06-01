<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link rel ="stylesheet" href="index.css">
</head>
<body>

<?php
  function kim(){
     static $i=2;
     static $a=2;
    //   echo $a;
    //   echo $i;
       echo $a * $i;
      $a++;
      $a * $i;
      }
      kim();
      echo"<br>";
      kim();
      echo"<br>";
      kim();
      echo"<br>";
      kim();
      echo"<br>";
      kim();
      echo"<br>";
      kim(); 
       echo"<br>";
      kim(); 
       echo"<br>"; 
      kim();
        echo"<br>"; 
        kim();
        echo"<br>"
     
?>
</body>
</html>
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
   
     $num1= 45;
     $num2 =67;
     function test(){
         $GLOBALS['num2'] = $GLOBALS['num1'] * $GLOBALS['num2'];
                  }
        test();
        echo    "multiply value is: => $num2";
?>
</body>
</html>
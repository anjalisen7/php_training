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
     //All three parameters are optional, but semicolon (;)
     // is must to pass in for loop. If we don't pass parameters, it will execute infinite.
      $i =0;   
     for(;;)
       {  
         $i++; 
        echo "$i <br>";
        }
     ?>
</body>
</html>
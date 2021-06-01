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
     $x ="this is it\n\n";//remove /n from the right end;
     $y ="this is it";// remove right end string;
     echo $x ."<br>";
     echo chop($y,"it");
   ?>
</body>
</html>
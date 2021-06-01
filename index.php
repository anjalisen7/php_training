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
     define("cosmetics",["lipstick","nail-paint","moisturizer","eyeliner","muscara","kajal"]);
     echo   'list of cosmetics'."<br>".cosmetics[4]."<br>".cosmetics[2]."<br>".cosmetics[0];
      ;  

?>
</body>
</html>
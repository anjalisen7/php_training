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
     $num =234;
     $sum =0; $rem =0;
     while((int)$num != 0){
         $rem = $num % 10;
         $sum= $sum + $rem;
         $num = $num/10;
     }
      echo "the sum of digit of number given 234 is => $sum";
    ?>
</body>
</html>
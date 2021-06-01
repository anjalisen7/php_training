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
      $marks=67;
      if($marks<33){
          echo "fail";
      }
      else if($marks>=34 && $marks<50)
      {
          echo "grade D";
      }
        else if($marks>=51 && $marks<69)
         {
        echo "grade C";
          }
      else if($marks>69 && $marks<75)
      {
         echo "grade B";
        }
    else if($marks>75 && $marks<90)
    {
       echo "grade A";
    }
    ?>
</body>
</html>
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
        $num=45;
        switch($num){
            case 10:
                echo "$num is equal to 10";
                 break;
             case 50:
                echo "$num is equal to 50";
                break;
            case 45:
                 echo "$num is equal to 45";
                 break;
            default:
            echo "$num is not equal to 10, 50 and 45";
            break;
            } 
               
          ?>
</body>
</html>
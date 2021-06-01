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
        $today=date("D");
        switch($today){
            case Mon:
                echo "Today is Monday. Washing the Car and goes to drive.";
                 break;
             case Tue:
                echo "Today is Tuesday. Buy Cloths.";
                break;
             case Wed:
                 echo "Today is Wednesday. Visit Our Factory.";
                 break;
              case Thu:
                    echo "Today is Thursday. Going to Lunch with Family In Night.";
                    break;
              case Fri:
                    echo "Today is Friday. Watch movie show.";
                    break;
              case Sat:
                     echo "Today is Saturday. going to temple.";
                     break;
                case Sun:
                     echo "Today is Sunday. Rest with our Family and Enjoy.";
               default:
                echo " No task available for that day.";
                   break;
               } 
               
          ?>
</body>
</html>
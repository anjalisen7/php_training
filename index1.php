<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    
    <?php
       $mail =$password= "";
       if($_SERVER["REQUEST_METHOD"]=="POST")
       {
          $mail =    $_POST['fmail'];
          $password= $_POST['pass'];
          echo  "HELLO😄" ."<br>".$mail ."<br>"."your password is:".$password;
       } else{
           echo  "Something went wrong";
       }


    ?>
</body>
</html>
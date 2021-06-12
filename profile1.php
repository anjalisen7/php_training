<?php
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $uppercase = preg_match('@[A-Z]@', $password);
  $lowercase = preg_match('@[a-z]@', $password);
   $number    = preg_match('@[0-9]@', $password);
   $specialChars = preg_match('@[^\w]@', $password);
   $servername ="localhost";
   $username="root";
   $password ="";
   $dbname ="anjali";

   $conn =new mysqli ($servername ,$username ,$password ,$dbname);
    if($_SERVER["REQUEST_METHOD"]=="POST"){
      if(empty($_POST['fname'])||(empty($_POST['lname']))||(empty($_POST['age']))||(empty($_POST['email']))||(empty($_POST['email']))){
        echo "*ALL fields are mandatory!";
      }else{
        if(!preg_match("/^[a-zA-Z-' ]*$/",$_POST['fname'])){
          echo "*Invalid Name";
        }else{
          if(!preg_match("/^[a-zA-Z-' ]*$/",$_POST['lname'])){
            echo "*Invalid Surname";
          }else{
             if($_POST['age']<18){
               echo "*Age must be over 18";
             }else{
               if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                 echo "*Invalid E-mail";
               }else{
                 if(!$uppercase || !$lowercase || !$number || !$specialChars||strlen($_POST['password'])<8){
                   echo "*Invalid Password";
                 }else{
                   session_start();
                   $sql ="INSERT INTO `users` (`fname`, `lname`, `age`, `email`, `password`) VALUES ('$fname', '$lname', '$age', '$email', '$password')";
                   if(mysqli_query($conn,$sql)){
                     $_SESSION['user'] =$sql;
                        echo "data submitted";
                        header("Location:http://localhost/php_training/profile2.php");
                   }else{
                     echo "Error:".$sql ."<br>". mysqli_error($conn);
                   }
                 }
               }
             }
          }
        }
      }
    }
?>

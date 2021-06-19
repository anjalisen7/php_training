<?php

 session_start();
 $servername ="localhost";
 $username="root";
 $password ="";
 $dbname ="anjali";
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $field = $_POST['field'];
  $form_password = md5($_POST['password']);


   $conn =new mysqli ($servername ,$username ,$password ,$dbname);
    if($_SERVER["REQUEST_METHOD"]=="POST"){
      if(empty($_POST['fname'])||(empty($_POST['lname']))||(empty($_POST['age']))||(empty($_POST['email']))||(empty($_POST['password']))||(empty($_POST['address']))||(empty($_POST['city']))||(empty($_POST['field']))){
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
                  $checkUser ="SELECT email from `users` where `email` = '$email'";
                   $ee = mysqli_query($conn,$checkUser);
                  if(mysqli_num_rows($ee)>0){
                    echo "User already exits";
                  }else{
                   $signupinsert ="INSERT INTO `users` (`fname`, `lname`, `age`, `email`, `password`, `address`, `city`,`field`) VALUES ('$fname', '$lname', '$age', '$email', '$form_password','$address','$city','$field')";
                   if(mysqli_query($conn,$signupinsert)){
                    // $user = [$fname,$lname,$age,$email,$form_password];
                     $user = array(
                           "fname"=>$fname,
                           "lname"=>$lname,
                           "age" =>$age,
                           "email"=>$email,
                           "address"=>$address,
                           "city"=>$city,
                           "field"=> $field
                     );
                     $_SESSION['user'] =$user;
                     ?>
                     <script>
                       window.location.href = "http://localhost/php_training/profilepage.php";
                     </script>
                   <?php
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


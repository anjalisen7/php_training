<?php

 $servername=  "localhost";
 $username ="root";
 $password="";
 $dbname ="anjali";
 $email=$_POST['email'];
$password=$_POST['password'];
 
 $conn = mysqli_connect('localhost', 'root', '', 'anjali');

 if($_SERVER["REQUEST_METHOD"]=="POST"){
     if(empty($_POST['email'])){
         echo "Email Required";
     }else{
         if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
             echo "Invalid E-mail";
         }else{
             if(empty($_POST['password'])){
                 echo "Password Required";
             }else{
                 $query = "select * from users";
                 $result= mysqli_query($conn,$query);
                 if($result->num_rows > 0){
                   
                     if($row = $result->fetch_assoc()){
                        //   print_r($row);
                            session_start();
                            // $user [] =$row;
                        $_SESSION['user']=$row;
                     }
                   
                    
                    ?>
                    <script>
                      window.location.href = "http://localhost/php_training/profilepage.php";
                    </script>
                  <?php
                 }else{
                      echo "go to signup page";
                    // header:('location:signup.php');
                 }
             }
         }
     }
 }
  

//   echo "login succesfullly";
?>
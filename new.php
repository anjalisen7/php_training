<?php
 $firstname =$_POST['firstname']; 
 $lastname =$_POST['lastname']; 
 $password =$_POST['password'];
 $email =$_POST['email'];

 if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['firstname'])||(empty($_POST['lastname']))||(empty($_POST['password']))||(empty($_POST['email']))){
      echo "*please fill data";
    }else{
          if(!preg_match("/^[a-zA-Z-' ]*$/",$_POST['firstname']) || (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['lastname'])) || (strlen($_POST['password']) < 8) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            echo " *data is invalid";
          }else{
              echo "HELLO! $firstname  login succesful!😄";
          }
         }
  }
?>
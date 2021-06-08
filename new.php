<?php
 $firstname =$_POST['firstname']; 
 $lastname =$_POST['lastname']; 
 $password =$_POST['password'];
 $email =$_POST['email'];
 $uppercase = preg_match('@[A-Z]@', $password);
 $lowercase = preg_match('@[a-z]@', $password);
  $number    = preg_match('@[0-9]@', $password);
  $specialChars = preg_match('@[^\w]@', $password);

 if($_SERVER["REQUEST_METHOD"]=="POST"){
  if(empty($_POST['firstname'])|| (empty($_POST['lastname']))||(empty($_POST['password']))||(empty($_POST['email']))){
    echo "*ALL field  is required";
  }else{
     if(!preg_match("/^[a-zA-Z-' ]*$/",$_POST['firstname'])){
        echo "Invalid name pattern";
     }else{
      if(!preg_match("/^[a-zA-Z-' ]*$/",$_POST['lastname'])){
         echo "Invalid Surname pattern";
      }
      else{
         if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($_POST['password']) < 8){
               echo "Invalid password";
         }else{
         if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        echo " *Invalid Email";
        }else{
          echo "HELLO! $firstname  login succesful!😄";
        }
      }
    }
  }
  }
}
?>
<?php
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $age= $_POST['age'];
  $pass_number    = preg_match('@[0-9]@', $password);
  $specialChars = preg_match('@[^\w]@', $password);
  $number = $_POST['number'];
  $min=9000000000;
  $max=9999999999;
  $min2=18;
  $max2=60;
   
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['fname'])||(empty($_POST['lname']))||(empty($_POST['uname']))||(empty($_POST['email']))||(empty($_POST['password']))||(empty($_POST['age']))||(empty($_POST['number']))){
        echo "*ALL FIELD IS MANDATORY";
    }else{
       $email =(filter_var($email,FILTER_SANITIZE_EMAIL));
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
           echo "*Invalid EMAIL";
        }else{
           $number = (filter_var($number,FILTER_SANITIZE_NUMBER_INT));
            if(filter_var($number,FILTER_VALIDATE_INT,array("options" => array("min_range"=>$min, "max_range"=>$max)))===false){
              echo "*Invalid Mobile Number";
            }else{
                 if(!preg_match("/^[a-zA-Z-' ]*$/",$_POST['fname'])){
                       echo "*Invalid Name Pattern";
                 }else{
                  if(!preg_match("/^[a-zA-Z-' ]*$/",$_POST['lname'])){
                      echo "*Invalid Last Name";
                  }else{
                    if(!preg_match("/^[a-zA-Z-' ]*$/",$_POST['uname'])){
                      echo "*Invalid User Name";
                    }else{
                      if((!$number || !$specialChars || strlen($_POST['password']) < 8)){
                        echo "*Invalid Password";
                      }else{
                        $age = (filter_var($age,FILTER_SANITIZE_NUMBER_INT));
                        if(filter_var($age,FILTER_VALIDATE_INT,array("options" => array("min_range"=>$min2, "max_range"=>$max2)))===false){
                          echo "*You are under/above age";
                        }else{
                            echo  "FNAME".$fname;
                            echo "LNAME" .$lname;
                            echo "USERNAME".$uname;
                            echo "AGE".$age;
                            echo "NUMBER".$number;
                            echo "PASSWORD".$password;
                            echo "EMAIL".$email;
                        }
                      }
                    }
                  }
                 }
            }
        }
    }
  }

   

?>
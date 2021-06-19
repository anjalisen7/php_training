<?php
  $name=$_POST['name'];
  $age =$_POST['age'];
  $id =$_POST['id'];
  $city =$_POST['city'];
  $email=$_POST['email'];
   $servername ="localhost";
   $username="root";
   $password ="";
   $dbname ="anjali";


  $conn =new mysqli ($servername ,$username ,$password ,$dbname);
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['name'])|| (empty($_POST['age']))||(empty($_POST['id']))||(empty($_POST['city']))||(empty($_POST['email']))){
      echo "*ALL field  is required";
    }else{
        if(!preg_match("/^[a-zA-Z-' ]*$/",$_POST['name'])){
           echo "Invalid name";
        }else{
             if(strlen($_POST['age'] > 45)){
               echo "You are Enter Invalid Age";
             }else{
                if(!preg_match("/^[a-zA-Z-' ]*$/",$_POST['city'])){
                 echo "Invalid city name";
                }else{
               if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                 echo "Invalid email";
               } else{
                   session_start();
                      $sql ="insert into employee (name, age, id, email, city) values('$name','$age','$id','$city','$email')";
                      if (mysqli_query($conn, $sql)) {
                         $_SESSION['employee']= $name.$age.$id.$city.$email;
                         echo "<script>location.href='profile.php'</script>";
                      } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                      }
                    }
                     }
                 }
               }
             }
            
          
  }
   
    
?>
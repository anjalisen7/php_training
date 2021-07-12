<?php
   require_once("connection.php");
     $email=$_POST['email'];
     $password=$_POST['password'];

 if($_SERVER["REQUEST_METHOD"]=="POST"){
     if(empty($_POST['email'])){
        echo "EMAIL Required.";
     }else{
         if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
             echo "Invalid Email.";
         }else{
             if(empty($_POST['password'])){
                 echo "Password Required.";
             }else{
                 $query = "select * from users where email ='$email' and isActive='1'";
                 $result = mysqli_query($conn,$query);
                 if($result->num_rows > 0){
                     if($row = $result->fetch_assoc()){
                
                        session_start();
                            // $user [] =$row;
                        $_SESSION['user']=$row;
                     }
                     $_SESSION['status']="Loggin succesful";
                     $_SESSION['status_code']="success";
                    //  echo $_SESSION['user']['fname']."logged in succesfully";
                    ?>
                    <script>
                      window.location.href = "http://localhost/php_training/profilepage.php";
                    </script>
                  <?php
                 }else{
                      
                   echo "<a href='signup.php'><h6 style='color:black; margin-right:2px; font-size:20px;'>Go to Signup</h6></a>"."<a style= 'color:purple; font-size:15px;margin-left:2px;' href='enable.php'>Enable</a>";

                 }
             }
         }
     }
 }

?>

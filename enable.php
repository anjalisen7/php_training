<?php
session_start();
 require_once("connection.php");
  $email =$_SESSION['user']['email'];
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "update  users set isActive='1' WHERE email= '$email'";
  
  if ($conn->query($sql) === TRUE) {
    $_SESSION['status'] = "Welcome Back!";
    $_SESSION['status_code'] ="success";
    ?>
                     <script>
                       window.location.href = "http://localhost/php_training/profilepage.php";
                     </script>
                   <?php
    // echo "your id is enabled";
  } else {
    $_SESSION['status'] = "Sorry Soemthing went wrong!";
    $_SESSION['status_code'] ="error";
    ?>
                     <script>
                       window.location.href = "http://localhost/php_training/login.php";
                     </script>
                   <?php
    // echo "Error disabling record: " . $conn->error;
  }


?>
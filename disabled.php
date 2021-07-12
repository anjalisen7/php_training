<?php
session_start();
 require_once("connection.php");
  $email =$_SESSION['user']['email'];
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // sql to delete a record
  $sql = "update  users set isActive='0' WHERE email= '$email'";
  
  if ($conn->query($sql) === TRUE) {
    $_SESSION['status'] = "Your  Disabled!";
    $_SESSION['status_code'] ="success";
    ?>
                     <script>
                       window.location.href = "http://localhost/php_training/login.php";
                     </script>
                   <?php
    // echo "Record deleted successfully";
  } else {
    $_SESSION['status'] = "Sorry Try Again!";
    $_SESSION['status_code'] ="error";
    ?>
                     <script>
                       window.location.href = "http://localhost/php_training/profilepage.php";
                     </script>
                   <?php
    // echo "Error disabling record: " . $conn->error;
  }


?>
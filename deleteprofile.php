<?php
session_start();
 require_once("connection.php");
  $email =$_SESSION['user']['email'];
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // sql to delete a record
  $sql = "DELETE FROM users WHERE email= '$email'";
  
  if ($conn->query($sql) === TRUE) {

    echo "Record deleted successfully";
  } else {
    
    echo "Error deleting record: " . $conn->error;
  }


?>
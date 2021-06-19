<?php
$uname = "anjali";
$password="anjali@14";


   session_start();
    if(isset($_SESSION['uname'])){
         echo "<script>location.href='product.php'</script>";
        
    }else{
         if($_POST['uname'] == $uname && $_POST['password']==$password){
               $_SESSION['uname'] = $uname;
               echo "<script>location.href='product.php'</script>";
         } else{
              echo "<script>alert('Username and Password is incorrect')</script>";
         }
    }
     ?>
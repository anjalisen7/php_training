<?php
session_start();
   if(isset($_SESSION['user'])){
        unset($_SESSION['user'])
        ?>
        <script>
          window.location.href = "http://localhost/php_training/login.php";
        </script>
      <?php
   }else{
      ?>
      <script>
        window.location.href = "http://localhost/php_training/login.php";
      </script>
    <?php
   }


?>

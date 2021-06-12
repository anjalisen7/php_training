<?php
 session_start();
 echo "<h1>Welcome Mr/Miss:";
 echo $_SESSION['employee'];
 echo "</h1>";
 echo "<a href ='logout.php'><input type = 'submit' value='logout' name ='logout'/></a>";
?>
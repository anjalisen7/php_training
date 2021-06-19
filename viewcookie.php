<?php
  echo "cookie_value:" . $_COOKIE["user"];
  setcookie( "user","", time() - (3600),"/");
?>
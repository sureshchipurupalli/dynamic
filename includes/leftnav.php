<?php
  
   unset($_SESSION["user"]);
   unset($_SESSION["password"]);
   unset($_SESSION["id"]);
   
  
  header("Location:index.php?option=com_login");
?>
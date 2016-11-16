<?php
   session_start();
   unset($_SESSION["user"]);
   unset($_SESSION["password"]);
   
  
   header('Refresh: 0; URL = index.php?option=com_login');
?>
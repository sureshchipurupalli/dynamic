<?php

session_start();
  if($_SESSION['id']!=''){
  
   unset($_SESSION["username"]);
   
   unset($_SESSION["id"]);
   
   unset($_SESSION["email"]);
   
   }
   
   if($_SESSION['id']==''){
     
  header("Location:index.php?msg=logout success");
  }
?>
<?php 
 include('dbconfig.php');
 include('administrator/includes/dbconnection.php');
 $email = $_REQUEST['q'];
// echo  $email; exit();
 $query = "SELECT email FROM tb_regusers where email='".$email."'";
 $result = mysql_query($query);
  $numResults = mysql_num_rows($result); //exit();
 print_r($numResults);//exit;
 if($numResults>=1)
        { 
             echo " ";
        }
  else 
  { 
     echo $email;
	  
  }
?>
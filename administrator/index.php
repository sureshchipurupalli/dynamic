<?php ob_start();

session_start();



include('../dbconfig.php');

include('includes/dbconnection.php');

include("includes/controller.php");

include("model/sitesettings.class.php");

include("model/user_class.php");

$userObj=new userClass();

 include($disptemp);


?>


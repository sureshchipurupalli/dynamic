<?php
error_reporting(0);
//include("dbconfig.php");
$hostname="localhost";
$username="penguqra_dynamic";
$password="dynamic123";
$conn=mysqli_connect($hostname,$username,$password);
$db=mysqli_select_db("penguqra_dynamic_database",$conn);

     $venkat=$_GET['q'];
    // $venkat1=$_GET['w'];



echo $sql=mysqli_query("SELECT * FROM `tb_regusers` WHERE `email`='".$venkat."'");
//print_r($sql);exit;
if($sql!=''){

	echo 'Email already exists';
	}
	
	



?>
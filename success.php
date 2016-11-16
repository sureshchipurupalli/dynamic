<?php include("includes/header.php"); 
//print_r($_POST); exit;
 $transid=$_POST['txn_id'];

   
if($_SESSION['CART_TEMP_RANDOM']!="")
{
  $user_email =   $_SESSION['email'];
  $user_name  =   $_SESSION['username'];
  $total_amount=  $_SESSION['price'];
  //$bid =  $_SESSION['post_id'];
  
  $_SESSION['ordno']=date('Ymdhis');
  
  $datte = date('Y-m-d H:i:s');
  
   $query_ma="SELECT orderno FROM tb_orders ORDER BY id DESC LIMIT 1";
      $lastres=$callConfig->getRow($query_ma);
//	print_r($lastres);exit;
   
   $tt=substr($lastres->orderno,8);
   $zz=$tt+1;
     $final_cont="DYNDTBS000".$zz;
	 
  	  	
	   //$query = "insert into tb_orders(amount,orderno,transactionid,posteddate,payment_status,type) values('".$total_amount."','".$final_cont."','".$transid."','".$datte."','paypal','donate')";
	   
	    $query = "update tb_orders set amount='".$total_amount."', orderno='".$final_cont."', transactionid='".$transid."', posteddate='".$datte."',payment_status='paypal',type='Donate' where temprandid='".$_SESSION['CART_TEMP_RANDOM']."' ";
	   
		$query_res = mysql_query($query);
		
	
			
		$udet = mysql_query("select * from tb_orders where temprandid='".$_SESSION['CART_TEMP_RANDOM']."'");
		$udet_res = mysql_fetch_array($udet);
		//print_r($udet_res);
				 
	$fname = $udet_res['username'];
//	$lname = $udet_res['lastname'];
	$email = $udet_res['email'];
	$location = $udet_res['city'];
	$address = $udet_res['address'];
	
	$totalprice =    $total_amount; 

	
	$sel_set="select * from tb_sitesettings";
$rs_ship=$callConfig->getRow($sel_set);
	
	
			
	$to="$email";
	$subject = 'Donation Confirmation';
 $message="<table cellspacing='0' cellpadding='5'  align='center' width='100%' border='0' style='border:1px solid #CCCCCC; border-collapse:collapse; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;'>
  <tr style='background-color:#CCCCCC'>
    <td  colspan='2' align='left' valign='top'><img src='".SITEURL."/images/logo.png' ></td>
  </tr>
  <tr>
    <td  colspan='2' align='left' valign='top'>Dear<strong> ".$fname." ,</strong></td>
  </tr>
  <tr>
    <td valign='top' colspan='2' align='left'><strong>Your Confirmed Donation Details are Placed Below</strong> </td>
  </tr>
  <tr>
    <td valign='top' colspan='2' align='left'><strong>Order date:</strong> ".$datte." (YYYY/MM/DD) </td>
  </tr>
  <tr>
    <td valign='top' colspan='2' align='left'><strong>Transaction ID:</strong> ".$transid." </td>
  </tr>
  <tr>

    <td valign='top' colspan='2' align='left'><table width='100%' border='1' cellspacing='0' cellpadding='0' style='border:1px solid #eeeeee; border-collapse:collapse;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;'>

		<tr>

          <td height='23' align='left' valign='middle'><strong>First Name:</strong></td>

          <td height='23' align='left' valign='middle'>".$fname."</td>
		</tr>
		
        <tr>

          <td height='23' align='left' valign='middle'><strong>Location:</strong></td>

          <td height='23' align='left' valign='middle'>".$location."</td>
		</tr>
		<tr>
          <td height='23' align='left' valign='middle'><strong>Address:</strong></td>

          <td height='23' align='left' valign='middle'>".$address."</td>

        </tr>";
		
			if($totalprice!=""){
        $mesg4="<tr><td height='23' align='left' valign='middle'><strong>Price</strong></td><td height='23' align='left' valign='middle'>".$_SESSION['price']."</td></tr>";
            }
		if($location!=""){
        $mesg5="<tr><td height='23' align='left' valign='middle'><strong>Location</strong></td><td height='23' align='left' valign='middle'>".$location."</td></tr>";
            }	
			if($address!=""){
        $mesg6="<tr><td height='23' align='left' valign='middle'><strong>Loan Amount</strong></td><td height='23' align='left' valign='middle'>".$address."</td></tr>";
            }

			if($email!=""){
        $mesg8="<tr><td height='23' align='left' valign='middle'><strong>Email</strong></td><td height='23' align='left' valign='middle'>".$email."</td></tr>";
            }
			
		$messagefinal="<tr><td height='23' align='left' valign='middle'>Thank You for Donating, Dynamic_Database.com <br/> <strong>Support Team</strong></td></tr>	 ";
			 "	     
      </table>";
   
$message."<br>";

 $msg=$message.$mesg4.$mesg5.$mesg6.$mesg8.$messagefinal;

	//echo $msg;
	 
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:Eyaab <Eyaab@eyaab.com>' . "\r\n"; 
mail($to,$subject, $msg, $headers,'-f dynamic_datbase@dynamic_database.com');




 $to1=$rs_ship->mail_frommail;
	$subject1 = 'Donation Confirmation';
 $message1="<table cellspacing='0' cellpadding='5'  align='center' width='100%' border='0' style='border:1px solid #CCCCCC; border-collapse:collapse; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;'>
  <tr style='background-color:#CCCCCC'>
    <td  colspan='2' align='left' valign='top'><img src='".SITEURL."/images/logo.png' ></td>
  </tr>
  <tr>
    <td  colspan='2' align='left' valign='top'>Dear<strong> Admin ,</strong></td>
  </tr>
  <tr>
    <td valign='top' colspan='2' align='left'><strong>".$fname." Confirmed Donation Details are Placed Below</strong> </td>
  </tr>
  <tr>
    <td valign='top' colspan='2' align='left'><strong>Order date:</strong> ".$datte." (YYYY/MM/DD) </td>
  </tr>
  <tr>
    <td valign='top' colspan='2' align='left'><strong>Transaction ID:</strong> ".$transid." </td>
  </tr>
  <tr>

    <td valign='top' colspan='2' align='left'><table width='100%' border='1' cellspacing='0' cellpadding='0' style='border:1px solid #eeeeee; border-collapse:collapse;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;'>

		<tr>

          <td height='23' align='left' valign='middle'><strong>First Name:</strong></td>

          <td height='23' align='left' valign='middle'>".$fname."</td>
		</tr>
		
       
        <tr>

          <td height='23' align='left' valign='middle'><strong>Location:</strong></td>

          <td height='23' align='left' valign='middle'>".$location."</td>
		</tr>
		<tr>
          <td height='23' align='left' valign='middle'><strong>Address:</strong></td>

          <td height='23' align='left' valign='middle'>".$address."</td>

        </tr>";
		
			if($totalprice!=""){
        $mesg14="<tr><td height='23' align='left' valign='middle'><strong>Price</strong></td><td height='23' align='left' valign='middle'>".$_SESSION['price']."</td></tr>";
            }
		if($location!=""){
        $mesg15="<tr><td height='23' align='left' valign='middle'><strong>Location</strong></td><td height='23' align='left' valign='middle'>".$location."</td></tr>";
            }	
			if($address!=""){
        $mesg16="<tr><td height='23' align='left' valign='middle'><strong>Address</strong></td><td height='23' align='left' valign='middle'>".$address."</td></tr>";
            }
			
			if($email!=""){
        $mesg18="<tr><td height='23' align='left' valign='middle'><strong>Email</strong></td><td height='23' align='left' valign='middle'>".$email."</td></tr>";
            }
			
		$messagefinal1="<tr><td height='23' align='left' valign='middle'>Thank You for Donating in Dynamic_Datbase.com, <br/> <strong>Support Team</strong></td></tr>	 ";
			 "	     
      </table>";
   
$message."<br>";
 $msgadmin=$message1.$mesg14.$mesg15.$mesg16.$mesg18.$messagefinal1;

//echo $msgadmin;exit;

	 
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:Eyaab <Eyaab@eyaab.com>' . "\r\n"; 
mail($to1,$subject, $msgadmin, $headers,'-f Eyaab@eyaab.com');

	header("location:thankyou.php?tid=".$transid."&ret=success");
}
else{
	header("location:index.php");	

}
 ?>
       
      
      
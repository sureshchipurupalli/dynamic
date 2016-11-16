<?php
@ob_start();
@session_start();
include "dbconfig.php";
include "administrator/includes/dbconnection.php";
include "model/frontend.class.php";
include "model/user_class.php";
include("administrator/model/sitesettings.class.php");
//include("administrator/model/contactus.class.php");

//print_r($_GET['id']);

//print_r($_SESSION['user_id']);
 
//print_r($_GET['type']); 

	?>
    
    <style>
.loader {
	position: fixed;
	left: 0px;
	top: 0px;	
	width: 100%;
	height: 10%;
	z-index: 9999;
	padding-top:10%;
	background: url('images/page-loader.gif') 50% 50% no-repeat ;
}
body{ background-color:rgb(249,249,249);}
</style>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dynamic Database | Paypal Processing</title>

</head>

<body  onload="submitForm()">

 <?php  if($_SESSION['CART_TEMP_RANDOM'] != ""){ ?>
 
  <div class="loader"></div>
  <div  class="t1" style="align:center;padding-left:32%; font-size:18px;padding-top:10%;">Please be patient while we redirect to our payment gateway</div>
  <br class="t1">
   <div class="t1" style="align:center;padding-left:40%;"> <small> Please do not refresh or press back button</small></div>
  <!--<form action="https://www.paypal.com/cgi-bin/webscr" method="post" name="paypalcart_form"  id="paypalcart_form">-->
 <form action="https://www.sandbox.paypal.com/cgi-bin/webscr"  
                        name="paypalcart_form"  id="paypalcart_form" method="post" >
						
               <input type="hidden" name="rm" value="2"/>
			   <input type="hidden" name="cmd" value="_cart"/>
			   <input type="hidden" name="business" value="sairaavi@themedia3.com"/>
               <input type="hidden" name="return" value="<?=SITEURL?>/success.php"/>
               <input type="hidden" name="cancel_return" value="<?=SITEURL?>/cancel.php"/>
               <input type='hidden' name='cbt' value='Click here to Complete Order' />
               <input type="hidden" name="notify_url" value="ipn"/>
               <input type="hidden" name="upload" value="1"/>
                 
            
				
					<input type="hidden" name="item_name_1" value="donate">
					<input type="hidden" name="amount_1" value="<?php echo $_SESSION['price'];?>"> 
				
					<input type="hidden" name="currency_code_1" value="USD"/>
					
				<input type="hidden" name="submitform"  value="submitform" onClick="submitTwice(this.form)"/> 	
					
				<input type="hidden" name="paynow" value="paypal" />
                  
                  
                     </form>
					 
	<?php  }?>
	
    
       <script type="text/javascript">
onload = function () { document.paypalcart_form.submit();}
</script>
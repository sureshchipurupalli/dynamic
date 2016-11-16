<?php
error_reporting(0);
session_start();
 include("includes/header.php");
 include("includes/menu.php");
 
 if($_POST['submit']=='SUBMIT')
{ 
		
	$forgotpassword = $user_obj->forgotpassword($_POST);
				
		
}

 ?>
 
		
		<link rel="stylesheet" type="text/css" href="plugins/jquery-form-validate/stylesheets/jquery.validate.css" />
        <link rel="stylesheet" type="text/css" href="plugins/jquery-form-validate/stylesheets/style.css" />

 
 
 
 
<div class="inner-banner">
	<h2>FORGOT PASSWORD</h2>
    <p>If you have an account with us, Please Log in.</p>
</div>
<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:1px"></div>
<div class="login-form">
	<div class="mid_wrap">
    	<div class="l-form">
		<?php /*if ($_GET['ferr']!=''){?>
		<div class="error"> <strong>Oops!</strong>  Login Failed</div>
		<?php }else{?>
		
		<?php //if ($_GET['err']!=''){?>
		<div class="success"> You Successfully logged in</div>
		<?php }*/?>
		

    		<!--<p>* Required Fields</p>-->
			<form method="post">
			<?php
			
			if($_GET['err']!='')
			{ ?>
				<span><img src="images/tick.png">  Password Changed Successfully!</span>
			<?php } ?>
			 <input type="text" class="email" id="email" name="email" placeholder="Enter Email" />
            
            <input type="submit" class="log" name="submit" value="SUBMIT" onsubmit="getid(this.value);" />
			</form>
            <!--<a href="#">Forgot User Id or Password?</a>-->
        </div>
       
    </div>
</div>


<?php include("includes/footer.php");?>
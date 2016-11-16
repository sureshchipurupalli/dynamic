<?php
error_reporting(0);
session_start();
 include("includes/header.php");
 include("includes/menu.php");
 
 if($_POST['submit']=='SUBMIT')
{
		
	$password=$user_obj->ResetPassword($_POST);
				
		
}

 ?>
 
 <script src="js/jquery-1.9.1.min.js"></script>
<script src="plugins/jquery-form-validate/javascripts/jquery.validate.js" type="text/javascript"></script>
<script src="plugins/jquery-form-validate/javascripts/jquery.validation.functions.js" type="text/javascript"></script>

<script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function(){
               jQuery("#email").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Please enter a valid Email ID"
                });
				
				 jQuery("#password").validate({
                    expression: "if (VAL.length > 5 && VAL) return true; else return false;",
                    message: "Please enter a valid Password"
                });
                jQuery("#c_password").validate({
                    expression: "if ((VAL == jQuery('#password').val())) return true; else return false;",
                    message: "Confirm password field doesn't match the password field"
                });
				
				 });
            /* ]]> */
        </script>
		
		<link rel="stylesheet" type="text/css" href="plugins/jquery-form-validate/stylesheets/jquery.validate.css" />
        <link rel="stylesheet" type="text/css" href="plugins/jquery-form-validate/stylesheets/style.css" />

 
 
 
 
<div class="inner-banner">
	<h2>RESET PASSWORD</h2>
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
			<!-- <input type="text" class="email" id="email" name="email" placeholder="Enter Email" />-->
            <input type="password" class="email" id="password" name="password" placeholder="Enter New Password*" />
            <input type="password" class="password" id="c_password" name="c_password" placeholder="Re-enter Confirm Password*" />
            <input type="submit" class="log55" name="submit" value="SUBMIT" />
			</form>
            <!--<a href="#">Forgot User Id or Password?</a>-->
        </div>
        <div class="acc">
        	<p>Why Sign Up? It only takes a couple of minutes to create your free account.</p>
           <input type="submit" class="acco" name="submit" value="CREATE  AN ACCOUNT" onclick="location.href='registration.php'" />
		<!--	<a href="registration.php" class="acco" >CREATE  AN ACCOUNT</a>-->
        </div>
    </div>
</div>

<?php include("includes/footer.php");?>
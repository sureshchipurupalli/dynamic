<?php
error_reporting(0);
session_start();
 include("includes/header.php");
 include("includes/menu.php");
 include ('popup.php');
 
 if($_POST['login']=='LOGIN')
{
		//print_r($_POST);exit;
	$sign=$user_obj->checklogin($_POST);
	if($_GET['page']!=""){
	$signs=$user_obj->checkloginid($_POST,$_GET);	
	}
				
		
}

if($_POST['submit']=='CREATE  AN ACCOUNT')
{
		
	header("location:".SITEURL."/registration.php" );
		
}

if($_GET['rid']!='') {
	 $sd="UPDATE tb_regusers SET status = 'Active' WHERE random_id = ".$_GET['rid']."";
	$res23=mysql_query($sd);
	
}


 
 ?>
 
 <!------pop up code----->
 
  <?php if($_GET['ferr']=='LogIn Failed'){ ?>
   <script>
	jQuery(document).ready(function($){
		$("#myUrl2").fancybox({
			closeClick: false,
			closeBtn: false,
			width: '300px',
			height: 'auto', 
			autoSize: false,
			fitToView : false,
			padding: 10,
			margin: 0
		});
		$('a#myUrl2').trigger('click');
	});
</script>
   
<style>
.popup_ok{
	padding:8px 40px;
	 background-color:#030;
	 font-size:16px;
	 color:#fff; 
}
</style>
<a id="myUrl2" href="#back"></a>
<div style="display:none;" class="feedbackthanks">
       <div id="back" align="center">
       <div style="float:right; cursor:pointer;">
        	<?php if($_GET['ferr']=='LogIn Failed'){?>
            	<a href="<?php echo SITEURL."/login.php"?>"><img src="<?php echo SITEURL?>/images/close.png"/></a>
            <?php }else{?>
            	<a href="<?php echo SITEURL."/login.php"?>"><img src="<?php echo SITEURL?>/images/close.png"/></a>
        	<?php }?>
        </div>
        <div class="clear_fix"></div>
        <div class="container-fluid full_wrap">
<?php if($_GET['ferr']=='LogIn Failed'){?>
   <h4>Please Enter Correct Email/Password</h4>
<div style="margin-top:20px; height:30px;"><a href="<?php echo SITEURL."/login.php"?>" class="popup_ok">OK</a></div>
   <?php } ?> </div></div></div>
    <?php }?>
	
	<!----------end of pop up code----------->

 

<script src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
  jQuery.noConflict();
  </script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script src="plugins/jquery-form-validate/javascripts/jquery.validate.js" type="text/javascript"></script>
<script src="plugins/jquery-form-validate/javascripts/jquery.validation.functions.js" type="text/javascript"></script>


	




 <script type="text/javascript">
            /* <![CDATA[ */
           
				
				  jQuery(function(){
               
                jQuery("#email").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Please enter a valid Email ID"
                });
				
				  jQuery("#email").validate({
				   expression: "if (VAL) return true; else return false;",
                    message: "Email should not be empty"
                });
				
                jQuery("#password").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter a valid Password"
                });
               
            });
            /* ]]> */
			</script>
       
<div class="inner-banner">
	<h2>LOGIN</h2>
    <p>If you have an account with us, Please Log in.</p>
</div>
<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:1px"></div>
<div class="login-form">
	<div class="mid_wrap">
    	<div class="l-form">
		<?php //if ($_GET['ferr']!=''){?>
	<!--	<div class="error"> <strong>Oops!</strong>  Login Failed</div>-->
		<?php //}else{?>
		
		<?php //if ($_GET['err']!=''){?>
		<!--<div class="success"> You Successfully logged in</div>-->
		<?php //}?>
		
		
		<link rel="stylesheet" type="text/css" href="plugins/jquery-form-validate/stylesheets/jquery.validate.css" />
        <link rel="stylesheet" type="text/css" href="plugins/jquery-form-validate/stylesheets/style.css" />
		<link rel="stylesheet" type="text/css" href="css/remodal.css" />
		<link rel="stylesheet" type="text/css" href="css/remodal-default-theme.css" />

    		<!--<p>* Required Fields</p>-->
			<form method="post">
            <input type="text" class="email" id="email" name="email" placeholder="Email Address*" />
            <input type="password" class="password" id="password" name="pswrd" placeholder="Password*" />
            <input type="submit" class="log2" name="login" value="LOGIN" />
			</form>
            <a href="forgotpassword.php">Forgot User Id or Password?</a>
        </div>
        <div class="acc">
        	<p>Why Sign Up? It only takes a couple of minutes to create your free account.</p>
           <input type="submit" class="acco" name="submit" value="CREATE  AN ACCOUNT" onclick="location.href='registration.php'" />
		<!--	<a href="registration.php" class="acco" >CREATE  AN ACCOUNT</a>-->
        </div>
    </div>
</div>


		<!----------end of modal---------->
		



<?php include("includes/footer.php");?>



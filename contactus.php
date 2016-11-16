<?php 
error_reporting(0);
session_start();
 include("includes/header.php");
 include("includes/menu.php");
 include ("popup.php");
 
 if($_POST['login']=='LOGIN')
{
		//print_r($_POST);exit;
	$sign=$user_obj->checklogin($_POST);
				
		
}

if($_POST['submit']=='CREATE AN ACCOUNT')
{
		
	header("location:".SITEURL."/registration.php" );
		
}


 
 ?>
 
 
 <?php if($_GET['msg']=='LogIn Failed'){ ?>
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
        	<?php if($_GET['msg']=='LogIn Failed'){?>
            	<a href="<?php echo SITEURL."/login.php"?>"><img src="<?php echo SITEURL?>/images/close.png"/></a>
            <?php }else{?>
            	<a href="<?php echo SITEURL."/login.php"?>"><img src="<?php echo SITEURL?>/images/close.png"/></a>
        	<?php }?>
        </div>
        <div class="clear_fix"></div>
        <div class="container-fluid full_wrap">
<?php if($_GET['msg']=='LogIn Failed'){?>
   <h4>Please Enter Correct Email/Password</h4>
<div style="margin-top:20px; height:30px;"><a href="<?php echo SITEURL."/login.php"?>" class="popup_ok">OK</a></div>
   <?php } ?> </div></div></div>
    <?php }?>

 
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
	<h2>CONTACT US</h2>
    
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
			 <input type="text" class="email" id="name" name="name" placeholder="Enter Your Name*" />
            <input type="text" class="email" id="email" name="email" placeholder="Enter Email Address*" /><br><br>
          <textarea class="description" placeholder="Enter message here" id="description" name="description"></textarea>
            <input type="submit" class="log" name="login" value="SUBMIT" />
			</form>
           
    </div>
</div>


		<!----------end of modal---------->
		<script type="text/javascript">
		var jq = $.noConflict();
	jq(document).ready(function(){
		 <?php if($_GET['ferr']!=''){?>
		 alert("media3");
		 
		jq('#pop1').simplePopup();
		<?php } ?>
		
		jq('#update').click(function() {
        jq('#update').simplePopup('hide');
        });
		
	});
	</script>



<?php include("includes/footer.php");?>



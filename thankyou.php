<?php 
include 'includes/header.php'; 
  if($_SESSION['CART_TEMP_RANDOM']=="") {
  header('Location:index.php');
 }  
?>

<!-----registration  pop up code -->

<link rel="stylesheet" type="text/css" href="<?php echo SITEURL; ?>/css/fancyBox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo SITEURL; ?>/css/fancyBox/source/jquery.fancybox.js?v=2.1.5"></script> 

  <?php if($_GET['ret']=='success'){ ?>
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
	 background-color:#33a3d7;
	 font-size:16px;
	 color:#fff; 
}
</style>
<a id="myUrl2" href="#back"></a>
<div style="display:none;" class="feedbackthanks">
       <div id="back" align="center">
       <div style="float:right; cursor:pointer;">
        	<?php if($_GET['ret']=='success'){?>
            	<a href="<?php echo SITEURL."/thankyou.php"?>"><img src="<?php echo SITEURL?>/images/close.png"/></a>
        	<?php }?>
        </div>
        <div class="clear_fix"></div>
        <div class="container-fluid full_wrap" style="height:110">
<?php if($_GET['ret']=='success'){?>
   <h4>Your Donation completed Successfully</h4>
<div style="margin-top:20px; height:30px;"><a href="<?php echo SITEURL."/thankyou.php"?>?tid=<?php echo $_GET['tid']?>" class="popup_ok">OK</a></div>
 
	<?php }?>
    </div></div></div>
    <?php }?>
<!----- pop up code -->


<div class="full_wrapper">
 <div class="site_container">
    <div class="content_wrap">
      <h1 style="text-align:center;"> THANK YOU</h1>
      <?php //if($_GET['tid']!='') {?>
       <div style="font-weight:bold; min-height:400px; text-align:center; margin:55px; font-size:24px;">
       Thank you for your Donation....!
       
       <br/>
       Thank you ,
       <br/>
      Dynamic Database.com
	  <br/>
  	  <a href="index.php" style="color:#33a3d7;">Click Here To Go To Home Page</a> 
      </div>

    <?php  //} ?>
    </div><!--content_wrap-->
 </div><!--site_container-->
</div><!--full_wrapper-->
<div class="clear_fix"></div>
 <?php include 'includes/footer.php'; ?>



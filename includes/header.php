<?php 
error_reporting(0);
ob_start();
session_start();

include('dbconfig.php');
include('administrator/includes/dbconnection.php');
include ('popup.php');

//include('administrator/model/sitesettings.class.php');
include('model/frontend.class.php');	
$frontend_obj=new frontendClass();

include("model/user_class.php");
$user_obj=new userClass();

 $tt="select * from tb_country where status='active'";
				//$rr=mysql_query($tt);
				$ee=$callConfig->getALLRows($tt);
				
/*-------------get users country based on ip address-----------*/
/*Get user ip address*/
$ip_address=$_SERVER['REMOTE_ADDR'] ;
echo $ip_address;
 
/*Get user ip address details with geoplugin.net*/
$geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip_address;
$addrDetailsArr = unserialize(file_get_contents($geopluginURL)); 

/*Get City name by return array*/
$city = $addrDetailsArr['geoplugin_city']; 

/*Get Country name by return array*/
$country = $addrDetailsArr['geoplugin_countryName'];

/*Comment out these line to see all the posible details*/
/*echo '<pre>';
print_r($addrDetailsArr);
die();*/

if(!$city){
   $city='Not Define';
}if(!$country){
   $country='Not Define';
}
echo '<strong>IP Address</strong>:- '.$ip_address.'<br/>';
echo '<strong>City</strong>:- '.$city.'<br/>';
echo '<strong>Country</strong>:- '.$country.'<br/>';
/*----------------end of code-----------------------------*/
				

?>


 <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
 <script src="js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
      $("#slider1").responsiveSlides({
        maxwidth: 1800,
        speed: 800
      });

     
    });
</script>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dynamic Database</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<link href="css/responsive.css" rel="stylesheet" type="text/css" />
 
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<!--<script src="js/jquery.min.js"></script>-->

<script type="text/javascript">
$(document).ready(function(){
 $(".menu_trigger").click(function(){
  $(".nav>ul").slideToggle();
 });
 
 
  $(".submenu1").click(function(){
  $(".submenu1 ul").slideToggle();
 });

  $(".submenu2").click(function(){
  $(".submenu2 ul").slideToggle();
 });

  $(".submenu3").click(function(){
  $(".submenu3 ul").slideToggle();
 });


  $(".submenu4").click(function(){
  $(".submenu4 ul").slideToggle();
 });

  $(".submenu5").click(function(){
  $(".submenu5 ul").slideToggle();
 });
 $(".submenu6").click(function(){
  $(".submenu6 ul").slideToggle();
 });
 
  $(".submenu9").click(function(){
  $(".submenu9 ul").slideToggle();
 });

});
</script>


<script type="text/javascript">
$(document).ready(function(){
 $(".menu_trigger").click(function(){
  $(".m_nav").slideToggle();
 });

 $(".search_blg_right1").click(function(){
  $(".nav_list20").slideToggle();
 });

});
</script>
<script>
$(function(){
  $('.info_link').click(function(){
	  var data= $(this).text();
	// var details= document.getElementById('ccc').innerHTML=data;
	 var details=  $('#ccc')[0].innerHTML = data;
	 $("#atd").html(data); 
	 //alert(details);
	  
    //alert(data);
  });
});
</script>


<!--<script>
 $('#ccc').click(function(){
	 $(this).text()= $(".info_link").text();
 });
</script>-->



<script type="text/javascript">
/*function changeText2(){
	
    var lol = document.getElementById('info_text').innerHTML;
       alert(lol);
}*/
</script>
</head>
<body>

<?php 
$strtotime = strtotime("now");


// output
echo date('d M Y H:i:s',$strtotime);
 //$date = date('Y-m-d', $strtotime);
 echo "<br>";
 

echo $date;
echo date(" H:i:s", time());?>
<div class="header">
	<div class="mid_wrap">
    <div class="country_select">
    <span id="c_logo">Select Country <a href="#open-modal18" id="select_conuntry">
   <!-- <label for="modal-en_flag" ><span id="ccc">click here</label></a></span></span>-->
	<span id="ccc">click here</a></span></span>
    </div>
    <div id="atd"></div>
    <div class="clear_fix"></div>
    
    	<div class="header-left">
        	<a href="index.php"><img src="images/logo.png" alt="logo"  /></a>
        </div>
        <div class="header-right">
        	
            <div class="social">
            	<a href="https://www.facebook.com/" target="_blank"><img src="images/facebook.png" /></a>
				<a href="https://twitter.com/" target="_blank"><img src="images/twitter.png" /></a>
				<a href="https://googleplus.com/" target="_blank"><img src="images/google.png" target="_blank" /></a> 
                
				<a href="https://www.linkedin.com/" target="_blank"><img src="images/in.png" /></a>
				<a href="https://www.youtube.com/" target="_blank"><img src="images/you-tube.png" /></a>
            </div>
			<div class="clear_fix"></div>
			
			<?php if($_SESSION['id']!=''){ ?>
			<div class="user_profile">
       <span>Welcome <?php echo $_SESSION['fname'];?></span><a href="#" class="search_blg_right1"><img src="images/acc_pic1_06.png" alt="arrow" class="arrowimg" style="margin-left:5px;"></a>
			<ul class="nav_list20">
                	<li ><a href="profile.php">My Account</a></li>
					<li ><a href="password.php">Change Password</a></li>
            		<li ><a href="logout.php">Logout</a></li>
					</ul>
			</div>
            
            
			<?php }else{?>
		
			<div class="contact">
            	<ul>
                	<li><a href="#">CALL US 800-481-8440</a></li>			
					
                    <li><p>You can <a href="login.php" style="color:#33a3d7;font-weight:600">log in</a> or <a href="registration.php" style="color:#33a3d7;font-weight:600">sign up</a> using Dynamic Database</p></li>
				
                    <div class="clear_fix"></div>
                </ul>	
            </div>
			<?php }?>
            <div class="clear_fix"></div>
        </div>
        <div class="clear_fix"></div>
    </div>
</div>

    <link href="css/flags.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.js"></script>
<!------------country list------------->


<!--<input class="modal-state" id="modal-en_flag" type="checkbox" />
<div class="modal" style="z-index:11;">
  <label class="modal__bg" for="modal-en_flag"></label>
  <div class="modal__inner" style="height: 80%;width: 75%; ">
    <label class="modal__close" for="modal-en_flag"></label>
   

<h1><strong>Select County</strong></h1>
<ul>
 <?php //foreach($ee as $ee1 ){
	// print_r($ee1);?>      
	<li><a href="dashboard20.php" class="info_link" id="info_text" onClick="changeText2()"><?php //echo $ee1->country_name;?></a></li>
    <?php //} ?>
 </ul>

</div>
</div>-->
<!---------------end of country------------>
<style>
.modal__inner ul{float:left;min-height:80%}
.modal__inner ul{-moz-column-count: 3;
    -moz-column-gap: 20px;
    -webkit-column-count: 3;
    -webkit-column-gap: 20px;
    column-count: 3;
    column-gap: 20px;
	margin-top: 20px;}
	
.modal__inner ul a{
	color:#222;
}
.modal__inner ul li{font-family:'Source Sans Pro', sans-serif;font-size:12px}
.modal__inner h1{font-family:'Source Sans Pro', sans-serif;font-size:22px;}
</style>

<!------------------demo popup------------>
<!--<link rel="stylesheet" href="css/popreset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/popstyle.css"> <!-- Resource style -->
<section class="background18">
 <!-- <a href="#open-modal" class="button">Open Modal with CSS</a>-->
  <div id="open-modal18" class="modal__background18">	
    <div class="modal__content18">
      <a href="#close" title="Close" class="close" style="float:right">
     <svg x="0px" y="0px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
<g id="Layer_3">
	<path d="M34.421,24.02l13.318-13.268c0.188-0.187,0.294-0.44,0.294-0.706c0-0.266-0.104-0.52-0.292-0.708
		l-8.983-9.018c-0.187-0.187-0.441-0.293-0.707-0.294c0,0-0.001,0-0.001,0c-0.265,0-0.519,0.104-0.706,0.292L24.027,13.587
		L10.759,0.267c-0.187-0.187-0.441-0.293-0.707-0.294c0,0-0.001,0-0.001,0c-0.265,0-0.519,0.104-0.706,0.292L0.328,9.248
		c-0.392,0.39-0.393,1.023-0.003,1.414L13.593,23.98L0.274,37.248c-0.391,0.39-0.392,1.023-0.003,1.414l8.983,9.018
		c0.187,0.188,0.441,0.293,0.707,0.294h0.002c0.265,0,0.518-0.104,0.705-0.292l13.318-13.267l13.268,13.318
		c0.195,0.196,0.452,0.294,0.708,0.294c0.255,0,0.511-0.097,0.706-0.292l9.017-8.982c0.392-0.39,0.393-1.022,0.003-1.414
		L34.421,24.02z"/>
</g>
</svg>
      </a>
      <h1><strong>Select Country</strong></h1>
<ul>
 <?php foreach($ee as $ee1 ){
	// print_r($ee1);?>      
	<li><a href="dashboard20.php" class="info_link" id="info_text" onClick="changeText2()"><?php echo $ee1->country_name;?></a></li>
    <?php } ?>
 </ul>
     <!-- <img class="success18" src="http://bibliocrunch.com/wp-content/uploads/2015/02/feeling-mighty-successful.jpg"/>-->
    </div>
  </div>
<!----------------------end of popup--------->
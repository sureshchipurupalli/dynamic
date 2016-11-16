<?php include("includes/header.php");
include("includes/menu.php");
$complaintdetails=$frontend_obj->getcomplaintdetails($_GET['id']);
//print_r($complaintdetails);
?>



    <link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>


<div class="inner-banner">
	<h2>View COMPLAINT</h2>
    <p>For every case reported we will need to assign it</p>
</div>
<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:1px">


</div>
 
 

<div class="full_wrapper"  >



 <div class="site_container">
   <div class="toy_inner">
   
   
   
   
    <div class="toy_left">
     <!--<img src="images/redbag_03.jpg">-->
	 
	 <?php 
	 
		if($complaintdetails->image!=""){ 
	 
		$ee = explode('.',$complaintdetails->image);
		if($ee[1]=='mp4'){ ?>
		<video width="100%" height="200" controls="controls" >
		<source src="uploads/complaints/<?php echo $complaintdetails->image; ?>" type="video/mp4">
		<object data="" width="100%" height="200">
		<embed width="100%" height="200" src="uploads/complaints/<?php echo $complaintdetails->image; ?>">
		</object>
		</video>
		<?php } else { ?>
		<img src="uploads/complaints/thumbs/<?php echo $complaintdetails->image; ?>" alt="">
		<?php } } else{?>
		
        <img src="images/noimageavailable.gif" alt="">
        
		<?php }?>
		
		 
         </div><!--toy-left-->
		 
      <div <?php if($complaintdetails->image!=""){?> class="toy_right" <?php } else {?> class="toy_right1"<?php }?>>
	  <ul>
	  <li>
			<div class="toy_titles">
			<p>Title:</p>
			</div>
			
			<div class="toy_text">
			<p><?php echo $complaintdetails->title; ?></p>
			</div>
	  		<div class="clear_fix"></div>
	</li>
	
	<li>
			<div class="toy_titles">
			<p>Description:</p>
			</div>
			
			<div class="toy_text">
			<p><?php echo $complaintdetails->description; ?></p>
			</div>
	  		<div class="clear_fix"></div>
	</li>
	<?php $getuserdetails=$frontend_obj->getuserdetailsfetch($complaintdetails->user_id);?>
	<li>
			<div class="toy_titles">
			<p>User Name:</p>
			</div>
			
			<div class="toy_text">
			<p><?php echo $getuserdetails->firstname; ?></p>
			</div>
	  		<div class="clear_fix"></div>
	</li>
	
	<li>
			<div class="toy_titles">
			<p>Price:</p>
			</div>
			
			<div class="toy_text">
			<p>$<?php echo $complaintdetails->price; ?></p>
			</div>
	  		<div class="clear_fix"></div>
	</li>
	
	<li>
			<div class="toy_titles">
			<p>Location :</p>
			</div>
			
			<div class="toy_text">
			<p><?php echo $complaintdetails->country_name; ?></p>
			</div>
	  		<div class="clear_fix"></div>
	</li>
	
	</ul>
				
      		<?php /*?><h6>Title: <?php echo $complaintdetails->title; ?></h6>
			<p>Description: <?php echo $complaintdetails->description; ?></p>
        	<!--<p>Price $36.00</p>
            <span>MRP:$109.00</span>-->
			<?php $getuserdetails=$frontend_obj->getuserdetailsfetch($complaintdetails->user_id);?>
			<p>User Name: <?php echo $getuserdetails->firstname; ?></p>
        	<p style="color:#000;">$<?php echo $complaintdetails->price; ?></p>
                        	
                  <div class="clear_fix"></div>
                <div class="msg_blog">
				<p>Location :<?php echo $complaintdetails->country_name; ?></p>
                	<!--<ul>
                		<li>
                			<span><img src="images/mailimg_03.jpg"></span><a href="#">email to a friend</a>
                		</li>
                		<li>
                 			<span><img src="images/heartimg_05.jpg"></span><a href="#">add to wishlist</a>
                        </li>    
                 		<li>
                 			<span><img src="images/barimg_07.jpg"></span><a href="#">add to compare</a>
                 		</li>
                        <div class="clear_fix"></div> 
                        </ul>-->
                </div><!--msg-blog--><?php */?>
         		
        </div><!--toy-right-->
        <div class="clear_fix"></div>
        
       <!-- <div class="product_des_btm">
            	
                
                    <div id="k1">
                    <ul>
                    <li><a href="#tab-4">Description</a></li>
                    <li><a href="#tab-5">Additional Information</a></li>
                    <li><a href="#tab-6">Reviews</a></li>
                    </ul>
                
                    <div id="tab-4">
                        
                       	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec quam turpis. Nulla a nulla pharetra, vestibulum nibh quis, blandit libero.</p>
                    </div>
                
                    <div id="tab-5">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec quam turpis. Nulla a nulla pharetra, vestibulum nibh quis, blandit libero.qqqqq</p>
                    </div>
                
                    <div id="tab-6">
                    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec quam turpis. Nulla a nulla pharetra, vestibulum nibh quis, blandit liberoeeeeeeeeee.</p>
                    </div>
                    </div>
    
            </div>-->
         </div><!--toinner--->




          
           
        </div><!--site-container-->
        
 
 </div>         
           
        <div class="clear_fix"></div>    

<!--full_wrap-->




<!--------------------------Tabs --------------------------------------->

<link href="css/responsive-tabs.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/jquery.responsiveTabs.js" type="text/javascript"></script>

<script type="text/javascript">

	$(document).ready(function () {

	$('#k').responsiveTabs({

	startCollapsed: 'accordion', // Start with the panels collapsed if the view is currently accordion based

	collapsible: true, // Tabs can be collapsed

	rotate: false // Tabs auto rotate

	});

	});

	</script>
    
    
    
    
    
    
    
    
    
    <link href="css/responsive-tabs1.css" rel="stylesheet" type="text/css">
<link href="css/style1.css" rel="stylesheet" type="text/css">

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
<script src="js/jquery.responsiveTabs1.js" type="text/javascript"></script>

<script type="text/javascript">

	$(document).ready(function () {

	$('#k1').responsiveTabs({

	startCollapsed: 'accordion', // Start with the panels collapsed if the view is currently accordion based

	collapsible: true, // Tabs can be collapsed

	rotate: false // Tabs auto rotate

	});

	});

	</script>

<!--------------------------Tabs --------------------------------------->
</body>
         
           
           

<!--full_wrap-->
<?php include("includes/footer.php");?>




<!--------------------------Tabs --------------------------------------->

<link href="html/LOCATOYcartinnerpage/css/responsive-tabs.css" rel="stylesheet" type="text/css">
<link href="html/LOCATOYcartinnerpage/css/style.css" rel="stylesheet" type="text/css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/jquery.responsiveTabs.js" type="text/javascript"></script>

<script type="text/javascript">

	$(document).ready(function () {

	$('#k').responsiveTabs({

	startCollapsed: 'accordion', // Start with the panels collapsed if the view is currently accordion based

	collapsible: true, // Tabs can be collapsed

	rotate: false // Tabs auto rotate

	});

	});

	</script>
    
    
    
    
    
    
    
    
    <link href="css/responsive-tabs1.css" rel="stylesheet" type="text/css">
<link href="css/style1.css" rel="stylesheet" type="text/css">

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
<script src="js/jquery.responsiveTabs1.js" type="text/javascript"></script>

<script type="text/javascript">

	$(document).ready(function () {

	$('#k1').responsiveTabs({

	startCollapsed: 'accordion', // Start with the panels collapsed if the view is currently accordion based

	collapsible: true, // Tabs can be collapsed

	rotate: false // Tabs auto rotate

	});

	});

	</script>

<!--------------------------Tabs --------------------------------------->
</body>
</html>

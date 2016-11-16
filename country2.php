<?php 
include("includes/header.php");



include("includes/menu.php");
$contdetails=$frontend_obj->GetAllContinents();
?>
<link href="css/jquery.drawer.css" rel="stylesheet" type="text/css">
<script src="js/jquery.drawer.js"></script>
<script src="js/demo.js"></script>





<div class="about_left">
            	
                <h1>About Us</h1>
               
               <!-- <h2>24 by 7</h2>
                <img src="images/logo1.png">-->
				                
                <?php foreach($contdetails as $details) {?>
                
             	<div class="drawer-item">
                    <div class="drawer-header"  style="border-top:0;">
                      	<h2><?php echo $details->title; ?></h2>
						
                     <div class="drawer-header1-icon"></div>
                     <div class="clear_fix"></div>
                   </div>
                   <div class="drawer-content">
                
                       <p>fdsfgdgfhfhgh</p>
                     
                   </div>
   			</div><!--drawer-item-->
            <?php } ?>
            </div><!--about_left-->
	
	
		</ul>
	
	
	
</ul>
</div>

<?php include("includes/footer.php");?>


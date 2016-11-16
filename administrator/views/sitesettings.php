<?php
		
 error_reporting(0);
 
include ("includes/header.php") ;

	 
$site_settings_disp=sitesettingsClass::getsitesettings();


if($_POST['submit']=="sitesettings")

{
//print_r($_FILES);exit;

$res=sitesettingsClass::sitesettings($_POST);

}



	?>
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<?php include ("includes/leftnav.php" )?>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.php?option=com_dashboard">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Site Settings</a></li>
			</ul>
			
			<?php 
			 
			if($option=='com_sitesettings'){ ?>
			

<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span><?php echo $hdn_value1;?></h2>
						<div class="box-icon">
							<a href="index.php?option=com_sitesettings"><img src='img/back_icon.png'></i></a>
							<!--<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>-->
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" enctype="multipart/form-data">
						  <fieldset>
						  
						  <div class="control-group">
							  <label class="control-label" for="typeahead">Admin Page Title</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="admin_title" name="title" value="<?php echo $site_settings_disp->title;?>">
							
							  </div>
							</div>
                            
                            
                       
                        
                        <div class="control-group">
							  <label class="control-label" >Logo</label>
							  <div class="controls"  style="width:660px;">
							    <?php if($site_settings_disp->site_image!=''){?>
                        <img src="../uploads/sitesettings/<?php echo $site_settings_disp->site_image;?>" style="height:150px; width: 200px;" />
                         <input type="hidden" name="hdn_image" value="<?php echo  stripslashes($site_settings_disp->site_image);?>" />    
						 <?php } ?>
								<input type="file" class="input-file uniform_on" id="fileInput"  name="profile" value="<?php echo  stripslashes($site_settings_disp->site_image);?>"  />
                                <!--<input type="hidden" name="hdn_profile" size="24" value="
								<?php //echo $site_settings_disp->site_image; ?>" />-->
                                
							  </div>
							</div>

                   
                            
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">From Name</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="from_name" name="mail_fromname" value="<?php echo $site_settings_disp->mail_fromname;?>">
							
							  </div>
							</div>
                            
                             <div class="control-group">
							  <label class="control-label" for="typeahead">Admin Email Address</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="admin_email" name="mail_frommail" value="<?php echo $site_settings_disp->mail_frommail;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Receive Mail Address for Contact Us Form</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="receive_mail" name="contactusmail" value="<?php echo $site_settings_disp->contactusmail;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Phone number</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="phone_number" name="phone" value="<?php echo $site_settings_disp->phone;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Fax number</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="fax_number" name="fax" value="<?php echo $site_settings_disp->fax;?>">
							
							  </div>
							</div>
                            
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Contact Address</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="contact_address" name="address" value="<?php echo $site_settings_disp->address;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Facebook</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="facebook" name="facebook_link" value="<?php echo $site_settings_disp->facebook_link;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Twitter</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="twitter" name="twitter_link" value="<?php echo $site_settings_disp->twitter_link;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Youtube</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="youtube" value="<?php echo $site_settings_disp->youtube;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Google plus</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="googleplus" value="<?php echo $site_settings_disp->googleplus;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Linkedin</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="linkedin" name="linkedin" value="<?php echo $site_settings_disp->linkedin;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Footer</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="footer" name="footer_txt" value="<?php echo $site_settings_disp->footer_txt;?>">
							
							  </div>
							</div>
							<!--<div class="control-group">
							  <label class="control-label" for="date01">Date input</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
							  </div>
							</div>-->
							
						
							
							
							

							<!--<div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div> -->         
							<!--<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="description"><?php echo $site_settings_disp->description;?></textarea>
							  </div>
							</div>-->
							<div class="form-actions">
			 
                        <input  type="hidden" value="sitesettings"  name="submit" />

                        <input type="submit"  value="Update" class="btn btn-primary">
							  
							 <!--<button type="reset" class="btn">Cancel</button> -->
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->
				
				

			</div><!--/row-->
			
			</div>


<?php }
else {
?>

<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span><?php echo $hdn_value1;?></h2>
						<div class="box-icon">
							<a href="index.php?option=com_sitesettings"><img src='img/back_icon.png'></i></a>
							<!--<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>-->
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post">
						  <fieldset>
						  
						  <div class="control-group">
							  <label class="control-label" for="typeahead">AdminPage Title</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="admintitle" name="title" value="<?php echo $site_settings_disp->title;?>">
							
							  </div>
							</div>
							
                            
                            
                       
							
                            
                            <div class="control-group">
							  <label class="control-label" for="fileInput">logo</label>
							  <div class="controls"  style="width:660px;">
							    <?php if($site_settings_disp->site_image!=''){?>
                        <img src="uploads/sitesettings/<?php echo $site_settings_disp->site_image;?>" style="height:150px; width: 200px;" />
						 <?php } ?>
								<input class="input-file uniform_on" id="fileInput" type="file" name="profile" value="<?php echo  stripslashes($site_settings_disp->site_image);?>" >
							  </div>
							</div>
                            
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">From Name</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="fromname" name="mail_fromname" value="<?php echo $site_settings_disp->mail_fromname;?>">
							
							  </div>
							</div>
                            
                             <div class="control-group">
							  <label class="control-label" for="typeahead">Admin Email Address</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="admin_email" name="mail_frommail" value="<?php echo $site_settings_disp->mail_frommail;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Receive Mail Address for Contact Us Form</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="receive_email" name="contactusmail" value="<?php echo $site_settings_disp->contactusmail;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Phone number</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="phone_number" name="phone" value="<?php echo $site_settings_disp->phone;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Fax number</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="fax_number" name="fax" value="<?php echo $site_settings_disp->fax;?>">
							
							  </div>
							</div>
                            
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Contact Address</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="contact_address" name="address" value="<?php echo $site_settings_disp->address;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Facebook</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="facebook" name="facebook_link" value="<?php echo $site_settings_disp->facebook_link;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Twitter</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="twitter" name="twitter_link" value="<?php echo $site_settings_disp->twitter_link;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Youtube</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="youtube" name="youtube" value="<?php echo $site_settings_disp->youtube;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Google plus</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="google_plus" name="googleplus" value="<?php echo $site_settings_disp->googleplus;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Linkedin</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="linkedin" name="linkedin" value="<?php echo $site_settings_disp->linkedin;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Footer</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="footer" name="footer_txt" value="<?php echo $site_settings_disp->footer_txt;?>">
							
							  </div>
							</div>
							<!--<div class="control-group">
							  <label class="control-label" for="date01">Date input</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
							  </div>
							</div>-->
							
						
							
							
							

							<!--<div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div> -->         
							<!--<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="description"><?php //echo $site_settings_disp->description;?></textarea>
							  </div>
							</div>-->
							<div class="form-actions">
			 
                        <input  type="hidden" value="sitesettings"  name="submit" />

                        <input type="submit"  value="Update" class="btn btn-primary">
							  
							 <!--<button type="reset" class="btn">Cancel</button> -->
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->
				
				

			</div><!--/row-->
			
			</div>
			
			<?php } ?>
			
			
			
			
<div class="clearfix"></div>

<!-----------jquery validations----------------->
       <script src="js/jquery-1.9.1.min.js"></script>
<script src="plugins/jquery-form-validate/javascripts/jquery.validate.js" type="text/javascript"></script>
<script src="plugins/jquery-form-validate/javascripts/jquery.validation.functions.js" type="text/javascript"></script>
<link href="css/jquery.validate.css" rel="stylesheet">
	
<!-- start: JavaScript-->
  <script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function(){
				//alert("Hi...");
                jQuery("#admin_title").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please Enter the Title"
                });
               
			   
			    jQuery("#from_name").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please Enter the From Name"
                });
               
                
                jQuery("#typeahead1").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Username"
                });
              
                
                jQuery("#admin_email").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Please Enter a Valid Admin Email ID"
                });
				
				 jQuery("#receive_email").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Please Enter a Valid Receive Email ID"
                });
				
				 jQuery("#phone_number").validate({
                    expression: "if (VAL ) return true; else return false;",
                    message: "Please Enter valid Phone Number"
                });
				
				 jQuery("#fax_number").validate({
                    expression: "if (VAL ) return true; else return false;",
                    message: "Please Enter valid Fax Number"
                });
				
				
			    jQuery("#contact_address").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please Enter the Contact Address"
                });
				
				 jQuery("#facebook").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please Enter the Valid Facebook Id"
                });
				
				 jQuery("#twitter").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please Enter the Valid Twitter Id"
                });
				
				
				 jQuery("#linkedin").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please Enter the Valid Linkedin Id"
                });
				
				
				 jQuery("#youtube").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please Enter the Valid Youtube Id"
                });
				
				 jQuery("#googleplus").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please Enter the Valid Googleplus Id"
                });
				
				jQuery("#footer").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please Enter the  Footer Text"
                });
				  
                jQuery("#pwd").validate({
                    expression: "if ( VAL) return true; else return false;",
                    message: "Password field should not be blank"
                });
				
				jQuery("#cpwd").validate({
                    expression: "if ((VAL == jQuery('#password').val()) && VAL) return true; else return false;",
                    message: "Confirm password field doesn't match the password field"
                });
				
				jQuery("#fileInput").validate({
                    expression: "if (VAL.length > 8 ) return true; else return false;",
                    message: "Please select file"
                });
				
				jQuery("#status").validate({
                    expression: "if (VAL ) return true; else return false;",
                    message: "Please select Status"
                });
				
				
            });
            /* ]]> */
        </script>
		
		<!---------end of validations--------------->
		 


<!-- start: JavaScript-->

		
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
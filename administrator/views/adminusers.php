<?php		
 error_reporting(0);
 
 
	include ("includes/header.php") ;
	
	$users=sitesettingsClass::getsitesettings();
	
	if($_POST['submit']=='Submit')
	{	
	
		
		$details=$userObj->insertAdminUser($_POST);
		
		}
		
		$userdetails=$userObj->getAllUsersList();
		$indivdata=$userObj->getadminData($_GET['id']); 
		

		if(isset($_GET['id']) && $_GET['id']!="")
		{
			$hdn_value="Update";
			$hdn_value1="Edit";
			
		}
		else
		{
			$hdn_value="Submit";
			$hdn_value1="Add";
		}
		
		if($_POST['submit']=='Update')
		{
		
			$updatedetails=$userObj->updateAdminUser($_POST,$_GET['id']);
			
			}
			
			
			
		if($_GET['action']=="delete"){
		
			$userObj->adminuserDelete($_GET['id']); 
			
			}
		
		

	
	?>
	
	
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
                jQuery("#uname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Username"
                });
               
                
                jQuery("#fname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the firstname"
                });
              
                
                jQuery("#email").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Please enter a valid Email ID"
                });
				
				 jQuery("#phone").validate({
                    expression: "if (VAL ) return true; else return false;",
                    message: "Please enter valid phone number"
                });
				
				  
                jQuery("#password").validate({
                    expression: "if ( VAL) return true; else return false;",
                    message: "Password field should not be blank"
                });
				
				jQuery("#password").validate({
                    expression: "if (VAL.length > 8 ) return true; else return false;",
                    message: "Password is too short"
                });
				
				jQuery("#roletype").validate({
                    expression: "if (VAL.length > 8 ) return true; else return false;",
                    message: "Please select Role type"
                });
				
				jQuery("#status").validate({
                    expression: "if (VAL.length > 8 ) return true; else return false;",
                    message: "Please select Status"
                });
                jQuery("#cpassword").validate({
                    expression: "if ((VAL == jQuery('#password').val()) && VAL) return true; else return false;",
                    message: "Confirm password field doesn't match the password field"
                });
              
            });
            /* ]]> */
        </script>
		
		<!---------end of validations--------------->
		 
	                
<script>
function isNumberKey(evt){
var charCode = (evt.which) ? evt.which : evt.keyCode;
if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;
return true;
}
</script>
	 
	
	
	
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
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Admin Users</a></li>
			</ul>
			
			<?php if($option=='com_adminlist'){ ?>
			
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Admin Users
						<div class="box-icon">
							<a href="index.php?option=com_adminlist_insert"><img src="img/add_icon.png"></a>
							<!--<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>-->
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
									<th>S.no</th>
								  	<th>Firstname</th>
								   <th>Email</th>
								   <th>Phone number</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  
						  <?php $i=1;
								foreach($userdetails as $users)
								{ ?>
							
							<tr>
								<td><?php echo $i;?></td>
								<td class="center"><?php echo $users->firstname; ?></td>
								<td class="center"><?php echo $users->email;?></td>
								<td class="center"><?php echo $users->phone_number;?></td>
								<td class="center"><span class="label label-success">Active</span></td>
								
								<td class="center">
									
									<a class="btn btn-info" href="index.php?option=com_adminlist_edit&id=<?php echo $users->id;?>">
										<i class="halflings-icon white edit"></i>                                            
									</a>
									
									<?php if($_SESSION['roletype']=='superadmin') { ?>
									<a class="btn btn-danger" href="#"onClick="var q = confirm('Are you sure you want to delete selected record?'); 
									if (q) { window.location = 'index.php?option=com_adminlist&action=delete&id=<?php echo $users->id;?>'; return false;}">
										<i class="halflings-icon white trash"></i> 
										
									</a>
									<?php } ?>
								</td>
							</tr>
							<?php $i++;}?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			  </div><!--/row-->
		  </div><!--end of content-->
	  </div>
</div>


<?php }
else {
?>

<div class="row-fluid sortable">
				
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span><?php echo $hdn_value1 ;?> User</h2>
						<div class="box-icon">
							<a href="index.php?option=com_adminlist"><img src='img/back_icon.png'></i></a>
							<!--<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>-->
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" enctype="multipart/form-data">
						  <fieldset>
						  	
						  <div class="control-group">
							  <label class="control-label" for="typeahead">FirstName</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="fname"  name="fname" value="<?php echo $indivdata->firstname;?>" >
							  </div>
							</div>
                            
                            
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">UserName </label>
							  <div class="controls">
								
								<input type="text" class="span6 typeahead" id="uname"  name="uname" value="<?php echo $indivdata->user_name;?>" >
							
							  </div>
							</div>
                            
                            
                            
                            
                            <div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls"  style="width:660px;">
							    <?php if($indivdata->profile_image!=''){?>
							    <?php } ?>
                                <img src="uploads/users/<?php echo $indivdata->profile_image;?>" style="height:150px; width: 200px;" />
								<input class="input-file uniform_on" id="fileInput" type="file" name="profile" value="<?php echo  stripslashes($indivdata->profile_image);?>" >
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Email</label>
							  <div class="controls">
								<input type="email" class="span6 typeahead" id="email"  name="email" value="<?php echo $indivdata->email;?>" >
							
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Phone Number </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="phone"  name="phone" value="<?php echo $indivdata->phone_number;?>" onkeypress="return isNumberKey(event);" >
							
							  </div>
							</div>
							
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Password </label>
							  <div class="controls">
								<input type="password" class="span6 typeahead" id="password" name="password" >
							
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Confirm Password </label>
							  <div class="controls">
								<input type="password" class="span6 typeahead" id="cpassword"   name="password" >
							
							  </div>
							</div>
							
							<div class="control-group">
								<label class="control-label" for="selectError3">Roletype</label>
								<div class="controls">
								  <select name="roletype" id="roletype">
								  <option value="">Select Role</option>
									<option value="Superadmin">Superadmin</option>
									<option value="Admin">Admin</option>
									
									
								  </select>
								  
								   <script type="text/javascript">

                for(var i=0;i<document.getElementById('roletype').length;i++)

                {

						if(document.getElementById('roletype').options[i].value=="<?php echo $indivdata->roletype ?>")

						{

						document.getElementById('roletype').options[i].selected=true

						}

                }			

                </script>
				
				</div>
				</div>
						
							
							<div class="control-group">
								<label class="control-label" for="selectError3">Status</label>
								<div class="controls">
								  <select name="status" id="status">
								  <option value="">Select status</option>
									<option value="Active">Active</option>
									<option value="Inactive">Inactive</option>
									
									
								  </select>
								  
								   <script type="text/javascript">

                for(var i=0;i<document.getElementById('status').length;i++)

                {

						if(document.getElementById('status').options[i].value=="<?php echo $indivdata->status ?>")

						{

						document.getElementById('status').options[i].selected=true

						}

                }			

                </script>
				
				</div>
				</div>
				
				
							

							          
						
							<div class="form-actions">
							  <input type="submit" class="btn btn-primary" name="submit" value="<?php echo $hdn_value;?>">
							 <!--<button type="reset" class="btn">Cancel</button> -->
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
			<?php } ?>
<div class="clearfix"></div>


		
		
		<!---------scripts----------->
		
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
	
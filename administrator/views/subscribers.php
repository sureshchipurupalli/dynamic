<?php
ini_set('display_errors', 1);
include ("includes/header.php") ;
include("model/subscribers.class.php");
$subscribersObj=new subscriberClass();

	if($_POST['submit']=="Submit")
	{
		
		$details=$subscribersObj->insertSubscriber($_POST);
	}
		
		
		$subscriberdetails=$subscribersObj->getAllSubscribers();
		$indivdata=$subscribersObj->getSubscribers($_GET['id']); 
	
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
		//print_r($_POST);exit;
			$updatedetails=$subscribersObj->updateSubscriber($_POST,$_GET['id']);
			
		}
			
			
		if($_GET['action']=="delete")
		{
		
			$subscribersObj->DeleteSubscribe($_GET['id']);
			
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
				<li><a href="#">Subscribers</a></li>
			</ul>
			
			<?php if($option=='com_subscribers'){ ?>
			
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span><?php echo $hdn_value1;?> Subscribers
						<div class="box-icon">
							<a href="index.php?option=com_subscribers_insert"><img src="img/add_icon.png"></a>
							<!--<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>-->
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								<th>S.no</th>								 
								  <th>Email</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							
							
							 <?php $i=1;
							 foreach($subscriberdetails as $subscriber)
						  { ?>							
							
							
							
							<tr>
								<td><?php echo $i;?></td>
								
								<!--<td>< ?php echo $subscriber->Image;?> </td>-->
								
									<td class="center"><?php echo $subscriber->email;?></td>
								<?php if($subscriber->status=='Active'){ ?>
								<td class="center"><span class="label label-success">Active</span></td>
								<?php }else { ?>
								<td class="center"><span class="label label-important">Inctive</span></td>
								<?php }?>
								
								<td class="center">
									
									<a class="btn btn-info" title="Edit" href="index.php?option=com_subscribers_edit&id=<?php echo $subscriber->id;?>">
										<i class="halflings-icon white edit"></i>                                            
									</a>
									<a class="btn btn-danger" title="Delete" href="#" onClick="var q = confirm('Are you sure you want to delete selected record?'); 
									if (q) { window.location = 'index.php?option=com_subscribers&action=delete&id=<?php echo $subscriber->id;?>'; return false;}">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<?php $i++; }?>

							
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
						<h2><i class="halflings-icon edit"></i><span class="break"></span><?php echo $hdn_value1;?> Subscriber</h2>
						<div class="box-icon">
							<a href="index.php?option=com_subscribers"><img src="img/back_icon.png"></a>
							<!--<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>-->
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" enctype="multipart/form-data">
						  <fieldset>
						  
						 <?php /* <div class="control-group">
							  <label class="control-label" for="typeahead">User Name</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="username" value="<?php echo $indivdata->username;?>" >
							
							  </div>
							</div>*/?>
                            
                            
                            
                      <?php /*<div class="form-group">
                     <label class="controls col-lg-4">Image <span style="color:#FF0000">*</span></label>
                      <div  class="controls" style="width:660px; ">
                       <?php if($indivdata->image!=''){?>
                        <img src="uploads/homeimg/<?php echo $indivdata->image_name;?>" style="height:150px; width: 200px;" />
                        <input type="hidden" name="hdn_image" value="<?php echo  stripslashes($indivdata->image_name);?>" />    
                        <br/><br/>
                       <?php } ?>
                        <input type="file" name="image" value=""/>                       
                      </div>
                    </div> */?>
                    
                         
							
							<?php /*?><div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls"  style="width:660px;">
							    <?php if($indivdata->image_name!=''){?>
                        <img src="uploads/homeimg/<?php echo $indivdata->image_name;?>" style="height:150px; width: 200px;" />
						 <?php } ?>
								<input class="input-file uniform_on" id="fileInput" type="file" name="profile" value="<?php echo  stripslashes($indivdata->image_name);?>" >
							  </div>
							</div><?php */?>  


							<?php /*?><div class="control-group">
							  <label class="control-label" for="date01">Date input</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="<?php echo $indivdata->date_added;?>" name="date">
								</div>
							</div><?php */?>
							
							
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Email</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="email" name="email" value="<?php echo $indivdata->email;?>" >
							
							  </div>
							</div>
							
							<div class="control-group">
								<label class="control-label" for="selectError3">Status</label>
								<div class="controls">
								  <select name="status" id="status">
								  <option value="">Select Status</option>
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
                jQuery("#country").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please select Country"
                });
               
                
                jQuery("#category").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please select Category"
                });
              
                
                jQuery("#myDiv").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please select Department"
                });
				
				 jQuery("#email").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Please Enter A Valid Email ID"
                });
				
				
				 jQuery("#typeahead").validate({
                    expression: "if (VAL ) return true; else return false;",
                    message: "Please  fill the Title"
                });
				
				jQuery("#typeahead2").validate({
                    expression: "if (VAL ) return true; else return false;",
                    message: "Please  enter the Address"
                });
				
				  
                jQuery("#fileInput").validate({
                    expression: "if ( VAL) return true; else return false;",
                    message: "Please Select  File"
                });
				
				jQuery("#file").validate({
                    expression: "if (VAL.length > 8 ) return true; else return false;",
                    message: "Please Choose File"
                });
				
				jQuery("#date01").validate({
                    expression: "if (VAL.length > 8 ) return true; else return false;",
                    message: "Please Enter The Date"
                });
				
				jQuery("#textarea2").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please Fill The Description"
                });
				
				
				
				jQuery("#subcategory").validate({
                    expression: "if (VAL ) return true; else return false;",
                    message: "Please Select Sub Category"
                });
				
				jQuery("#status").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please Select Status"
                });
				
				
            });
            /* ]]> */
        </script>
		
		<!---------end of validations--------------->



<!-- start: JavaScript-->

				<?php include("js/scripts.js");?>
	<!-- end: JavaScript-->
	
<?php
ini_set('display_errors', 1);
include ("includes/header.php") ;

include("model/contentpages.class.php");

$contentObj=new contentClass();

	if($_POST['submit']=="Submit")
	{
		$details=$contentObj->insertContent($_POST);
	}
		
		
		$bannerdetails=$contentObj->getallContent();
		$indivdata=$contentObj->getContentdata($_GET['id']); 
	
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
		
			$updatedetails=$contentObj->updateContent($_POST,$_GET['id']);
			
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
				<li><a href="#">Banners</a></li>
			</ul>
			
			<?php if($option=='com_contentpages'){ ?>
			
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Content Pages
						<div class="box-icon">
							<a href="index.php?option=com_contentpages_insert"><img src="img/add_icon.png"></a>
							<!--<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>-->
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								<th>S.no</th>
								  <th>Title</th>
								  							 
								  <th>Description</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							
							
							 <?php $i=1;
							 foreach($bannerdetails as $banner)
						  { ?>							
							
							
							
							<tr>
								<td><?php echo $i;?></td>
								<td><?php echo $banner->title;?> </td>
                                
								<!--<td>< ?php echo $banner->Image;?> </td>-->
								
									<td class="center"><?php echo $banner->description;?></td>
								<?php if($banner->status=='Active'){ ?>
								<td class="center"><span class="label label-success">Active</span></td>
								<?php }else { ?>
								<td class="center"><span class="label label-important">Inctive</span></td>
								<?php }?>
								
								<td class="center">
									
							<a class="btn btn-info" href="index.php?option=com_contentpages_edit&id=<?php echo $banner->id;?>">
										<i class="halflings-icon white edit"></i>                                            
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
						<h2><i class="halflings-icon edit"></i><span class="break"></span><?php echo $hdn_value1;?></h2>
						<div class="box-icon">
							<a href="index.php?option=com_contentpages"><img src="img/back_icon.png"></a>
							<!--<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>-->
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" enctype="multipart/form-data">
						  <fieldset>
						  
						  <div class="control-group">
							  <label class="control-label" for="typeahead">Title</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="title" value="<?php echo $indivdata->title;?>" >
							
							  </div>
							</div>
                            
                            
                            
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
                    
                         
							
							


							
							
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="description"><?php echo $indivdata->description;?></textarea>
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
				
				 jQuery("#typeahead").validate({
                    expression: "if (VAL ) return true; else return false;",
                    message: "Please  fill the title"
                });
				
				  
                jQuery("#fileInput").validate({
                    expression: "if ( VAL) return true; else return false;",
                    message: "Please select  File"
                });
				
				jQuery("#file").validate({
                    expression: "if (VAL.length > 8 ) return true; else return false;",
                    message: "Please Choose File"
                });
				
				jQuery("#date01").validate({
                    expression: "if (VAL.length > 8 ) return true; else return false;",
                    message: "Please fill Date"
                });
				
				jQuery("#textarea2").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please Fill the Description"
                });
				
				jQuery("#status").validate({
                    expression: "if (VAL.length > 8 ) return true; else return false;",
                    message: "Please select Status"
                });
				
            });
            /* ]]> */
        </script>
		
		<!---------end of validations--------------->


<!-- start: JavaScript-->

				<?php include("js/scripts.js");?>
	<!-- end: JavaScript-->
	
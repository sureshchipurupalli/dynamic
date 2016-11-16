<?php
ini_set('display_errors', 1);
include ("includes/header.php") ;
include("model/category.class.php");
$categoryObj=new categoryClass();

	if($_POST['submit']=="Submit")
	{
		$details=$categoryObj->insertCategory($_POST);
	}
		
		
		$categorydetails=$categoryObj->getAllCategory();
		$indivdata=$categoryObj->getCategory($_GET['id']); 
	
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
		//print_r($_FILES);exit;
			$updatedetails=$categoryObj->updateCategory($_POST,$_GET['id']);
			
		}
			
			
		if($_GET['action']=="delete")
		{
		
			$categoryObj->DeleteCategory($_GET['id']);
			
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
				<li><a href="#">Category</a></li>
			</ul>
			
			<?php if($option=='com_category'){ ?>
			
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Category
						<div class="box-icon">
							<a href="index.php?option=com_category_insert"><img src="img/add_icon.png"></a>
							<!--<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>-->
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								<th>S.no</th>
								  <th style="width:25px">Category name</th>
								  <th style="width:60px;">Image</th>
								   <th style="width:60px;">Image1</th>	
								  
								  <th>Description1</th>
								 <th>banner</th>
								 
								  <th style="width:10%">Status</th>
								  <th style="width:10%">Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							
							
							 <?php $i=1;
							 foreach($categorydetails as $category)
						  { ?>							
							
							
							
							<tr>
								<td><?php echo $i;?></td>
								<td><?php echo $category->name;?> </td>
                                 <td><img src="../uploads/homeimg/<?php echo $category->image;?>" width="80%" height="100" /></td>
								<!--<td>< ?php echo $banner->Image;?> </td>-->
								<td><img src="../uploads/homeimg/<?php echo $category->image1;?>" width="80%" height="100" /></td>
								<!--<td>< ?php echo $banner->Image;?> </td>-->
								
									<td class="center"><?php echo $category->description;?></td>
									<td><img src="../uploads/homeimg/<?php echo $category->banner;?>" width="80%" height="100" /></td>
									
								<?php if($category->status=='Active'){ ?>
								<td class="center"><span class="label label-success">Active</span></td>
								<?php } else { ?>
								<td class="center"><span class="label label-important">Inactive</span></td>
								<?php }?>
								
								<td class="center" >
									
									<a class="btn btn-info" href="index.php?option=com_category_edit&id=<?php echo $category->id;?>" title="Edit">
										<i class="halflings-icon white edit"></i>                                            
									</a>
									<a class="btn btn-danger" title="Delete" href="#" onClick="var q = confirm('Are you sure you want to delete selected record?'); 
									if (q) { window.location = 'index.php?option=com_category&action=delete&id=<?php echo $category->id;?>'; return false;}">
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
						<h2><i class="halflings-icon edit"></i><span class="break"></span><?php echo $hdn_value1;?> Category</h2>
						<div class="box-icon">
							<a href="index.php?option=com_category"><img src="img/back_icon.png"></a>
							<!--<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>-->
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" enctype="multipart/form-data">
						  <fieldset>
						  
						  <div class="control-group">
							  <label class="control-label" for="typeahead">Banner Name</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="banner" value="<?php echo $indivdata->name;?>" >
							
							  </div>
							</div>
                            
                            
                            
                      <div class="control-group">
                     <label class="control-label" for="fileInput">Category Image</label>
                      <div  class="controls" style="width:660px; ">
                       <?php if($indivdata->image!=''){?>
                        <img src="../uploads/homeimg/<?php echo $indivdata->image;?>" style="height:150px; width: 200px;" />
                        <input type="hidden" name="hdn_image" value="<?php echo  stripslashes($indivdata->image);?>" />    
                        
                       <?php } ?>
                        <input type="file" id="image1" name="image" value=""/>                       
                      </div>
                    </div> 
					
					
						

					
					
					
					 <div class="control-group">
                      <label class="control-label" for="fileInput">Currency Image</label>
                      <div  class="controls" style="width:660px; ">
                       <?php if($indivdata->image1!=''){?>
                        <img src="../uploads/homeimg/<?php echo $indivdata->image1;?>" style="height:150px; width: 200px;" />
                        <input type="hidden" name="chdn_image" value="<?php echo  stripslashes($indivdata->image1);?>" />    
                        
                       <?php } ?>
                        <input type="file"  id="image2" name="currencyimage" value=""/>                       
                      </div>
                    </div> 
					
					 <div class="control-group">
                      <label class="control-label" for="fileInput">Banner Image </label>
                      <div  class="controls" style="width:660px; ">
                       <?php if($indivdata->banner!=''){?>
                        <img src="../uploads/homeimg/<?php echo $indivdata->banner;?>" style="height:150px; width: 200px;" />
                        <input type="hidden" name="bhdn_image" value="<?php echo  stripslashes($indivdata->banner);?>" />    
                        
                       <?php } ?>
                        <input type="file"  id="image3" name="bannerimage" value=""/>                       
                      </div>
                    </div> 
                    
                            
                            
                            
                           
                            
                            
                            
                            
							
							<?php /*?><div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls"  style="width:660px;">
							    <?php if($indivdata->image!=''){?>
                        <img src="uploads/homeimg/<?php echo $indivdata->image;?>" style="height:150px; width: 200px;" />
						 <?php } ?>
								<input class="input-file uniform_on" id="fileInput" type="file" name="profile" value="<?php echo  stripslashes($indivdata->image);?>" >
							  </div>
							</div> */?>

							
							


							<div class="control-group">
							  <label class="control-label" for="date01">Date input</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="<?php echo $indivdata->date_added;?>" name="date">
								</div>
							</div>
							
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3"  name="description"><?php echo $indivdata->description;?></textarea>
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
                    message: "Please Select The Country"
                });
               
                
                jQuery("#category").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please Select The Category"
                });
              
                
                jQuery("#myDiv").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please Select The Department"
                });
				
				 jQuery("#typeahead").validate({
                    expression: "if (VAL ) return true; else return false;",
                    message: "Please  Enter the Banner Name"
                });
				
				jQuery("#typeahead2").validate({
                    expression: "if (VAL ) return true; else return false;",
                    message: "Please  Enter The Address"
                });
				
				  
                jQuery("#image1").validate({
                    expression: "if ( VAL) return true; else return false;",
                    message: "Please Upload Category Image"
                });
				
				jQuery("#image2").validate({
                    expression: "if ( VAL) return true; else return false;",
                    message: "Please Upload Currency Image"
                });
				
				jQuery("#image3").validate({
                    expression: "if ( VAL) return true; else return false;",
                    message: "Please Upload Banner Image"
                });
				
				jQuery("#file").validate({
                    expression: "if (VAL.length > 8 ) return true; else return false;",
                    message: "Please Choose File"
                });
				
				jQuery("#date01").validate({
                    expression: "if (VAL.length > 8 ) return true; else return false;",
                    message: "Please Fill The Date"
                });
				
				jQuery("#textarea2").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please Fill The Description"
                });
				
				
				
				jQuery("#subcategory").validate({
                    expression: "if (VAL ) return true; else return false;",
                    message: "Please Select Subcategory"
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
	
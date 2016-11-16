<?php
ini_set('display_errors', 1);
include ("includes/header.php") ;
include("model/department.class.php");
$deptObj=new departmentClass();

	if($_POST['submit']=="Submit")
	{
	//print_r($_POST);
	$details=$deptObj->insertDepartment($_POST);
	}
		
		
		$countrydetails=$deptObj->getAlldepartments();
		$catdetails=$deptObj->getallCategories();
		$indivdata=$deptObj->getDepartment($_GET['id']); 
	
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
		
			$updatedetails=$deptObj->updateCountry($_POST,$_GET['id']);
			
		}
			
			
		if($_GET['action']=="delete")
		{
		
			$deptObj->DeleteCountry($_GET['id']);
			
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
				<li><a href="#">Department List</a></li>
			</ul>
			
			<?php if($option=='com_departments'){ ?>
			
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span><?php echo $hdn_value1;?> Department
						<div class="box-icon">
							<a href="index.php?option=com_departments_insert"><img src="img/add_icon.png"></a>
							<!--<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>-->
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								<th>S.no</th>								 
								  <th>Category Id</th>
								  <th>Department Name</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							
							
							 <?php $i=1;
							 foreach($countrydetails as $country)
						  { 
						  
						  $getallcategories=$deptObj->getallCategoriesbyid($country->cat_id);
						  //print_r($getallcategories);
						  ?>							
							
							
							
							<tr>
								<td><?php echo $i;?></td>
								
								<!--<td>< ?php echo $subscriber->Image;?> </td>-->
										<td class="center"><?php echo $getallcategories->name;?></td>
									<td class="center"><?php echo $country->department_name;?></td>
								<?php if($country->status=='Active'){ ?>
								<td class="center"><span class="label label-success">Active</span></td>
								<?php }else { ?>
								<td class="center"><span class="label label-important">Inactive</span></td>
								<?php }?>
								
								<td class="center">
									
							<a class="btn btn-info" title="Edit" href="index.php?option=com_departments_edit&id=<?php echo $country->id;?>">
										<i class="halflings-icon white edit"></i>                                            
									</a>
									<a class="btn btn-danger" title="Delete" href="#" onClick="var q = confirm('Are you sure you want to delete selected record?'); 
									if (q) { window.location = 'index.php?option=com_departments&action=delete&id=<?php echo $country->id;?>'; return false;}">
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
						<h2><i class="halflings-icon edit"></i><span class="break"></span><?php echo $hdn_value1;?> Department</h2>
						<div class="box-icon">
							<a href="index.php?option=com_departments"><img src="img/back_icon.png"></a>
							<!--<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>-->
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" enctype="multipart/form-data">
						  <fieldset>
						  
						 <div class="control-group">
								<label class="control-label" for="selectError3">Select Category</label>
								<div class="controls">
								  <select name="category" id="category">
								  
								 
								 <option value="">Select Category</option> 
								 							
								  <?php foreach($catdetails as $details) { ?>
								  <option value="<?php echo $details->id;?>"><?php echo $details->name;?></option>
								  <?php } ?>
									
									
									
									
								  </select>
								  
								   <script type="text/javascript">

                for(var i=0;i<document.getElementById('category').length;i++)

                {

						if(document.getElementById('category').options[i].value=="<?php echo $indivdata->cat_id; ?>")

						{

						document.getElementById('category').options[i].selected=true

						}

                }			

                </script>
				
				</div>
				</div>
						  
						  <div class="control-group">
							  <label class="control-label" for="typeahead">Department Name</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="department_name" value="<?php echo $indivdata->department_name;?>" >
							
							  </div>
							</div>
							
							
							 <div class="control-group">
								<label class="control-label" for="selectError3">Status</label>
								<div class="controls">
								  <select id="status" name="status">
								  <option value="">Select Status</option> 
									<option>Active</option>
									<option>In active</option>
									
								  </select>
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
                    message: "Please Select The Category"
                });
              
                
                jQuery("#myDiv").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please select Department"
                });
				
				 
				
				jQuery("#typeahead").validate({
                    expression: "if (VAL ) return true; else return false;",
                    message: "Please  Enter The Department name"
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
				
				
				
				jQuery("#subcategory").validate({
                    expression: "if (VAL ) return true; else return false;",
                    message: "Please select Sub Category"
                });
				
				jQuery("#status").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please Select The Status"
                });
				
				
            });
            /* ]]> */
        </script>
		
		<!---------end of validations--------------->


<!-- start: JavaScript-->

				<?php include("js/scripts.js");?>
	<!-- end: JavaScript-->
	
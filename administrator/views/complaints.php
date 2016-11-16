<?php
		

	  include ("includes/header.php") ;
	  
	  include("model/complaint.class.php");
		$complaintObj=new complaintClass();

	
	
	if($_POST['submit']=="Submit")
	{
		//$details=$complaintObj->insertComplaint($_POST);
	}
		
		
		$complaintdetails=$complaintObj->getallComplaints();
		//print_r($complaintdetails);exit;
		$indivdata=$complaintObj->getComplaintdata($_GET['id']); 
		//print_r($indivdata);
		//$getcategories=$complaintObj->getallCategories($complaintdetails->complaint_category); 
		
		
	
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
		
			$updatedetails=$complaintObj->updateComplaint($_POST,$_GET['id']);
			
		}
			
			
		if($_GET['action']=="delete"){
		
			$complaintObj->DeleteComplaint($_GET['id']);
			
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
                jQuery("#country").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please Select Country"
                });
               
                
                jQuery("#category").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please Select Category"
                });
              
                
                jQuery("#myDiv").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please Select Department"
                });
				
				 jQuery("#data").validate({
                    expression: "if (VAL ) return true; else return false;",
                    message: "Please Select Sub Department"
                });
				
				  
                jQuery("#fileInput").validate({
                    expression: "if ( VAL) return true; else return false;",
                    message: "Please Select File"
                });
				
				jQuery("#textarea2").validate({
                    expression: "if (VAL.length > 8 ) return true; else return false;",
                    message: "Please Fill Description"
                });
				
				jQuery("#title").validate({
                    expression: "if (VAL.length > 8 ) return true; else return false;",
                    message: "Please Enter The Title"
                });
				
				jQuery("#status").validate({
                    expression: "if (VAL.length > 8 ) return true; else return false;",
                    message: "Please Select The Status"
                });
				
				
            });
            /* ]]> */
        </script>
		
		<!---------end of validations--------------->
		
	
	<script>
              function getsubcategorys(category)
				{
				//alert(category);
				var xmlhttp;
				if (window.XMLHttpRequest)
					{// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp=new XMLHttpRequest();
					}
				else
					{// code for IE6, IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					}
				xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
//alert(xmlhttp.responseText);
document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
}
}
				xmlhttp.open("GET","newcatajax1.php?q="+category,true);
				xmlhttp.send();
				}
    </script>
	
	
	<script>
              function subdepts(subcategory)
				{
				//alert(subcategory);
				//alert(subcategory);
				var xmlhttp;
				if (window.XMLHttpRequest)
					{// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp=new XMLHttpRequest();
					}
				else
					{// code for IE6, IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					}
				xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
//alert(xmlhttp.responseText);
document.getElementById("data").innerHTML=xmlhttp.responseText;
}
}
				xmlhttp.open("GET","getsubdepts.php?q="+subcategory,true);
				xmlhttp.send();
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
					<a href="index.php?option=com_dashboard">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Complaints</a></li>
			</ul>
			
			<?php if($option=='com_complaints'){ ?>
			
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Complaints
						<div class="box-icon">
							<a href="index.php?option=com_complaints_insert"><img src="img/add_icon.png"></a>
							<!--<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>-->
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								<th>S.no</th>
								  <th>Country Name</th>
								  <th>Category</th>
								  <th style="width:15%">Sub Category</th>
								  <th>Department</th>
								  
								  <th style="width:22%">Description</th>
								   <th style="width:20%;">Image</th>
								  <th>Status</th>
								  <th style="width:15%">Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							
							
							 <?php $i=1;
							
							 foreach($complaintdetails as $complaint)
						  { 
						  $getcategories=$complaintObj->getCategories($complaint->complaint_category); 
						$getcountries=$complaintObj->getallCountriesbyid($complaint->country_id); 
							//print_r($getcountries);
						   $getsubcat=$complaintObj->getdepartments($complaint->department);
						    $getsubdeparts=$complaintObj->getsubdepartments($complaint->subdept_id);
						  //print_r($getsubdeparts);
		
						 // print_r($getcategories);
						  ?>							
							
							
							
							<tr>
								<td><?php echo $i;?></td>
								<td class="center"><?php echo $getcountries->country_name;?> </td>
								<td class="center"><?php echo $getcategories->name;?></td>
								<td class="center"><?php echo  $getsubcat->department_name;?></td>
								<td class="center"><?php echo $getsubdeparts->title;?></td>
								
								<td class="center"><?php echo $complaint->description;?></td>
								<?php if ($complaint->image!='') {?>
								 <td><img src="../uploads/complaints/thumbs/<?php echo $complaint->image;?>" width="80%" 
								 height="100" /></td>
								<?php }else { ?>
								<td> No Image</td>
								<?php } ?>
								<?php if($complaint->status=='Open'){ ?>
								<td class="center"><span class="label label-success">Open</span></td>
								<?php }else { ?>
								<td class="center"><span class="label label-important">Closed</span></td>
								<?php }?>
								
								<td class="center">
									
									<a class="btn btn-info" title="Edit" href="index.php?option=com_complaints_edit&id=<?php echo $complaint->id;?>">
										<i class="halflings-icon white edit"></i>                                            
									</a>
									<a class="btn btn-danger" title="Delete" href="#" onClick="var q = confirm('Are you sure you want to delete selected record?'); 
									if (q) { window.location = 'index.php?option=com_complaints&action=delete&id=<?php echo $complaint->id;?>'; return false;}">
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
						<h2><i class="halflings-icon edit"></i><span class="break"></span><?php echo $hdn_value1;?> complaint</h2>
						<div class="box-icon">
							<a href="index.php?option=com_complaints"><img src="img/back_icon.png"></a>
							<!--<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>-->
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" id ="form">
						  <fieldset>
						  
						
						 <div class="control-group">
								<label class="control-label" for="selectError3">Select County</label>
								<div class="controls">
								  <select name="country" id="country" >
								  
								  <?php $getcountrydetails=$complaintObj->getallCountries();?>
								  
								  <option value="">Select County</option>
								  <?php foreach($getcountrydetails as $details) { ?>
								  <option value="<?php echo $details->id;?>"><?php echo $details->country_name;?></option>
								  <?php } ?>
									
									
									
								  </select>
								  
								   <script type="text/javascript">

                for(var i=0;i<document.getElementById('country').length;i++)

                {

					if(document.getElementById('country').options[i].value=="<?php echo $indivdata->country_id; ?>")

						{

						document.getElementById('country').options[i].selected=true

						}

                }			

                </script>
				
				</div>
				</div>


						<div class="control-group">
								<label class="control-label" for="selectError3">Select Category</label>
								<div class="controls">
								  <select name="category" id="category" onchange="getsubcategorys(this.value)">
								  
								  <?php $getdetails=$complaintObj->getallCategories();?>
								  
								  <option value="">Select Category</option>
								  <?php foreach($getdetails as $details) { ?>
								  <option value="<?php echo $details->id;?>"><?php echo $details->name;?></option>
								  <?php } ?>
									
									
									
								  </select>
								  
								   <script type="text/javascript">

                for(var i=0;i<document.getElementById('category').length;i++)

                {

					if(document.getElementById('category').options[i].value=="<?php echo $indivdata->complaint_category; ?>")

						{

						document.getElementById('category').options[i].selected=true

						}

                }			

                </script>
				
				</div>
				</div>
				
				
				<div class="control-group">
								<label class="control-label" for="selectError3">Select Sub Category</label>
								<div class="controls">
								  <select name="subcategory" id="myDiv" onchange="subdepts(this.value)" >
								  
								 
								 <option value="">Select Department</option> 
									
									
									
								  </select>
								  
								   <script type="text/javascript">

                for(var i=0;i<document.getElementById('myDiv').length;i++)

                {

						if(document.getElementById('myDiv').options[i].value=="<?php echo $indivdata->department; ?>")

						{

						document.getElementById('myDiv').options[i].selected=true

						}

                }			

                </script>
				
				</div>
				</div>
				
				
				
				<div class="control-group">
								<label class="control-label" for="selectError3">Select Department</label>
								<div class="controls">
								  <select name="subdepartment" id="data" >
								  
								 
								 <option value="">Select Sub Departments</option> 
									
									
									
								  </select>
								  
								   <script type="text/javascript">

                for(var i=0;i<document.getElementById('data').length;i++)

                {

						if(document.getElementById('data').options[i].value=="<?php echo $indivdata->subdept_id; ?>")

						{

						document.getElementById('data').options[i].selected=true

						}

                }			

                </script>
				
				</div>
				</div>
						
						
							
							<div class="control-group">
							  <label class="control-label" for="fileInput">File Input</label>
							  <div class="controls"  style="width:660px;">
							    <?php if($indivdata->image!=''){?>
                        <img src="../uploads/complaints/<?php echo $indivdata->image;?>" style="height:150px; width: 200px;" />
						
						 <input type="hidden" name="hdn_image" value="<?php echo  stripslashes($indivdata->image_name);?>" />    
						 <?php } ?>
								<input class="input-file uniform_on" id="fileInput" type="file" name="profile" value="<?php echo  stripslashes($indivdata->image);?>" >
							  </div>
							</div>  
							
							
							 <div class="control-group">
							  <label class="control-label" for="typeahead">Title</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="title" name="title" value="<?php echo $indivdata->title;?>" >
							
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
									<option value="Open">Open</option>
									<option value="Closed">Closed</option>
									
									
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
 


<!-- start: JavaScript-->

	<?php include("js/scripts.js"); ?>
	<!-- end: JavaScript-->
	
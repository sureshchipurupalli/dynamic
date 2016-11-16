<?php
		

	  include ("includes/header.php") ;
	  
	   include("model/video.class.php");
		$videoObj=new videoClass();
	
	
	if($_POST['submit']=="Submit")
	{
		$details=$videoObj->insertVideo($_POST);
	}
		
		
		$videodetails=$videoObj->getallvideodata();
		$indivdata=$videoObj->getVideodata($_GET['id']); 
		//print_r($indivdata);
		 $getcountries=$videoObj->getallCountries();
		  $getdetails=$videoObj->getallCategories();
		$categorydetails=$videoObj->getallCategoriesbyid($videodetails->id);
		$subcatdetails=$videoObj->getsubcatdetailsbyid($videodetails->id);
		$subdeptdetails=$videoObj->getsubdeptdetails($videodetails->id);
		$countrydetails=$videoObj->getCountriesbyid($videodetails->id);
		
	
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
		
			$updatedetails=$videoObj->updateVideo($_POST,$_GET['id']);
			
		}
			
			
		if($_GET['action']=="delete"){
		
			$videoObj->DeleteVideo($_GET['id']);
			
			}
		
		
	
	?>
	
	
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
				<li><a href="#">Videos</a></li>
			</ul>
			
			<?php if($option=='com_videos'){ ?>
			
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Videos
						<div class="box-icon">
							<a href="index.php?option=com_videos_insert"><img src="img/add_icon.png"></a>
							<!--<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>-->
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								<th>S.no</th>
								<th style="width:18%">Country</th>
								<th>Category</th>
								<th>Sub category</th>
								<!--<th>Department</th>-->
								  <th>video name</th>
								  <th>Date added</th>
								  <th>Description</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							
							
							 <?php $i=1;
							 foreach($videodetails as $video)
						  { 
						  
						  
								$categorydetails=$videoObj->getallCategoriesbyid($video->category_id);
								$subcatdetails=$videoObj->getsubcatdetailsbyid($video->department_id);
								//$subdeptdetails=$videoObj->getsubdeptdetails($video->id);
								$countrydetails=$videoObj->getCountriesbyid($video->country_id);
							?>							
							
							
							
							<tr>
								<td><?php echo $i;?></td>
								<td><?php echo $countrydetails->country_name;?></td>
								<td><?php echo $categorydetails->name;?></td>
								<td><?php echo $subcatdetails->department_name;?></td>
								<!--<td><?php //echo $subdeptdetails->title;?></td>-->

								<td><?php echo $video->video_name;?> </td>
								<td class="center"><?php echo $video->date_added;?></td>
									<td class="center"><?php echo $video->description;?></td>
								<?php if($video->status=='Active'){ ?>
								<td class="center"><span class="label label-success">Active</span></td>
								<?php }else { ?>
								<td class="center"><span class="label label-important">Inctive</span></td>
								<?php }?>
								
								<td class="center">
									
									<a class="btn btn-info" title="Edit" href="index.php?option=com_videos_edit&id=<?php echo $video->id;?>">
										<i class="halflings-icon white edit"></i>                                            
									</a>
									<a class="btn btn-danger" title="Delete" href="#" onClick="var q = confirm('Are you sure you want to delete selected record?'); 
									if (q) { window.location = 'index.php?option=com_videos&action=delete&id=<?php echo $video->id;?>'; return false;}">
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
						<h2><i class="halflings-icon edit"></i><span class="break"></span><?php echo $hdn_value1;?> Video</h2>
						<div class="box-icon">
							<a href="index.php?option=com_videos"><img src="img/back_icon.png"></a>
							<!--<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>-->
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" id="form">
						  <fieldset>
						  
						  
						   <div class="control-group">
								<label class="control-label" for="selectError3">Select County</label>
								<div class="controls">
								  <select name="country" id="country" >
								  
								
								  
								  
								 <?php $getcountries=$videoObj->getallCountries();?>
								  
								  <option value="">Select Category</option>
								  <?php foreach($getcountries as $details) { ?>
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
								  
								 
								  
								  <option value="">Select Category</option>
								  <?php foreach($getdetails as $details) { ?>
								  <option value="<?php echo $details->id;?>"><?php echo $details->name;?></option>
								  <?php } ?>
									
									
									
								  </select>
								  
								   <script type="text/javascript">

                for(var i=0;i<document.getElementById('category').length;i++)

                {

					if(document.getElementById('category').options[i].value=="<?php echo $indivdata->category_id; ?>")

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
								  <select name="subcategory" id="myDiv"  >
								  
								 
								 <option value="">Select Department</option> 
									
									
									
								  </select>
								  
								   <script type="text/javascript">

                for(var i=0;i<document.getElementById('myDiv').length;i++)

                {

						if(document.getElementById('myDiv').options[i].value=="<?php echo $indivdata->department_id; ?>")

						{

						document.getElementById('myDiv').options[i].selected=true

						}

                }			

                </script>
				
				</div>
				</div>
						  
						  <div class="control-group">
							  <label class="control-label" for="typeahead">Video Name</label>
							  <div class="controls">
								<input type="text" class="typeahead" id="typeahead" name="video_name" value="<?php echo $indivdata->video_name;?>" >
							
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label"  id="file" for="fileInput">File Input</label>
							  <div class="controls">
							  
							   <?php if($indivdata->video!=''){?>
                        
					<video width="100%" height="200" controls="controls" >
					<source src="../uploads/videos/<?php echo $indivdata->video; ?>" type="video/mp4">
					<object data="" width="100%" height="200">
					<embed width="100%" height="200" src="../uploads/videos/<?php echo $indivdata->video; ?>">
					</object>
					</video>
						
						 <input type="hidden" name="hdn_image" value="<?php echo  stripslashes($indivdata->video);?>" />    
						 <?php } ?>
								<input class="input-file uniform_on" id="fileInput" type="file" name="video" value="<?php echo  stripslashes($indivdata->image);?>" >
							  
							  </div>
							</div>  


							<div class="control-group">
							  <label class="control-label" for="date01">Date Input</label>
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
				
				 jQuery("#typeahead").validate({
                    expression: "if (VAL ) return true; else return false;",
                    message: "Please  Enter The Video Name"
                });
				
				  
                jQuery("#fileInput").validate({
                    expression: "if ( VAL) return true; else return false;",
                    message: "Please Select The File"
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
                    expression: "if (VAL.length > 8 ) return true; else return false;",
                    message: "Please Enter The Description"
                });
				
				jQuery("#select").validate({
                    expression: "if (VAL.length > 8 ) return true; else return false;",
                    message: "Please Select The Status"
                });
				
            });
            /* ]]> */
        </script>
		
		<!---------end of validations--------------->


<!-- start: JavaScript-->
	<?php include("js/scripts.js");?>
	<!-- end: JavaScript-->
	
<?php
error_reporting(0);
		
 include ("includes/header.php") ;
 
 include("model/appform.class.php");
$aboutObj=new appform();



	 
	
	
	if($_POST['submit']=="Submit")
	{
		$details=$aboutObj->insertAppform($_POST);
		
		}
		
		$pagedetails=$aboutObj->getAllappform();
		 $indivdata=$aboutObj->getAppform($_GET['id']);
		
		if($_POST['submit']=='Update')
		{
		
			$updatedetails=$aboutObj->updateAppform($_POST,$_GET['id']);
			}
	
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
		
		if($_GET['action']=="delete"){
		
			$aboutObj->DeleteAppform($_GET['id']); 
			
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
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">About Us</a></li>
			</ul>
			
			<?php if($option=='com_appform'){ ?>
			
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Application Form
						<div class="box-icon">
							<a href="index.php?option=com_appform_insert"><img src="img/add_icon.png"></a>
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
							foreach($pagedetails as $page)
							{		
							?>
							
							
							
							<tr>
								<td><?php echo $i;?></td>
								<td class="center"><?php echo $page->title;?></td>
								<td class="center"><?php echo $page->description;?></td>
								<td class="center">Active</td>
								<!--<td class="center">
									<span class="label label-success">active</span>
								</td>-->
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>                                            
									</a>
									<a class="btn btn-info" href="index.php?option=com_appform_insert&id=<?php echo $page->id;?>">
										<i class="halflings-icon white edit"></i>                                            
									</a>
									<a class="btn btn-danger" href="#"onClick="var q = confirm('Are you sure you want to delete selected record?'); 
									if (q) { window.location = 'index.php?option=com_appform&action=delete&id=<?php echo $page->id;?>'; return false;}">
										<i class="halflings-icon white trash"></i> 
									</a>
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
						<h2><i class="halflings-icon edit"></i><span class="break"></span><?php echo $hdn_value1;?> Application Form</h2>
						<div class="box-icon">
							<a href="index.php?option=com_appform"><img src="img/back_icon.png"></a>
							<!--<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>-->
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post">
						  <fieldset>
						  
						  <div class="control-group">
							  <label class="control-label" for="typeahead">Title</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  name="title" value="<?php echo $indivdata->title;?>">
							
							  </div>
							</div>
						  
						 
							<!--<div class="control-group">
							  <label class="control-label" for="date01">Date input</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
							  </div>
							</div>-->
							
							
							
							
							

							<div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="description"><?php echo $indivdata->description;?></textarea>
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

		<?php include("js/scripts.js");?>
	<!-- end: JavaScript-->
	
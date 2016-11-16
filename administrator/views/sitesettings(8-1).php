<?php
		
 error_reporting(0);
 
 	 include ("includes/header.php") ;
	 
	 include("model/sitesettings.class.php");
	 
	 
		$siteObj=new sitesettingsClass();

	
	
	if($_POST['Submit']=='Submit')
	{
		//print_r($_POST); exit;
		//echo "jytuiruy"; exit;
		$details=$siteObj->insertsitesetting($_POST);
		//echo "jhhjktyrjukojhrjh"; exit;
		}
		
		if($_POST['submit']=='Update')
	{
	
		$update=$siteObj->updatesitesetting($_POST,$_GET['id']);
		
		}
		
		$sitedetails=$siteObj->getAllsite();
	$indivdata=$siteObj->getSitedata($_GET['id']); 
	 if(isset($_GET['id']) && $_GET['id']!="")
		{
			$hdn_value="Update";
			$hdn_value1="Edit";
			
		}
		else
		{
			$hdn_value="Submit";
			$hdn_value1="update";
		}
	
	if($_GET['action']=="delete"){
		
			$siteObj->Deletesitesetting($_GET['id']);
			
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
				<li><a href="#">Sitesettings</a></li>
			</ul>
			
			<?php if($option=='com_sitesettings'){ ?>
			
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>sitesettings
						<div class="box-icon">
							<a href="index.php?option=com_sitesettings_insert"><img src="img/add_icon.png"></a>
							
						</div>
					</div>
					<?php /*?><div class="box-content">
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
							foreach($sitedetails as $site)
							{
							?>
							<tr>
								<td><?php echo $i;?></td>
								<td class="center"><?php echo $site->title;?></td>
								<td class="center"><?php echo $site->description;?></td>
								<td class="center">
									
									<span class="label label-success">Active</span>
							
								
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="index.php?option=com_sitesettings_edit&id=<?php echo $site->id;?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#"onClick="var q = confirm('Are you sure you want to delete selected record?'); 
									if (q) { window.location = 'index.php?option=com_sitesettings&action=delete&id=<?php echo $site->id;?>'; return false;}">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<?php $i++;} ?>
							
							
						  </tbody>
					  </table>            
					</div><?php */?>
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
								<input type="text" class="span6 typeahead" id="typeahead" name="title" value="<?php echo $indivdata->title;?>">
							
							  </div>
							</div>
							
                            
                            
                              
							  <div class="control-group">
							  <label class="control-label" for="fileInput">Logo</label>
							  <div class="controls"  style="width:660px;">
							    <?php if($indivdata->site_image!=''){?>
                        <img src="uploads/homeimg/<?php echo $indivdata->site_image;?>" style="height:150px; width: 200px;" />
						 <?php } ?>
								<input class="input-file uniform_on" id="fileInput" type="file" name="profile" value="<?php echo  stripslashes($indivdata->site_image);?>" >
							  </div>
							</div>
							
                            
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">From Name</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="mail_fromname" value="<?php echo $indivdata->mail_fromname;?>">
							
							  </div>
							</div>
                            
                             <div class="control-group">
							  <label class="control-label" for="typeahead">Admin Email Address</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="mail_frommail" value="<?php echo $indivdata->mail_frommail;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Receive Mail Address for Contact Us Form</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="contactusmail" value="<?php echo $indivdata->contactusmail;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Phone number</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="phone" value="<?php echo $indivdata->phone;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Fax number</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="fax" value="<?php echo $indivdata->fax;?>">
							
							  </div>
							</div>
                            
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Contact Address</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="address" value="<?php echo $indivdata->address;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Facebook</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="facebook_link" value="<?php echo $indivdata->facebook_link;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Twitter</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="twitter_link" value="<?php echo $indivdata->twitter_link;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Youtube</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="youtube" value="<?php echo $indivdata->youtube;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Google plus</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="googleplus" value="<?php echo $indivdata->googleplus;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Linkedin</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="linkedin" value="<?php echo $indivdata->linkedin;?>">
							
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Footer</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="footer_txt" value="<?php echo $indivdata->footer_txt;?>">
							
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
								<textarea class="cleditor" id="textarea2" rows="3" name="description"><?php echo $indivdata->description;?></textarea>
							  </div>
							</div>-->
							<div class="form-actions">
							  <input type="submit" class="btn btn-primary" name="Submit" value="<?php echo $hdn_value;?>">
							  
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


<!-- start: JavaScript-->

		<script src="../js/jquery-1.9.1.min.js"></script>
	<script src="../js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="../js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="../js/jquery.ui.touch-punch.js"></script>
	
		<script src="../js/modernizr.js"></script>
	
		<script src="../js/bootstrap.min.js"></script>
	
		<script src="../js/jquery.cookie.js"></script>
	
		<script src='../js/fullcalendar.min.js'></script>
	
		<script src='../js/jquery.dataTables.min.js'></script>

		<script src="../js/excanvas.js"></script>
	<script src="../js/jquery.flot.js"></script>
	<script src="../js/jquery.flot.pie.js"></script>
	<script src="../js/jquery.flot.stack.js"></script>
	<script src="../js/jquery.flot.resize.min.js"></script>
	
		<script src="../js/jquery.chosen.min.js"></script>
	
		<script src="../js/jquery.uniform.min.js"></script>
		
		<script src="../js/jquery.cleditor.min.js"></script>
	
		<script src="../js/jquery.noty.js"></script>
	
		<script src="../js/jquery.elfinder.min.js"></script>
	
		<script src="../js/jquery.raty.min.js"></script>
	
		<script src="../js/jquery.iphone.toggle.js"></script>
	
		<script src="../js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="../js/jquery.gritter.min.js"></script>
	
		<script src="../js/jquery.imagesloaded.js"></script>
	
		<script src="../js/jquery.masonry.min.js"></script>
	
		<script src="../js/jquery.knob.modified.js"></script>
	
		<script src="../js/jquery.sparkline.min.js"></script>
	
		<script src="../js/counter.js"></script>
	
		<script src="../js/retina.js"></script>

		<script src="../js/custom.js"></script>
	<!-- end: JavaScript-->
	
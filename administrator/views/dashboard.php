
								
				<?php include ("includes/header.php") ?>
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<?php include ("includes/leftnav.php") ?>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			
			
			
			
			
			
			<div id="content" class="span10"  >
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>

			<div class="row-fluid">
				
				<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
					<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
					<div class="number">5<i class="icon-arrow-up"></i></div>
					<div class="title">visits</div>
					<div class="footer">
						<a href="#"> Read Full Report</a>
					</div>	
				</div>
                
                
                <?php  $tt="select *  from tb_complaints";
				$ee=mysql_query($tt);
				 $ww=mysql_num_rows($ee);
				 
				 $dt=date("Y-m-d");
				 $rr="select * from tb_complaints where date_added='".$dt."'";
				 $aa=mysql_query($rr);
				 $aa1=mysql_num_rows($aa);
				 
				
				 
				  $rr1="select * from tb_complaints WHERE MONTH(`date_added`) = MONTH(CURDATE())";
				 $aa2=mysql_query($rr1);
				 $aa3=mysql_num_rows($aa2);
				 //echo $aa3;
				 
				 
				
				
				?>
                
				<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
					<div class="boxchart">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
					<div class="number"><?php echo $ww;?><i class="icon-arrow-up"></i></div>
					<div class="title">Complaints</div>
					<div class="footer">
						<a href="index.php?option=com_complaints"> Total Complaints</a>
					</div>
				</div>
				<div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
					<div class="boxchart">5,6,7,2,0,-4,-2,4,8,2,3,3,2</div>
					<div class="number"><?php echo $aa1;?><i class="icon-arrow-up"></i></div>
					<div class="title">Complaints Today</div>
					<div class="footer">
						<a href="#"> Daywise Report</a>
					</div>
				</div>
				<div class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
					<div class="boxchart">7,2,2,2,1,-4,-2,4,8,,0,3,3,5</div>
					<div class="number"><?php echo $aa3;?><i class="icon-arrow-down"></i></div>
					<div class="title">Complaints</div>
					<div class="footer">
						<a href="#">Monthly Report </a>
					</div>
				</div>	
				
			</div>		

			
			
					
						
			
			
			
			
			<!--/row-->
			
       

	</div>
	<div class="clearfix"></div>
	</div></div>
	
	<div class="clearfix"></div>
	
	<!-- Footer-->
			<?php include ("includes/footer.php") ?>
			<!-- footer -->

	
	
	
	
	
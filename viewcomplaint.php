<?php 
include("includes/header.php");

$countrylist=$frontend_obj->getAllCountry();
$categorylist=$frontend_obj->getAllCategories();
$complaintlist=$frontend_obj->getallcomplaints();
include("includes/menu.php");

if($_POST['submit']=="SUBMIT")
{
//print_r($_POST);

$x=$frontend_obj->submitComplaint($_POST);

}

?>
<script src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
  jQuery.noConflict();
  </script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script src="plugins/jquery-form-validate/javascripts/jquery.validate.js" type="text/javascript"></script>
<script src="plugins/jquery-form-validate/javascripts/jquery.validation.functions.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="plugins/jquery-form-validate/stylesheets/jquery.validate.css" />
<link rel="stylesheet" type="text/css" href="plugins/jquery-form-validate/stylesheets/style.css" />



<div class="inner-banner">
	<h2>VIEW COMPLAINTS</h2>
    <p>For every case reported we will need to assign it</p>
</div>
<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:1px"></div>


<div class="viewcomplaint">
		<h2><?php echo $_GET['msg'];?> complaints</h2>
		
		<?php $i=1;
		foreach($complaintlist as $complaints){ ?>
	<div class="panel">
	<span>complaint no # <?php echo $i;?></span>
	<p><?php echo $complaints->description;?></p>
	</div>
</div>
<?php $i++;
	}?>




<?php include("includes/footer.php");?>











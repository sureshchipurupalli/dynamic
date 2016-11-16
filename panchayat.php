
<?php include("includes/header.php") ;

$data=$frontend_obj->getpanchayat();

 include("includes/menu.php");
 ?><!--menu-->



<div class="inner-banner">
	<h2>GRAMA PANCHAYAT NOC</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum sodales</p>
</div>
<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:1px"></div>
<div class="about-text">
	<div class="mid_wrap">
	<p><?php echo $data->description;?></p>

    </div>
</div>


 <?php include("includes/footer.php");?>










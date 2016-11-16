
<?php include("includes/header.php") ;

//$data=$frontend_obj->getdescription();

$ff="select * from tb_contentpages where id='".$_GET['id']."'";
$pp=$callConfig->getRow($ff);

 include("includes/menu.php");
 ?><!--menu-->



<div class="inner-banner">
	<h2><?php echo $pp->title;?></h2>
    <p></p>
</div>
<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:1px"></div>
<div class="about-text">
	<div class="mid_wrap">
	<p><?php echo $pp->description;?></p>

    </div>
</div>


 <?php include("includes/footer.php");?>










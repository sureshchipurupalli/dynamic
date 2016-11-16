<?php 
include("includes/header.php");



include("includes/menu.php");
$contdetails=$frontend_obj->GetAllContinents();
?>

<?php foreach($contdetails as $details){?>
<script type="text/javascript">
$(document).ready(function(){
 /*$(".<?php echo $details->title;?>").click(function(){
	 //alert("Hi");
  $(".m_<?php echo $details->title;?>").slideToggle();
 });
 */
 $('li.<?php echo $details->title;?>').click(function () {
    $(this).find('ul').toggle();
    $(this).siblings('li').find('ul').hide();
	});

 
 

});
<?php }?>
</script>



<div class="continents">

<!--<center><img src="images/cmg_soon.jpg"></center>-->
<ul>
<?php foreach($contdetails as $details){?>

	<li class="nav-list_item <?php echo $details->title;?>"><a href="#"><?php echo $details->title;?></a></li>
		<ul class="m_<?php echo $details->title;?>">
			<li>a</li>
			<li>b</li>
			<li>c</li>
		</ul>
<?php } ?>
	
	
	
		</ul>
	
	
	
</ul>
</div>

<?php include("includes/footer.php");?>


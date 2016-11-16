<?php
$getcategories1 = $frontend_obj->getcategoriesforsearch();
foreach($getcategories1 as $catdetails){
	$getcomplaints = $frontend_obj->getallcategorycomplaints($catdetails->id);	
	
if($_GET['sortby']=='Amount'){
	 $sd="select sum(price) as sumprice from tb_complaints where complaint_category=".$catdetails->id."";
	$res = mysql_query($sd);
	$fetch = mysql_fetch_object($res);
	//print_r($result13);exit;
	
	$getprice=count($result13);
	 //echo $fetch->sumprice;
	 	$priceconvert=($fetch->sumprice/1000000);
		$billon=($priceconvert/1000);
		
		$number =($fetch->sumprice);
		//echo $number;
if ($number < 1000000) {
    // Anything less than a million
    $format = number_format($number);
} else if ($number < 1000000000) {
    // Anything less than a billion
    $format = number_format($number / 1000000, 2) . 'M';
} else {
    // At least a billion
    $format = number_format($number / 1000000000, 2) . 'B';
}

	 
}	

if($catdetails->id!=7){

 ?>
<div class="container">

<div class="barChart">


       
		
		
		 <div class="barChart__row" data-value="<?php echo count($getcomplaints);?>">
		 <?php if($_GET['sortby']=='Amount') { ?>
		
            <span class="barChart__value"><?php echo $format;?></span>
			 <div class="tooltip"> <?php echo $format;?></div>  
			
		<?php } else { ?>
		 <div class="barChart__row" data-value="<?php echo  count($getcomplaints);?>">
		 <span class="barChart__value"><?php echo count($getcomplaints);?></span>
		 <div  class="tooltip"> <?php echo count($getcomplaints);?></div>  
		<?php } ?>
		
           <a href="rankinner.php?id=<?php echo $catdetails->id;?>">
		   <?php if($_GET['sortby']=='Amount')
		   { ?> 
  <span class="barChart__bar"><span class="barChart__barFill" style="text-align:right"><span class="scorebar"><?php echo $fetch->sumprice ;?></span></span></span>
		   <?php }else {?> 
		   
		    <span class="barChart__bar"><span class="barChart__barFill" style="text-align:right"><span class="scorebar"><?php echo count($getcomplaints);?><?php echo $format;?></span></span></span>
		   
		   <?php } ?></a>
        </div>
        
      
    </div>
	
	 
	</div>
	
	</div>
<!--<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/jquery.barChart.js"></script>
<script>
 jQuery('.barChart').barChart({easing: 'easeOutQuart'});
</script>

<?php } }?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  
  

</script>
<style>
.tooltip{
    visibility: hidden;
    width: 120px;
    background-color: #555;
    color: red;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -60px;
   /* opacity: 0;
    transition: opacity 1s;*/
}
</style>

<!--<script>
$(function () { 
  $('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');
});  
</script>-->

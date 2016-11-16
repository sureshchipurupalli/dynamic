<?php	
 $getcategories1 = $frontend_obj->getcategoriesforsearch();


 ?>
  
  <section>
  
  <!--<h2 class="text-center">Scroll down the page a bit</h2><br><br> -->
<div class="container">
  <div class="row" style="margin-right:70%>
    <div class="col-md-2 col-lg-2"></div>
     <div class="col-md-8 col-lg-8">
	 
	 <?php 
	
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
       
<div class="barWrapper">
 <!--<span class="progressText"><B>HTML5</B></span>-->
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo count($getcomplaints);?>" aria-valuemin="0" aria-valuemax="100" >  
<div class="tooltip20"><?php echo count($getcomplaints);?></div> 
<div class="tooltip-arrow"></div> 
        <span  class="popOver" data-toggle="tooltip" data-placement="top" title="85%"> </span>  
			 <span class="barChart__value"><?php echo count($getcomplaints);?></span>
</div>
</div>



</div>
    
    
<?php }}?>
 <div class="col-md-2 col-lg-2"></div>
</div>
</div>

  </section>
<!--<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>-->
<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/jquery.barChart.js"></script>
<script>
 jQuery('.barChart').barChart({easing: 'easeOutQuart'});
</script>-->



<!--<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  
  

</script>-->
<style>
.tooltip-arrow{
	left:46%;
}

.barChart__value{
float: right;
    position: absolute;
    left: 100%;
    padding-top:10px;
	color:#222;
	font-size:20px;
}

.tooltip20{
	position: absolute;
    background-color: green;
     float: right;
    width: 23%;
    padding: 6px 40px 6px 40px;
    /* margin-bottom: 13px; */
    /* z-index: 1012; */
    /* opacity: 9; */
    /* bottom: 40px; */
    display: inline-block;
    margin-top: -40px;
    border-radius: 4px;
}
</style>

<!--<script>
$(function () { 
  $('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');
});  
</script>-->

<!--<script src='js/bootstrap.min.js'></script>-->
 <script src="js/rank50.js"></script>


<?php 
include("includes/header.php");

$subcat=$frontend_obj->getallsubcat($_GET['id']);
$getcategoryname=$frontend_obj->getCategory($_GET['id']);
//print_r($getcategoryname);	

include("includes/menu.php");

?>
<!--<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">-->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">-->
<link href="css/jquery.barCharts.css" rel="stylesheet" type="text/css">

<style>
.barChart__barFill { background-color:#22BFD8}
.barChart__bar { height: 24px;}
h2{font-family: 'Open Sans', sans-serif;}
</style>

<script>
function nag(str)
{
//alert(str);
var cid= '<?php echo $_GET['id'];?>';
window.location.href='<?php echo SITEURL?>/rankinner.php?id='+cid+'&sortby='+str;

}


 function ClickEvent(){
    window.location.href='complaint.php';
}
 
</script>
<div class="banner">
	<img src="images/banner_02333.jpg"/>
</div>
<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:1px"></div>

<style>
	.bar-left			{}
	.bar-left>ul		{}
	.bar-left1>ul>li		{ width:100%; background:url(images/img_02.png) no-repeat; margin-bottom:30px; padding:5%;}
	.bar-left1>ul>li>a	{ color:#fff;text-transform:capitalize;  }
</style>

<h2 style="padding:25px 25px; text-align:center;"><?php echo ucfirst($getcategoryname->name); ?></h2>
<div class="sortbar">
<select class="searchbysort" id="data" name="searchbyprice" onchange="nag(this.value);" >
	<option value="Cases">Select Option</option> 
	<option value="Amount" <?php if($_GET['sortby']=='Amount') {?> selected="selected" <?php }?>>Amount</option> 
	<option value="Cases" <?php if($_GET['sortby']=='Cases') {?> selected="selected" <?php }?>>Cases</option> 
  </select>
  </div>
  
  <button class="add-comp" onclick="ClickEvent()">Add Complaint</button>
  <div class="clear_fix"></div>
<?php if($_GET['sortby']!='')
 { ?>
  
<span id="ranktitle" ><?php echo $_GET['sortby'];?></span>
 <?php } else {?>
 <span id="ranktitle" >CASES</span>
 <?php } ?>
<div class="bar">
	 
	<div class="mid_wrap">
    	<div class="bar-left1">
        	<ul>
			<?php foreach($subcat as $catlist){ 
			$roadcount=$frontend_obj->getcategoryinnercount($_GET['id'],$catlist->id);
			//print_r($catlist);
			?>           					
				<li><a href="#"><?php echo ($catlist->department_name); ?></a></li>
             <?php } ?>  
            </ul>
        </div>
		
	
    	
        <div class="bar-right">
		
		
		<div class="container">
		

<div class="barChart">

<?php foreach($subcat as $subcatlist){ 
			$roadcount=$frontend_obj->getcategoryinnercount($_GET['id'],$subcatlist->id);
			//print_r($catlist);
			if($_GET['sortby']=='Amount'){
	 $sd="select sum(price) as sumprice from tb_complaints where complaint_category=".$_GET['id']." and department=".$subcatlist->id." ";
	$res = mysql_query($sd);
	$fetch = mysql_fetch_object($res);
			}
			?>           					
        <div class="barChart__row" data-value="<?php echo count($roadcount);?>">
		
		<?php if($_GET['sortby']=='Amount'){ ?>
			<span class="barChart__value"><?php echo $fetch->sumprice;?></span>
		<?php } else { ?>
		
            <span class="barChart__value"><?php echo count($roadcount);?></span>
			
		<?php } ?>
		
           <a href="rankcategory.php?cid=<?php echo $getcategoryname->id; ?>&sid=<?php echo $subcatlist->id;?>&msg=<?php echo $getcategoryname->name; ?>">
		   
		   <?php if($_GET['sortby']=='Amount')
		   { ?>
         <span class="barChart__bar"><span class="barChart__barFill" style="text-align:right;min-width:15%"><span class="scorebar"><?php echo $fetch->sumprice ;?></span></span></span>
		   <?php } else { ?>
        
		
		<span class="barChart__bar"><span class="barChart__barFill" style="text-align:right"><span class="scorebar"><?php echo count($roadcount);?></span></span></span>
		   <?php } ?> </a>
        </div>
		
		
	 <?php } ?> 		
       
		
      
		
        
    </div>
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/jquery.barChart.js"></script>
<script>
 jQuery('.barChart').barChart({easing: 'easeOutQuart'});
</script>
</div>



        	<?php include("includes/rangebarinner.php");?>
        </div>
        <div class="clear_fix"></div>
            
    </div>
</div>


<?php include("includes/footer.php");?>
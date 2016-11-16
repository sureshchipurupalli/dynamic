<?php 
include("includes/header.php");
//$getcomplaintscount=$frontend_obj->countofallComplaints();
//$roadcount=$frontend_obj->getCountNumberofcomplaints(1);
//$policecount=$frontend_obj->getCountNumberofcomplaints(4);
//$companiescount=$frontend_obj->getCountNumberofcomplaints(3);
//$legalcount=$frontend_obj->getCountNumberofcomplaints(7);
//$fraudcount=$frontend_obj->getCountNumberofcomplaints(5);
//$newscount=$frontend_obj->getCountNumberofcomplaints(6);
//$officecount=$frontend_obj->getCountNumberofcomplaints(2);
include("includes/menu.php");
?>
<!--<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">-->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">-->
<link href="css/jquery.barCharts.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="css/rank50.css">
<!--<link rel="stylesheet" type="text/css" href="css/demo.css"/>
<link rel="stylesheet" type="text/css" href="css/easydropdown.css"/>
<script src="js/jquery.easydropdown.js"></script>-->

<style>
.barChart__barFill { background-color:#22BFD8}
.barChart__bar { height: 24px;}

.search_blg { width:25%; float:right;}
.searchcat {width: 80%; height: 28px; margin-top: 7px; border: none; background: #ededed; border-top-left-radius: 5px; 					              border-bottom-left-radius: 5px; padding-left: 15px; font-family: 'Open Sans', sans-serif; font-size: 13px;                 font-weight: 400; color: #c0c0c0; }
.search1 {width: 1%; padding: 10px;border: none; background: none;background: url("images/search.png") #ededed no-repeat center;             padding: 14px 18px;bottom: 5px;right: 4px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;position:              relative;cursor: pointer;}
.bar    {padding-top:30px;}
#ranktitle   {padding-top:25px;}
.bar-left ul li{    background: url(images/img3_03.png);margin-top: 30px;padding: 12px;color: #fff;font-family: 'Open Sans',                    sans-serif;width:230px;}
.bar-left ul li img{height:30px;width:30px;}
</style>

<script>
function nag(str)
{
//alert(str);

window.location.href='<?php echo SITEURL?>/rank.php?sortby='+str;

}


 function ClickEvent(){
    window.location.href='complaint.php';
}
 
</script>

<?php 
if($_GET['sortby']=='Price'){
	$sd="select price from tb_complaints where id=".$_GET['']."";
	
} ?>


<!--<div class="search_blg">

<select name="searchcat" class="searchcat">
<option>select</option>
<option value="low price">low price</option>
<option value="high price">high price</option>
</select>

<button class="search1"></button>
<div class="clear_fix"></div>
</div>-->
<div class="sortbar">
<!--<select class="searchbysort" id="data" name="searchbyprice" onchange="nag(this.value);" >-->
<select class="dropdown" id="" name="searchbyprice" tabindex="7" onchange="nag(this.value);" >
	<option value="Cases">Select Option</option> 
	<option value="Amount" <?php if($_GET['sortby']=='Amount') {?> selected="selected" <?php }?>>Amount</option> 
	<option value="Cases" <?php if($_GET['sortby']=='Cases') {?> selected="selected" <?php }?>>Cases</option> 
  </select>
  </div>
  
  <button class="add-comp" id="rankcomp" onclick="ClickEvent()">Add Complaint</button>
  <div class="clear_fix"></div>
 
 <?php if($_GET['sortby']!='')
 { ?>
  
<span id="ranktitle" ><?php echo $_GET['sortby'];?></span>
 <?php } else {?>
 <span id="ranktitle" >CASES</span>
 <?php } ?>
 <div>
<div class="bar">
	<div class="mid_wrap">
    	<div class="bar-left">
        	<ul>
			<?php 
	$getcategories = $frontend_obj->getallcatsbylimit();		
	//print_r($getcategories);
			foreach($getcategories as $categories){
	$getcomplaints = $frontend_obj->getallcategorycomplaints($categories->id);	
			
			if($categories->id!=7){
				
				?>
            <li><img src="uploads/homeimg/<?php echo $categories->image;?>"> <span><?php echo $categories->name;?> </span></li>
			<?php } }?>
                <!--<li><img src="images/rank_06.png" /></li>
                <li><img src="images/rank_08.png" /></li>
                <li><img src="images/rank_10.png" /></li>
                <li><img src="images/rank_12.png" /></li>
                <li><img src="images/rank_14.png" /></li>-->
            </ul>
        </div>
    	
		
        <div class="bar-right">
        	<?php include("includes/rangebar50.php");?>
        </div>
        <div class="clear_fix"></div>
            
    </div>
</div>
</div>
<div class="clear_fix"></div>

<?php include("includes/footer.php");?>
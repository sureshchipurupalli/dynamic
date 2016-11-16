<?php 
include("includes/header.php");
//$getcomplaints=$frontend_obj->countofallComplaints();
$roadcount=$frontend_obj->getCountNumberofcomplaints(1);
$policecount=$frontend_obj->getCountNumberofcomplaints(4);
$companiescount=$frontend_obj->getCountNumberofcomplaints(3);
$legalcount=$frontend_obj->getCountNumberofcomplaints(7);
$fraudcount=$frontend_obj->getCountNumberofcomplaints(5);
$newscount=$frontend_obj->getCountNumberofcomplaints(6);
$officecount=$frontend_obj->getCountNumberofcomplaints(2);
include("includes/menu.php");
?>
<!--<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">-->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">-->
<link href="css/jquery.barCharts.css" rel="stylesheet" type="text/css">

<style>
.barChart__barFill { background-color:#22BFD8}
.barChart__bar { height: 24px;}

.search_blg { width:25%; float:right;}
.searchcat {width: 80%; height: 28px; margin-top: 7px; border: none; background: #ededed; border-top-left-radius: 5px; border-bottom-left-radius: 5px; padding-left: 15px; font-family: 'Open Sans', sans-serif; font-size: 13px; font-weight: 400; color: #c0c0c0; }
	.search1 {width: 1%; padding: 10px;border: none; background: none;background: url("images/search.png") #ededed no-repeat center;padding: 14px 18px;bottom: 5px;right: 4px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;position: relative;cursor: pointer;}
.bar    {padding-top:80px;}
#ranktitle   {padding-top:60px;}
 
</style>


<script>
 function nag(str)
{
alert(str);
var cid= '<?php echo $_GET['cid'];?>';
var sid= '<?php echo $_GET['sid'];?>';
var countid='<?php echo $_GET['countid'];?>';
var todate='<?php echo $_GET['todate'];?>';
var fromdate='<?php echo $_GET['fromdate'];?>';

<?php if($_GET['sortby']=='count'){ ?>
window.location.href='<?php echo SITEURL?>/rankcategory.php?sortby='+str;
<?php }



else{ ?>
window.location.href='<?php echo SITEURL?>/rank.php?sortby='+str;
<?php } ?>

}
</script>

<?php 
$mm="SELECT price FROM tb_complaints WHERE complaint_category =
LIMIT 0 , 30";
?>
<div class="banner">
	<img src="images/banner_02333.jpg"/>
</div>
<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:1px"></div>

<!--<div class="search_blg">

<select name="searchcat" class="searchcat">
<option>select</option>
<option value="low price">low price</option>
<option value="high price">high price</option>
</select>

<button class="search1"></button>
<div class="clear_fix"></div>
</div>-->

<div class="search_block">
<form method="post" >
<select class="searchbycount" id="data" name="searchrank" onchange="nag(this.value);" style="margin-right:92px;">
	<option value="0">Select Option</option> 
	<option value="count">Count</option> 
	<option value="price">Price</option> 
  </select>
</div>
<span id="ranktitle" >cases</span>
<div class="bar">
	<div class="mid_wrap">
    	<div class="bar-left">
        	<ul>
            	<li><img src="images/rank_03.png" /></li>
                <li><img src="images/rank_06.png" /></li>
                <li><img src="images/rank_08.png" /></li>
                <li><img src="images/rank_10.png" /></li>
                <li><img src="images/rank_12.png" /></li>
                <li><img src="images/rank_14.png" /></li>
            </ul>
        </div>
    	
        <div class="bar-right">
        	<?php include("includes/rangebar.php");?>
        </div>
        <div class="clear_fix"></div>
            
    </div>
</div>


<?php include("includes/footer.php");?>
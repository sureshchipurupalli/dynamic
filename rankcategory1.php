<?php 
include("includes/header.php");

$subcatname=$frontend_obj->getallsubcatsingle($_GET['sid']);
$getcategoryname=$frontend_obj->getCategory($_GET['cid']);
//print_r($getcategoryname);	

$cid=$_GET['cid'];
$sid=$_GET['sid'];
$countid=$_GET['countid'];
$fromdate=$_GET['fromdate'];
$todate=$_GET['todate'];
$status=$_GET['status'];
$date='date_added';

if($cid!=""){
    $where[] = " `complaint_category` = ".mysql_real_escape_string($cid)."";
}

if($sid!=""){
    $where[] = " `department` = ".mysql_real_escape_string($sid)."";
}

if($countid!=""){
    $where[] = " `country_id` = ".mysql_real_escape_string($countid)."";
}

if($fromdate!="" && $todate!=""){
    $where[] = " `date_added` between '".mysql_real_escape_string($fromdate)."' AND '".mysql_real_escape_string($todate)."'";
}

if($status!=""){
    $where[] = " `status` = '".mysql_real_escape_string($status)."'";
}







$where_clause = implode(' AND ', $where);




include("includes/menu.php");


	
		//print_r($catcompliants);
?>
<!--<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">-->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">-->
<link href="css/jquery.barCharts.css" rel="stylesheet" type="text/css">

<div class="banner">
	<img src="images/banner.png"/>
</div>
<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:1px"></div>


<script>
/*function nag(str)
{
alert(str);
$rt=str;
//alert(str);
//alert($rt+$ss); 
var $ss = <?= $_GET['cid'];?>&<?= $_GET['sid'];?>;
//alert($rt+$ss);   
window.location.href="<?php echo SITEURL?>/rankcategory.php?cid=<?php echo $_GET['cid']?>&sid=<?php echo $_GET['sid']?>&status="+$rt+"";
 //alert(str);
 
 }*/
 
 /*function nag(str)
{
alert(str);
//$rt=str;
//alert(str);
//alert($rt+$ss); 
var cid= '<?php echo $_GET['cid'];?>';
var sid= '<?php echo $_GET['sid'];?>';
var countid='<?php echo $_GET['countid'];?>';
//alert($rt+$ss);   
<?php if($_GET['cid']!=''){?>
window.location.href='<?php echo SITEURL?>/rankcategory.php?cid='+cid+'&status='+str'';
<?php } elseif($_GET['sid']!='')
{ ?>

window.location.href='<?php echo SITEURL?>/rankcategory.php?cid='+cid+'&sid='+sid+'&status='+str'';
<?php } else{ ?>
window.location.href='<?php echo SITEURL?>/rankcategory.php?cid='+cid+'&sid='+sid'&countid='+countid+'&status='+str'';
<?php } ?>
 //alert(str);
 
 }*/
 
 function nag(str)
{
//alert(str);
var cid= '<?php echo $_GET['cid'];?>';
var sid= '<?php echo $_GET['sid'];?>';
var countid='<?php echo $_GET['countid'];?>';
var todate='<?php echo $_GET['todate'];?>';
var fromdate='<?php echo $_GET['fromdate'];?>';


<?php if($_GET['sid']!="" && $_GET['countid']==""){?>
window.location.href='<?php echo SITEURL?>/rankcategory1.php?cid='+cid+'&status='+str+'&sid='+sid;
<?php }

elseif($_GET['sid']=="" && $_GET['countid']!=""){ ?>
window.location.href='<?php echo SITEURL?>/rankcategory1.php?cid='+cid+'&countid='+countid+'&status='+str;
<?php }

elseif($_GET['sid']!="" && $_GET['countid']!="") { ?>
window.location.href='<?php echo SITEURL?>/rankcategory1.php?cid='+cid+'&sid='+sid+'&countid='+countid+'&status='+str;
<?php }

elseif($_GET['cid']!="" && $_GET['todate']!="" && $_GET['fromdate']!="") { ?>
window.location.href='<?php echo SITEURL?>/rankcategory1.php?cid='+cid+'&todate='+todate+'&fromdate='+fromdate+'&status='+str;
<?php }

elseif($_GET['sid']!="" && $_GET['todate']!="" && $_GET['fromdate']!="") { ?>
window.location.href='<?php echo SITEURL?>/rankcategory1.php?cid='+cid+'&sid='+sid+'&todate='+todate+'&fromdate='+fromdate+'&status='+str;
<?php }






else{ ?>
window.location.href='<?php echo SITEURL?>/rankcategory1.php?cid='+cid+'&status='+str;
<?php } ?>
}

</script>

<?php if($_GET['sid']!=""){?>

<h2 style="padding:25px 25px; text-align:center;"><?php echo ucfirst($getcategoryname->name); ?> - <?php echo ucfirst($subcatname->department_name);?></h2>

<?php } else {?>

<h2 style="padding:25px 25px; text-align:center;"><?php echo ucfirst($getcategoryname->name); ?></h2>


<?php }?>


<select class="searchbyprice" id="data" name="searchbyprice" onchange="nag(this.value);" style="margin-right:92px;">
	<option value="0">Select Option</option> 
	<option value="Open">Open</option> 
	<option value="Closed">Closed</option> 
  </select>

<div class="rankcat">

	<div class="mid_wrap">
	
	
	
	
	<div class="newmilestone_blg">
                 <ul>
                     <li>
                         <div class="milestone_delivery">
                             <p class="legal_para">User Name</p>
                            </div><!--milestone_delivery-->
                            <div class="amount1">
                             <p class="legal_para">Compliant Title</p>
                            </div><!--amount-->
                            <div class="fund_escrow">
                             <p class="legal_para">Price</p>
                            </div><!--fund_escrow-->
                            <div class="relese_fund">
                             <p class="legal_para">Status</p>
                            </div><!--notes_milestone-->
							
							  <div class="relese_fund">
                             <p class="legal_para">View</p>
                            </div><!--notes_milestone-->
                            
                            <div class="clear_fix"></div>
                        </li>
						
						
						
				<?php $res = "SELECT * FROM tb_complaints WHERE ".$where_clause." ORDER BY id ASC";
						$result = mysql_query($res);
						//$catcompliants=mysql_fetch_object($result);
				
				while($row=mysql_fetch_object($result))
				{
		
		$compliantuser = $frontend_obj->getuserdetailsofcompliant($row->user_id	);
		
		$priceconvert=($row->price/1000000);
		$billon=($priceconvert/1000);
		
		$number =($row->price);
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




	//	print_r($compliantuser);
		?>		
						
                        <li>
                         <div class="milestone_delivery">
                             <span class="para1">User Name</span>
                             <strong><?php echo $compliantuser->firstname;?></strong>
                            </div><!--first_milestone-->
                            <div class="amount1">
                             <span class="para1">Compliant Title</span>
							  <?php if($row->title!=''){?>
                                <p ><?php echo $row->title;?></p>
                             <?php }else {?>
							 <p>No title</p>
							 <?php }?>
							 
                               <p ><?php echo $row->title;?></p>
                             
                            </div><!--pay_milestone-->
                            <div class="fund_escrow">
                             <span class="para1">price</span>
							  <?php if($row->price!=''){?>
                               <p >$ <?php echo $format;?></p>
                             <?php }else {?>
							 <p>$0</p>
							 <?php }?>
                            </div><!--notes_milestone-->
                            <div class="relese_fund">
                             <span class="para1">Status</span>
                             <p ><?php echo $row->status;?> 
							
                            </div><!--deliverydate-->
							
							<div class="relese_fund">
                             <span class="para1">View</span>
                             
							 <?php if($row->status=='Open'){?>
								 <a href="innerpage.php?id=<?php echo $row->id;?>">View</a></p>
							 <?php } ?>
                            </div>
                            
                            <div class="clear_fix"></div>
                        </li>
                        
                   <?php }?>
                        
                    </ul>
                    
                </div><!--newmilestone_blg-->
	
    	
		<?php /*?><div class="catbar">
		
		<ul>
		
		<?php foreach($catcompliants as $catcomp){
		
		$compliantuser = $frontend_obj->getuserdetailsofcompliant($catcomp->user_id);
		?>
			
			<li><?php echo $compliantuser->firstname;?>-<?php echo $catcomp->title;?>-<?php echo $catcomp->price;?>-<?php echo $catcomp->status;?></li>
			
		<?php }?>
			
		</ul>
		
		</div><?php */?>
            
    </div>
</div>


<?php include("includes/footer.php");?>
<?php 
include("includes/header.php");

$subcatname=$frontend_obj->getallsubcatsingle($_GET['sid']);
$getcategoryname=$frontend_obj->getCategory($_GET['cid']);
//print_r($getcategoryname);	

if($_GET['sid']!=""){
$catcompliants = $frontend_obj->getallcatwithsubcatcomplaints($_GET['cid'],$_GET['sid']);

} else{

$catcompliants = $frontend_obj->getallcategorycomplaints($_GET['cid']);
}

/*open close queries*/

if($_GET['status']=='Closed'){

if($_GET['status']=='Closed' && $_GET['sid']!="" && $_GET['cid']!=""){

$catcompliants = $frontend_obj->getallcatwithsubcatcompclosed($_GET['cid'],$_GET['sid']);

} else if($_GET['status']=='Closed' && $_GET['sid']=="" && $_GET['cid']!=""){

$catcompliants = $frontend_obj->getallcategorycompclosed($_GET['cid']);

}


} else {

if($_GET['status']=='Open' && $_GET['sid']!="" && $_GET['cid']!=""){

$catcompliants = $frontend_obj->getallcatwithsubcatcompopen($_GET['cid'],$_GET['sid']);

} else if($_GET['status']=='Open' && $_GET['sid']=="" & $_GET['cid']!=""){

$catcompliants = $frontend_obj->getallcategorycompopen($_GET['cid']);

}

}

include("includes/menu.php");
?>
<!--<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">-->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">-->
<link href="css/jquery.barCharts.css" rel="stylesheet" type="text/css">

<div class="banner">
	<img src="images/banner.png"/>
</div>
<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:1px"></div>


<script>
function nag(str)
{
//alert('str');
$rt=str;
//alert($rt+$ss); 
var $ss = <?= $_GET['cid'];?>&<?= $_GET['sid'];?>;
//alert($rt+$ss);   
window.location.href="<?php echo SITEURL?>/rankcategory.php?cid=<?php echo $_GET['cid']?>&sid=<?php echo $_GET['sid']?>&status="+$rt+"";
 //alert(str);
 
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
                             <p class="para">User name</p>
                            </div><!--milestone_delivery-->
                            <div class="amount1">
                             <p class="para">Compliant Title</p>
                            </div><!--amount-->
                            <div class="fund_escrow">
                             <p class="para">Price</p>
                            </div><!--fund_escrow-->
                            <div class="relese_fund">
                             <p class="para">Status</p>
                            </div><!--notes_milestone-->
							
							  <div class="relese_fund">
                             <p class="para">View</p>
                            </div><!--notes_milestone-->
                            
                            <div class="clear_fix"></div>
                        </li>
						
						
						
				<?php $sql="select from tb_complaints where status=".$_GET['status']."";
						$res=mysql_fetch_object($sql);
				
				foreach($catcompliants as $catcomp){
		
		$compliantuser = $frontend_obj->getuserdetailsofcompliant($catcomp->user_id);
		?>		
						
                        <li>
                         <div class="milestone_delivery">
                             <span class="para1">User Name</span>
                             <strong><?php echo $compliantuser->firstname;?></strong>
                            </div><!--first_milestone-->
                            <div class="amount1">
                             <span class="para1">Compliant Title</span>
							  <?php if($catcomp->title!=''){?>
                                <p ><?php echo $catcomp->title;?></p>
                             <?php }else {?>
							 <p>No title</p>
							 <?php }?>
							 
                               <p ><?php echo $catcomp->title;?></p>
                             
                            </div><!--pay_milestone-->
                            <div class="fund_escrow">
                             <span class="para1">price</span>
							 <?php if($catcomp->price!=''){?>
                                <p >$<?php echo $catcomp->price;?></p>
                             <?php }else {?>
							 <p>$0</p>
							 <?php }?>
                            </div><!--notes_milestone-->
                            <div class="relese_fund">
                             <span class="para1">Status</span>
                             <p ><?php echo $catcomp->status;?> 
							
                            </div><!--deliverydate-->
							
							<div class="relese_fund">
                             <span class="para1">View</span>
                             
							 <?php if($catcomp->status=='Open'){?>
								 <a href="innerpage.php?id=<?php echo $catcomp->id;?>">View</a></p>
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
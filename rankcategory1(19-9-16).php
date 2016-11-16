<?php 
include("includes/header.php");

$subcatname=$frontend_obj->getallsubcatsingle($_GET['sid']);
$getcategoryname=$frontend_obj->getCategory($_GET['cid']);
//print_r($getcategoryname);	

if($_GET['cid']!="" && $_GET['sid']!="" && $_GET['countid']==""){
$catcompliants = $frontend_obj->getallcatwithsubcatcomplaints($_GET['cid'],$_GET['sid']);

} 

/*--------------cid and country----------*/
elseif($_GET['cid']!="" && $_GET['countid']!="" && $_GET['sid']==""){
	$catcompliants = $frontend_obj->getcomplaintsbycountry1($_GET['cid'],$_GET['countid']);
}



elseif($_GET['status']=='Closed' && $_GET['sid']=="" && $_GET['cid']!="" && $_GET['countid']!=''){
	
	$catcompliants = $frontend_obj->getclosedcountrycomplaints($_GET['cid'],$_GET['countid']);
	
}

elseif($_GET['status']=='Open' && $_GET['sid']=="" && $_GET['cid']!="" && $_GET['countid']!=''){
	
	$catcompliants = $frontend_obj->getopencountrycomplaints($_GET['cid'],$_GET['countid']);
	
}



/*-------end of cid and country-----------*/

/*-------------cid and calender----------------*/


elseif($_GET['cid']!='' && $_GET['todate']!='' && $_GET['fromdate']!='')
{
	
	$catcompliants = $frontend_obj->getcategoryinnercountwithdatesub($_GET['cid'],$_GET['todate'],$_GET['fromdate']);
}


elseif($_GET['cid']!='' && $_GET['sid']=='' && $_GET['todate']!='' && $_GET['fromdate']!='' && $_GET['status']=='Open')
{
	$catcompliants = $frontend_obj->getopencompliantswithdatesub($_GET['cid'],$_GET['todate'],$_GET['fromdate']);
}

elseif($_GET['cid']!='' && $_GET['sid']=='' && $_GET['todate']!='' && $_GET['fromdate']!='' && $_GET['status']=='Closed')
{
	$catcompliants = $frontend_obj->getclosedcomplaintswithdatesub($_GET['cid'],$_GET['todate'],$_GET['fromdate']);
}


/*---------------------end of cid and calender-------------*/

/*---------------------cid and sid and calender--------------*/
elseif($_GET['cid']!='' && $_GET['sid']!='' && $_GET['todate']!='' && $_GET['fromdate']!='' && $_GET['countid']=='')
{
	
	$catcompliants = $frontend_obj->getcategoryinnercountwithdate($_GET['cid'], $_GET['sid'],$_GET['todate'],$_GET['fromdate']);
}


elseif($_GET['cid']!='' && $_GET['sid']!='' && $_GET['todate']!='' && $_GET['fromdate']!='' && $_GET['status']=='Open' && $_GET['countid']=='')
{
	$catcompliants = $frontend_obj->getopencompliantswithdate($_GET['cid'],$_GET['sid'],$_GET['todate'],$_GET['fromdate']);
}

elseif($_GET['cid']!='' && $_GET['sid']!='' && $_GET['todate']!='' && $_GET['fromdate']!='' && $_GET['status']=='Closed' &$_GET['countid']=='')
{
	$catcompliants = $frontend_obj->getclosedcomplaintswithdate($_GET['cid'],$_GET['sid'],$_GET['todate'],$_GET['fromdate']);
}




/*--------------------end of cid,sid, and date------------------*/

elseif( $_GET['sid']!="" && $_GET['cid']!="" && $_GET['countid']!='')
{
	$catcompliants = $frontend_obj->getcountrycomplaintsfordashsub($_GET['cid'],$_GET['sid'],$_GET['countid']);
}
elseif( $_GET['sid']=="" && $_GET['cid']!="" && $_GET['countid']==''){
$catcompliants = $frontend_obj->getallcategorycomplaints($_GET['cid']);
}

/*open close queries*/

if($_GET['status']=='Closed'){
	
	/*-------status=closed and cid and sid---------*/

if($_GET['status']=='Closed' && $_GET['sid']!="" && $_GET['cid']!="" && $_GET['count_id']==''){

$catcompliants = $frontend_obj->getallcatwithsubcatcompclosed($_GET['cid'],$_GET['sid']);

} 
}

/*-----endof condition------*/

/*------------status=closed and cid----------*/

else if($_GET['status']=='Closed' && $_GET['sid']=="" && $_GET['cid']!=""){
	

$catcompliants = $frontend_obj->getallcategorycompclosed($_GET['cid']);

}

/*------------------end of condition-------------*/

elseif($_GET['cid']!='' && $_GET['sid']!='' && $_GET['countid']!='' && $_GET['status']=='Open')
{
	
	$catcompliants = $frontend_obj->getopencountrycomplaintsub($_GET['cid'],$_GET['sid'],$_GET['countid']);
}

elseif($_GET['cid']!='' && $_GET['sid']!='' && $_GET['countid']!='' && $_GET['status']=='Closed')
{
$catcompliants = $frontend_obj->getclosedcountrycomplaintsub($_GET['cid'],$_GET['sid'],$_GET['countid']);
}

 else {
/*-------status open,cid and sid----------*/
if($_GET['status']=='Open' && $_GET['sid']!="" && $_GET['cid']!=""){
	
//echo "Hhhh";exit;
$catcompliants = $frontend_obj->getallcatwithsubcatcompopen($_GET['cid'],$_GET['sid']);

}/*elseif($_GET['status']=='Closed' && $_GET['sid']!="" && $_GET['cid']!=""){
$catcompliants = $frontend_obj->getclosedcomplaints($_GET['cid'],$_GET['sid']);
}
/*----------end of cond--------*/


/*--------status open ,cid,sid=empty--------*/
elseif($_GET['status']=='Open' && $_GET['sid']=="" && $_GET['cid']!="") 
{
	
$catcompliants = $frontend_obj->getopencomplaintsbycategory($_GET['cid']);
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
alert(str);
var cid= '<?php echo $_GET['cid'];?>';
var sid= '<?php echo $_GET['sid'];?>';
var countid='<?php echo $_GET['countid'];?>';
var todate='<?php echo $_GET['todate'];?>';
var fromdate='<?php echo $_GET['fromdate'];?>';

<?php if($_GET['sid']!="" && $_GET['countid']=="" && $_GET['countid']=='' && $_GET['todate']=='' && $_GET['fromdate']==''){?>
window.location.href='<?php echo SITEURL?>/rankcategory.php?cid='+cid+'&status='+str+'&sid='+sid;
<?php }

elseif($_GET['sid']=="" && $_GET['countid']!=""){ ?>
window.location.href='<?php echo SITEURL?>/rankcategory.php?cid='+cid+'&countid='+countid+'&status='+str;
<?php }

elseif($_GET['sid']!="" && $_GET['countid']!="") { ?>
window.location.href='<?php echo SITEURL?>/rankcategory.php?cid='+cid+'&sid='+sid+'&countid='+countid+'&status='+str;
<?php }

elseif($_GET['cid']!="" && $_GET['sid']=="" && $_GET['todate']!="" && $_GET['fromdate']!="" && $_GET['countid']=="")
{?>
window.location.href='<?php echo SITEURL?>/rankcategory.php?cid='+cid+'&todate='+todate+'&fromdate='+fromdate+'&status='+str;
	
<?php }

elseif( $_GET['sid']!='' && $_GET['countid']=='' && $_GET['todate']!='' && $_GET['fromdate']!='')
{?>
window.location.href='<?php echo SITEURL?>/rankcategory.php?cid='+cid+'&sid='+sid+'&todate='+todate+'&fromdate='+fromdate+'&status='+str;
	
<?php }


else{ ?>
window.location.href='<?php echo SITEURL?>/rankcategory.php?cid='+cid+'&status='+str;
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
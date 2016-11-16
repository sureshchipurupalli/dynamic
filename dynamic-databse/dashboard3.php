<?php 
include("includes/header.php");

$subcat=$frontend_obj->getallsubcat($_GET['cid']);
$getcategoryname=$frontend_obj->getCategory($_GET['cid']);
$getsubcategoryname=$frontend_obj->getallsubcatsingle($_GET['sid']);
$getallcountries=$frontend_obj->getAllCountry();


$getallcategories = $frontend_obj->getcategoriesforsearch();


//********************cid *******************/
 if($_GET['sid']=='' && $_GET['fromdate']=="" && $_GET['todate']=="" && $_GET['cid']!="" && $_GET['countid']==''){

$getallresults=$frontend_obj->getcategorycountfordashboard($_GET['cid']);

$compliantcount = count($getallresults);


$opencompliants = $frontend_obj->getopencompliantswithcat($_GET['cid']);
$opencmpcnt = count($opencompliants);
	
$closedcompliants = $frontend_obj->getclosedcomplaintswithcat($_GET['cid']);
$closedcompcnt = count($closedcompliants);	


$sp  = "select sum(price) as sumprice from tb_complaints where complaint_category='".$_GET['cid']."' ";
$res = mysql_query($sp);
$fetch = mysql_fetch_object($res);

$cuser  = "select count(DISTINCT(user_id)) as totalusers from tb_complaints where complaint_category='".$_GET['cid']."' ";
$cres = mysql_query($cuser);
$cfetch = mysql_fetch_object($cres);	


//********************cid & sid*******************/
} else if($_GET['cid']!="" && $_GET['sid']!='' && $_GET['countid']=='' && $_GET['fromdate']=="" && $_GET['todate']==""){
$getallresults=$frontend_obj->getcategoryinnercount($_GET['cid'],$_GET['sid']);

$compliantcount = count($getallresults);

$opencompliants = $frontend_obj->getopencompliants($_GET['cid'],$_GET['sid']);
$opencmpcnt = count($opencompliants);

$closedcompliants = $frontend_obj->getclosedcomplaints($_GET['cid'],$_GET['sid']);
$closedcompcnt = count($closedcompliants);

$sp  = "select sum(price) as sumprice from tb_complaints where complaint_category='".$_GET['cid']."' and department='".$_GET['sid']."' ";
$res = mysql_query($sp);
$fetch = mysql_fetch_object($res);

$cuser  = "select count(DISTINCT(user_id)) as totalusers from tb_complaints where complaint_category='".$_GET['cid']."' and department='".$_GET['sid']."' ";
$cres = mysql_query($cuser);
$cfetch = mysql_fetch_object($cres);




//********************cid & sid & calendar*******************/	
} else
if($_GET['fromdate']!="" && $_GET['todate']!="" & $_GET['sid']!="" && $_GET['cid']!="" && $_GET['countid']==''){

$getallresults=$frontend_obj->getcategoryinnercountwithdate($_GET);

$compliantcount = count($getallresults);

$opencompliants = $frontend_obj->getopencompliantswithdate($_GET);
$opencmpcnt = count($opencompliants);

$closedcompliants = $frontend_obj->getclosedcomplaintswithdate($_GET);
$closedcompcnt = count($closedcompliants);

$sp  = "select sum(price) as sumprice from tb_complaints where complaint_category='".$_GET['cid']."' and department='".$_GET['sid']."' and date_added between '".$_GET['fromdate']."' and '".$_GET['todate']."' ";
$res = mysql_query($sp);
$fetch = mysql_fetch_object($res);

$cuser  = "select count(DISTINCT(user_id)) as totalusers from tb_complaints where complaint_category='".$_GET['cid']."' and department='".$_GET['sid']."' and date_added between '".$_GET['fromdate']."' and '".$_GET['todate']."' ";
$cres = mysql_query($cuser);
$cfetch = mysql_fetch_object($cres);


//********************cid & calendar*******************/	

} else if($_GET['fromdate']!="" && $_GET['todate']!="" && $_GET['sid']=="" && $_GET['cid']!="" && $_GET['countid']==''){

$getallresults=$frontend_obj->getcategoryinnercountwithdatesub($_GET);


$compliantcount = count($getallresults);


$opencompliants = $frontend_obj->getopencompliantswithdatesub($_GET);

$opencmpcnt = count($opencompliants);


$closedcompliants = $frontend_obj->getclosedcomplaintswithdatesub($_GET);
//echo "Hiiiii55555";

$closedcompcnt = count($closedcompliants);


$sp  = "select sum(price) as sumprice from tb_complaints where complaint_category='".$_GET['cid']."' and date_added between '".$_GET['fromdate']."' and '".$_GET['todate']."' ";
$res = mysql_query($sp);
$fetch = mysql_fetch_object($res);

$cuser  = "select count(DISTINCT(user_id)) as totalusers from tb_complaints where complaint_category='".$_GET['cid']."' and date_added between '".$_GET['fromdate']."' and '".$_GET['todate']."' ";
$cres = mysql_query($cuser);
$cfetch = mysql_fetch_object($cres);

//********************cid & country*******************/	

}
else
if($_GET['cid']!=''&& $_GET['countid']!='' && $_GET['fromdate']=="" && $_GET['todate']=="" && $_GET['sid']=="")
{

$getallresults=$frontend_obj->getcountrycomplaintsfordashboard($_GET);

$compliantcount = count($getallresults);

$opencompliants = $frontend_obj->getopencountrycomplaints($_GET);
$opencmpcnt = count($opencompliants);
//secho "Hiiiii55555";

$closedcompliants = $frontend_obj->getclosedcountrycomplaints($_GET);
$closedcompcnt = count($closedcompliants);
$sp  = "select sum(price) as sumprice from tb_complaints where complaint_category='".$_GET['cid']."' and country_id='".$_GET['countid']."' ";
$res = mysql_query($sp);

$fetch = mysql_fetch_object($res);

$cuser  = "select count(DISTINCT(user_id)) as totalusers from tb_complaints where complaint_category='".$_GET['cid']."'  and country_id='".$_GET['countid']."' ";
$cres = mysql_query($cuser);
$cfetch = mysql_fetch_object($cres);



/***********cid & sid & country*************/	
}
else if($_GET['cid']!=''&& $_GET['countid']!='' && $_GET['fromdate']=="" && $_GET['todate']=="" && $_GET['sid']!="")
{

$getallresults=$frontend_obj->getcountrycomplaintsfordashsub($_GET);

$compliantcount = count($getallresults);

$opencompliants = $frontend_obj->getopencountrycomplaintsub($_GET);
$opencmpcnt = count($opencompliants);

$closedcompliants = $frontend_obj->getclosedcountrycomplaintsub($_GET);
$closedcompcnt = count($closedcompliants);

$sp  = "select sum(price) as sumprice from tb_complaints where complaint_category='".$_GET['cid']."' and department='".$_GET['sid']."' and country_id='".$_GET['countid']."' ";
$res = mysql_query($sp);
$fetch = mysql_fetch_object($res);

$cuser  = "select count(DISTINCT(user_id)) as totalusers from tb_complaints where complaint_category='".$_GET['cid']."'  and department='".$_GET['sid']."' and country_id='".$_GET['countid']."' ";
$cres = mysql_query($cuser);
$cfetch = mysql_fetch_object($cres);

}

if($_POST['datesearch']=='search'){

$searchdate = $frontend_obj->selectdatetosearch($_POST);
			 
}





include("includes/menu.php");
?>
<!--<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">-->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">-->
<link href="css/jquery.barCharts.css" rel="stylesheet" type="text/css">

<style>
.barChart__barFill { background-color:#22BFD8}
.barChart__bar { height: 24px;}
.barChart p		{ cursor:pointer; margin-bottom:10px; font-family:'Open Sans', sans-serif;}
.barChart p a	{ color:#1268a5;}
</style>
<div class="banner">

		
	<img src="uploads/homeimg/<?php echo $getcategoryname->banner;?>"/>
</div>




</div>
<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:1px"></div>

<style>
	.bar-left			{}
	.bar-left>ul		{}
	.bar-left>ul>li		{ width:100%; background:url(images/img3_03.png) no-repeat; margin-bottom:10px; padding:5%;}
	
	.test	{ width:100%; background:url(images/img31_03.png) no-repeat; margin-bottom:10px; padding:5%;}
	.bar-left>ul>li>a	{ color:#fff;font-family: 'Open Sans', sans-serif;  }



.form       {}
.form_left  {width:50%;float:left; margin-right:5%;}
.form_right {width:45%;float:left;}
.form_left p {font-family: 'Open Sans', sans-serif;font-size: 13px;font-weight: 400;}
li          {list-style:none;}
.form_blog  {}
.form_blog ul li {padding:10px 0px;}
.form_blog span  {font-family: 'Open Sans', sans-serif;font-weight: 400;font-size: 15px}
.form_blog .name {width:100%; height:30px;border:none;/*border:1px solid #CCC;border-radius:5px;background:#ededed;*/color:#c0c0c0;padding-left:15px;font-family: 'Open Sans', sans-serif;font-size: 13px;font-weight: 400;} 
.form_name       {width:23%;float:left;}
.form_text       {width:77%;float:left;} 	
	
</style>


<script type="text/javascript">

function selectsearch(value){
var id = value;

if(id!=""){ 
window.location.href='dashboard1.php?cid='+id; 
}

}
</script>

<script type="text/javascript">

function searchcountry(ss){
	alert(ss);
	var cid= '<?php echo $_GET['cid'];?>';
	var sid= '<?php echo $_GET['sid'];?>';
	
	if(sid!=''){
window.location.href='dashboard1.php?cid='+cid+'&sid='+sid+'&countid='+ss;
}else{
	window.location.href='dashboard1.php?cid='+cid+'&countid='+ss;
}
}
</script>



<h2 style="padding:25px 25px; text-align:center;"><?php echo ucfirst($getcategoryname->name); ?>
<?php if($_GET['sid']!=''){ ?>
- <?php echo ucfirst($getsubcategoryname->department_name); ?>
<?php } ?>

</h2>





<?php if($_GET['cid']=='7'){?>

<div class="bar">
	<div class="mid_wrap">
	
				<?php /*?><p>Name:<?php echo $getlegaldetails->name;?></p>
				<p>Address:<?php echo $getlegaldetails->address;?></p>
				<p>Cases Handled:<?php echo $getlegaldetails->cases_handled;?></p>
				<p>Reviews</p><?php */?>
			
			
  <div class="form">
  <div class="bar-left">
        	<ul>
            
			<?php foreach($subcat as $catlist){ 
			$roadcount=$frontend_obj->getcategoryinnercount($_GET['cid'],$catlist->id);
			//print_r($catlist);
			?>     
            <?php  
			
			  $rt=$_GET['sid'];
			?>      					
				<li  <?php if($rt==$catlist->id){?> style="width:100%; background:url(images/img31_03.png) no-repeat; margin-bottom:10px; padding:5%;" <?php }?> ><a href="dashboard1.php?cid=<?php echo $_GET['cid']; ?>&sid=<?php echo $catlist->id; ?>"><?php echo ucfirst($catlist->department_name); ?></a></li>
             <?php } ?>  
            </ul>
        </div>
		
		 
  
   
    <?php /*?><div class="form_right" style="margin-left:116px;">
    
    
    <div class="form_blog">
   
  
     <ul>
     <li>
     <div class="form_name">
      <span><b>Name</b>:</span>
      </div>
      <div class="form_text">
      <p><?php echo $getlegaldetails->name;?></p>
      </div><!--form_text-->
      <div class="clear_fix"></div>
      </li>
     <li>
      <div class="form_name">
     <span><b>Address</b>:</span>
     </div><!--form_name-->
     <div class="form_text">
     <p><?php echo $getlegaldetails->address;?></p>
     </div><!--form_text-->
      <div class="clear_fix"></div>
     </li>
     <li>
      <div class="form_name">
     <span><b>Cases Handled</b>:</span>
     </div><!--form-name-->
     <div class="form_text">
     <p><?php echo $getlegaldetails->cases_handled;?></p>
     </div>
     <div class="clear_fix">
     </li>
     <li>
     <div class="form_name">
     <span><b>Reviews</b>:</span>
      </div><!--form-name-->
      <div class="form_text">
      <p></p>
            </div><!--form-text-->
             <div class="clear_fix"></div>
            </li>
      
     </ul>
    </div><!--form_blog-->
    </div><!--form-right-->
    <div class="clear_fix"></div>
  </div><?php */?>
  
  <div class="legal_rankcat">
  <div class="getlegal_blg_one">
                 <ul>
                     <li>
                         <div class="getlegal_delivery">
                             <p class="legal_para">Name</p>
                            </div><!--milestone_delivery-->
                            <div class="legal_amount1">
                             <p class="legal_para">Address</p>
                            </div><!--amount-->
                            <div class="legal_fund_escrow">
                             <p class="para">Cases handled</p>
                            </div><!--fund_escrow-->
                            <div class="legal_relese_fund">
                             <p class="legal_para">Reviews</p>
                            </div><!--notes_milestone-->
							
							  
                            
                            <div class="clear_fix"></div>
                        </li>
						
						
						
				<?php $sql="select from tb_legal where  sid=".$_GET['sid']."";
						$res=mysql_fetch_object($sql);
						
				$getlegaldetails=$frontend_obj->getlegalexpertdetails($_GET['sid']);
				
				foreach($getlegaldetails as $catcomp){
		
		//$compliantuser = $frontend_obj->getuserdetailsofcompliant($catcomp->user_id);
		//print_r($catcomp);
		?>		
						
                        <li>
                         <div class="getlegal_delivery">
                             <span class="legal_para1">User Name</span>
                             <strong><?php echo ucfirst($catcomp->name);?></strong>
                            </div><!--first_milestone-->
                            <div class="legal_amount1">
                             <span class="legal_para1">Compliant Title</span>
							  
							 
                               <p ><?php echo ucfirst($catcomp->address);?></p>
                             
                            </div><!--pay_milestone-->
                            <div class="legal_fund_escrow">
                             <span class="para1">price</span>
							 
                                <p ><?php echo ucfirst($catcomp->cases_handled);?></p>
                            
							
                            </div><!--notes_milestone-->

                            
                            <div class="clear_fix"></div>
                        </li>
                        
                   <?php }?>
                        
                    </ul>
                    
                </div><!--newmilestone_blg-->
				</div>
  
	</div>
</div>

<?php } else {?>





<div class="bar">

	<div class="mid_wrap">
	
	
    	<div class="bar-left">
		<div class="search_blg1">


<form name="categorysearch" method="post">

<select name="searchcat" class="searchcat" id="searchcat" onChange="selectsearch(this.value)" >
<option>Select Category</option>

<?php foreach($getallcategories as $categories){?>

<?php if($categories->id!='7'){?>
<option value="<?php echo $categories->id;?>"><?php echo $categories->name;?></option>
<?php } ?>

<?php }?>
</select>


</form>

</div>

<div class="clear_fix"></div>
        	<ul>
            
			<?php foreach($subcat as $catlist){ 
			$roadcount=$frontend_obj->getcategoryinnercount($_GET['cid'],$catlist->id);
			//print_r($catlist);
			?>     
            <?php  
			
			  $rt=$_GET['sid'];
			?>      					
				<li  <?php if($rt==$catlist->id){?> style="width:100%; background:url(images/img31_03.png) no-repeat; margin-bottom:10px; padding:5%;" <?php }?> ><a href="dashboard1.php?cid=<?php echo $_GET['cid']; ?>&sid=<?php echo $catlist->id; ?>"><?php echo ucfirst($catlist->department_name); ?></a></li>
             <?php } ?>  
            </ul>
			
			<div class="dashboard_search_blg">

<div class="search_country_blg">

<form name="calendrasearch" method="post">

	<input type="text" class="search_dates" placeholder="Enter From date" name="fromdate" id="fromdate" /><br>

	<input type="text" class="search_dates" placeholder="Enter To date" name="todate" id="todate" /><br>
	
	<input type="hidden" class="search_dates"  name="cid"  value="<?php echo $_GET['cid'];?>"/><br>
	<?php if($_GET['sid']!=""){?>
	<input type="hidden" class="search_dates"  name="sid" value="<?php echo $_GET['sid'];?>" /><br>
	<?php }?>
	
	<input type="submit" value="search" name="datesearch" class="datesearchbtn"/>
	
</form>	

</div>



</div>
			
        </div>
		
		
		
	
    	
        <div class="bar-right1">
		<div class="container">

<div class="barChart">

<div class="mid_wrap">

<div class="search_blg">


<form name="countrysearch" method="post">

<select name="searchcat" class="searchcountry" id="searchcat" onchange="searchcountry(this.value);">
<option >Select Country</option>

<?php foreach($getallcountries as $countries){?>

<option value="<?php echo $countries->id;?>"><?php echo $countries->country_name;?></option>

<?php }?>
</select>


</form>

</div>
<div class="clear_fix"></div>



	
	<?php 
	$closedrate = ($closedcompcnt/$compliantcount)*100;
	
	$closerate = explode(".",$closedrate);
	$closedpercent = $closerate[0];
	
	$openrate = ($opencmpcnt/$compliantcount)*100;
	$opendrate = explode(".",$openrate);
	$openedpercent = $opendrate[0];
	?>
			
	
       
        <div class="total">
        	<h2>TOTAL ACHIEVED</h2>
            <ul>
            	<li>
                	<div class="t-left">
                    	<p>Yearly Post Collected</p>
                        <img src="images/dashboard_09.png" />
                    </div>
                    <div class="t-right">
                    	<img src="images/dolar_03.png" />
                        <p>$<?php echo $fetch->sumprice;?></p>
                    </div>
                    <div class="clear_fix"></div>
                </li>
               
            </ul>	
        </div>
		
		<?php if($_GET['sid']!="" && $_GET['countid']=='' && $_GET['fromdate']=='' && $_GET['todate']==''){?>

<p><a href="rankcategory.php?cid=<?php echo $_GET['cid']?>&sid=<?php echo $_GET['sid'];?>">Total Posted Cases: <?php echo count($getallresults);?></a>, <?php if($closedcompcnt != 0){?><a href="rankcategory.php?cid=<?php echo $_GET['cid']?>&sid=<?php echo $_GET['sid'];?>&status=Closed">Completed Cases: <?php echo $closedcompcnt;?></a> <?php }else{?> Completed Cases: <?php echo $closedcompcnt;?> <?php }?></p>


		<?php }elseif($_GET['sid']=="" && $_GET['countid']!=""){ ?>

<p><a href="rankcategory.php?cid=<?php echo $_GET['cid']?>&countid=<?php echo $_GET['countid'];?>">Total Posted Cases: <?php echo count($getallresults);?></a>, <?php if($closedcompcnt != 0){?><a href="rankcategory.php?cid=<?php echo $_GET['cid']?>&countid=<?php echo $_GET['countid'];?>&status=Closed">Completed Cases: <?php echo $closedcompcnt;?></a><?php }else{?> Completed Cases: <?php echo $closedcompcnt;?> <?php }?></p>

<?php } elseif($_GET['cid']!="" && $_GET['sid']!='' && $_GET['countid']!="")
{?>
	<p><a href="rankcategory.php?cid=<?php echo $_GET['cid']?>&sid=<?php echo $_GET['sid']?>&countid=<?php echo $_GET['countid'];?>">Total Posted Cases: <?php echo count($getallresults);?></a>, <?php if($closedcompcnt != 0){?><a href="rankcategory.php?cid=<?php echo $_GET['cid']?>&sid=<?php echo $_GET['sid']?>&countid=<?php echo $_GET['countid']?>&status=Closed">Completed Cases: <?php echo $closedcompcnt;?></a><?php }else{?> Completed Cases: <?php echo $closedcompcnt;?> <?php }?></p>
	
<?php }


elseif($_GET['cid']!='' && $_GET['sid']=='' && $_GET['todate']!='' && $_GET['fromdate']!='')
{ ?>
	<p><a href="rankcategory.php?cid=<?php echo $_GET['cid']?>&todate=<?php echo $_GET['todate']?>&fromdate=<?php echo $_GET['fromdate'];?>">Total Posted Cases: <?php echo count($getallresults);?></a>, <?php if($closedcompcnt != 0){?><a href="rankcategory.php?cid=<?php echo $_GET['cid']?>&todate=<?php echo $_GET['todate']?>&fromdate=<?php echo $_GET['fromdate']?>">Completed Cases: <?php echo $closedcompcnt;?></a><?php }else{?> Completed Cases: <?php echo $closedcompcnt;?> <?php }?></p>
	
<?php }

elseif($_GET['sid']!='' && $_GET['fromdate']!='' && $_GET['todate']!='')
{ ?>
	<p><a href="rankcategory.php?cid=<?php echo $_GET['cid']?>&sid=<?php echo $_GET['sid']?>&todate=<?php echo $_GET['todate']?>&fromdate=<?php echo $_GET['fromdate'];?>">Total Posted Cases: <?php echo count($getallresults);?></a>, <?php if($closedcompcnt != 0){?><a href="rankcategory.php?cid=<?php echo $_GET['cid']?>&sid=<?php echo $_GET['sid']?>&todate=<?php echo $_GET['todate']?>&fromdate=<?php echo $_GET['fromdate']?>">Completed Cases: <?php echo $closedcompcnt;?></a><?php }else{?> Completed Cases: <?php echo $closedcompcnt;?> <?php }?></p>
	
<?php }



else{?>

    <p><a href="rankcategory.php?cid=<?php echo $_GET['cid']?>">Total Posted Cases: <?php echo count($getallresults);?></a>, <?php if($closedcompcnt != 0){?><a href="rankcategory.php?cid=<?php echo $_GET['cid']?>&status=Closed">Completed Cases: <?php echo $closedcompcnt;?></a><?php }else{?> Completed Cases: <?php echo $closedcompcnt;?> <?php }?></p>

<?php }?>


		 <div class="percentage">
        	<h2>PERCENTAGE OF ACHIVEMENT</h2>
            <!--<img src="images/percentage_03.png" />-->
			
			 <div id="piechart" style="width: 250px; height: 200px;"></div>
				
			
            <h3>$<?php echo $fetch->sumprice;?></h3>
            <div class="problem">
            	<div class="unsolved">
                	<p><?php echo $openedpercent;?>%</p>
                    <p>Unsolved</p>
                </div>
                <div class="solved">
                	<p><?php echo $closedpercent;?>%</p>
                    <p>Solved</p>
                </div>
        		<div class="clear_fix"></div>        
            </div>
			 <div class="clear_fix"></div>
        </div>
		
		
        <div class="user">
        	<h2>TOTAL USERS ON THIS CATEGORY</h2>
            <h3>Total 56 countries</h3>
            <img src="images/man_09.png" />
            <h4><?php echo $cfetch->totalusers;?></h4>
            <p>users raised complaints</p>
        </div>
        <div class="clear_fix"></div>
    </div>
</div>
       
		
       
		
        
    </div>
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/jquery.barChart.js"></script>
<script>
 jQuery('.barChart').barChart({easing: 'easeOutQuart'});
</script>
</div>



        	
        </div>
        <div class="clear_fix"></div>
            
    
	
	
	
	<?php }?>
	
</div>


<?php include("includes/footer.php");?>

<?php //$gg=count($getallresults)-count($closedcompliants);?>

<?php if($closedcompcnt !='0' || $opencmpcnt!='0'){?>

		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    			<script type="text/javascript">
					  google.charts.load('current', {'packages':['corechart']});
					  google.charts.setOnLoadCallback(drawChart);
					  function drawChart() {
				
						var data = google.visualization.arrayToDataTable([
						  ['Compliants', 'Total'],
						  ['Solved',     <?php echo $closedcompcnt;?>],
						  ['Unsolved',    <?php echo $opencmpcnt;?>]
						  
						]);
				
						var options = {
						  //title: 'My Daily Activities'
						};
				
						var chart = new google.visualization.PieChart(document.getElementById('piechart'));
				
						chart.draw(data, options);
      				}
    			</script>
				
<?php } else{?>

<script type="text/javascript">

document.getElementById('piechart').innerHTML="No Compliants";
document.getElementById('piechart').style.color = 'red';
document.getElementById("piechart").style.marginTop = "100px";
document.getElementById("piechart").style.height = "100px";

</script>

<?php  }?>	

<style>
.getlegal_delivery{ float:left; width:25%;}
.getlegal_delivery p{font-size:13px;font-family:'Open Sans', sans-serif;}
legal_amount1 p{font-size:13px;font-family:'Open Sans', sans-serif;}
.legal_fund_escrow{ width:25%; float:left;}
.legal_fund_escrow p{font-size:13px;font-family:'Open Sans', sans-serif;}
.legal_amount1{ width:25%; float:left;}
.legal_amount1 p{font-size:13px;font-family:'Open Sans', sans-serif;}
.legal_relese_fund{ width:25%; float:left;}

</style>			



<link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
			
			
			 <script>
         $(function() {
            $( "#fromdate" ).datepicker({ dateFormat: 'yy-mm-dd' });
         });
		 
		 $(function() {
            $( "#todate" ).datepicker({ dateFormat: 'yy-mm-dd' });
         });
      </script>
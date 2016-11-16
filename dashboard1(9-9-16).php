<?php 
include("includes/header.php");

$subcat=$frontend_obj->getallsubcat($_GET['cid']);
$getcategoryname=$frontend_obj->getCategory($_GET['cid']);
$getsubcategoryname=$frontend_obj->getallsubcatsingle($_GET['sid']);
$getlegaldetails=$frontend_obj->getlegaldetails($_GET['sid']);


$getallcategories = $frontend_obj->getcategoriesforsearch();


if($_GET['sid']!=''){
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

} else {
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
	
}


/*if(isset($_POST['submit'])){
$f='dashboard1.php?cid=';
$g=$_POST['searchcat'];
header('location:'.$f.$g.'' ); exit();
}*/

include("includes/menu.php");
?>
<!--<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">-->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">-->
<link href="css/jquery.barCharts.css" rel="stylesheet" type="text/css">

<style>
.barChart__barFill { background-color:#22BFD8}
.barChart__bar { height: 24px;}
.barChart p		{ cursor:pointer; margin-bottom:10px;}
.barChart p a	{ color:#1268a5;}
</style>
<div class="banner">
	<img src="images/banner.png"/>
</div>
<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:1px"></div>

<style>
	.bar-left			{}
	.bar-left>ul		{}
	.bar-left>ul>li		{ width:100%; background:url(images/img3_03.png) no-repeat; margin-bottom:10px; padding:5%;}
	
	.test	{ width:100%; background:url(images/img31_03.png) no-repeat; margin-bottom:10px; padding:5%;}
	.bar-left>ul>li>a	{ color:#fff;  }



.form       {}
.form_left  {width:50%;float:left; margin-right:5%;}
.form_right {width:45%;float:left;}
.form_left p {font-family: 'Open Sans', sans-serif;font-size: 13px;font-weight: 400;}
li          {list-style:none;}
.form_blog  {}
.form_blog ul li {padding:10px 0px;}
.form_blog span  {font-family: 'Open Sans', sans-serif;font-size: 13px;font-weight: 400;}
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
   <!--<div class="form_left">
   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce condimentum tellus nec placerat aliquet. Duis ante justo, placerat
                in metus vitae, placerat ornare lacus. Curabitur mattis orci non sollicitudin lobortis. Ut aliquet ultrices suscipit. Praesent pulvinar
                 elementum ultricies. Fusce ultricies ante sed nibh facilisis, in tempor odio feugiat. Maecenas eu ligula at metus volutpat scelerisque. 
                 Maecenas nunc justo, volutpat molestie blandit ac, gravida ut tortor. Ut dolor enim, dictum at nibh in, gravida consequat lorem. Class
                  aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc rutrum neque at ipsum posuere, ac tempor 
                  nisi blandit. Vivamus nibh dolor, pretium et pulvinar at, lacinia vitae turpis. Etiam placerat volutpat turpis a blandit.</p>
                  
                <p>Nullam id libero vitae dolor tristique pretium nec non lorem. Nulla a consequat eros. Quisque in porttitor dolor. Etiam eget ipsum
                 dignissim, malesuada metus eu, semper mauris. Fusce hendrerit eros eget ornare semper. Aenean elementum tincidunt pellentesque. Phasellus
                  luctus lorem at neque rutrum mollis. Praesent accumsan quam viverra aliquam tincidunt. Vivamus et blandit dolor, ac convallis lectus. 
                  Donec et rhoncus est, id molestie nulla. Mauris tristique porta leo, at maximus erat tincidunt ut. Nulla facilisi. </p>  
              </div>
   
   </div>-->
   
    <div class="form_right" style="margin-left:116px;">
    
    
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
     </div><!--form-text-->
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
  </div><!--form-->

	</div>
</div>

<?php } else {?>





<div class="search_blg">
<form name="categorysearch" method="post">

<select name="searchcat" class="searchcat" id="searchcat" onChange="selectsearch(this.value)" >
<option>Select Category</option>

<?php foreach($getallcategories as $categories){?>

<?php if($categories->id!='7'){?>
<option value="<?php echo $categories->id;?>"><?php echo $categories->name;?></option>
<?php } ?>

<?php }?>
</select>

<?php /*?><input type="submit" value="" name="submit" class="search1"><?php */?>

</form>

</div>



<div class="bar">

	<div class="mid_wrap">
	
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
	
    	
        <div class="bar-right1">
		<div class="container">

<div class="barChart">

<div class="mid_wrap">

<?php if($_GET['sid']!=""){?>

<p><a href="rankcategory.php?cid=<?php echo $_GET['cid']?>&sid=<?php echo $_GET['sid'];?>">Total Posted Cases: <?php echo count($getallresults);?></a>, <?php if($closedcompcnt != 0){?><a href="rankcategory.php?cid=<?php echo $_GET['cid']?>&sid=<?php echo $_GET['sid'];?>&status=Closed">Completed Cases: <?php echo $closedcompcnt;?></a> <?php }else{?> Completed Cases: <?php echo $closedcompcnt;?> <?php }?></p>


<?php } else{?>

    <p><a href="rankcategory.php?cid=<?php echo $_GET['cid']?>">Total Posted Cases: <?php echo count($getallresults);?></a>, <?php if($closedcompcnt != 0){?><a href="rankcategory.php?cid=<?php echo $_GET['cid']?>&status=Closed">Completed Cases: <?php echo $closedcompcnt;?></a><?php }else{?> Completed Cases: <?php echo $closedcompcnt;?> <?php }?></p>

<?php }?>

	
	<?php 
	$closedrate = ($closedcompcnt/$compliantcount)*100;
	
	$closerate = explode(".",$closedrate);
	$closedpercent = $closerate[0];
	
	$openrate = ($opencmpcnt/$compliantcount)*100;
	$opendrate = explode(".",$openrate);
	$openedpercent = $opendrate[0];
	?>
			
	
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
        </div>
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
                <!--<li>
                	<div class="t-left">
                    	<p>Yearly Post Collected</p>
                        <img src="images/dashboard_09.png" />
                    </div>
                    <div class="t-right">
                    	<img src="images/dolar_03.png" />
                        <p>$6175</p>
                    </div>
                    <div class="clear_fix"></div>
                </li>
                <li>
                	<div class="t-left">
                    	<p>Yearly Post Collected</p>
                        <img src="images/dashboard_09.png" />
                    </div>
                    <div class="t-right">
                    	<img src="images/dolar_03.png" />
                        <p>$6175</p>
                    </div>
                    <div class="clear_fix"></div>
                </li>
                <li>
                	<div class="t-left">
                    	<p>Yearly Post Collected</p>
                        <img src="images/dashboard_09.png" />
                    </div>
                    <div class="t-right">
                    	<img src="images/dolar_03.png" />
                        <p>$6175</p>
                    </div>
                    <div class="clear_fix"></div>
                </li>-->
            </ul>	
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
            
    </div>
	
	
	
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
<?php 
include("includes/header.php");

$subcat=$frontend_obj->getallsubcat($_GET['cid']);
$getcategoryname=$frontend_obj->getCategory($_GET['cid']);
$getsubcategoryname=$frontend_obj->getallsubcatsingle($_GET['sid']);

if($_GET['sid']!=''){
$getallresults=$frontend_obj->getcategoryinnercount($_GET['cid'],$_GET['sid']);
$compliantcount = count($getallresults);

$opencompliants = $frontend_obj->getopencompliants($_GET['cid'],$_GET['sid']);
$opencmpcnt = count($opencompliants);

$closedcompliants = $frontend_obj->getclosedcomplaints($_GET['cid'],$_GET['sid']);
$closedcompcnt = count($closedcompliants);
} else {
//$getallresults=$frontend_obj->getcategoryinnercount($_GET['cid']);
	
}
//print_r($getsubcategoryname);	

include("includes/menu.php");
?>
<!--<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">-->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">-->
<link href="css/jquery.barCharts.css" rel="stylesheet" type="text/css">

<style>
.barChart__barFill { background-color:#22BFD8}
.barChart__bar { height: 24px;}
</style>
<div class="banner">
	<img src="images/banner.png"/>
</div>
<div style="background:url(images/banner-border_03.png) repeat-x; padding:4px 0px; margin-top:1px"></div>

<style>
	.bar-left			{}
	.bar-left>ul		{}
	.bar-left>ul>li		{ width:100%; background:url(images/img3_03.png) no-repeat; margin-bottom:10px; padding:5%;}
	.bar-left>ul>li>a	{ color:#fff;  }
</style>

<h2 style="padding:25px 25px; text-align:center;"><?php echo ucfirst($getcategoryname->name); ?>
<?php if($_GET['sid']!=''){ ?>
- <?php echo ucfirst($getsubcategoryname->department_name); ?>
<?php } ?>
</h2>


<?php if($_GET['cid']=='7'){?>

<div class="bar">
	<div class="mid_wrap" style="margin-left:500px;">
	
		
			<P style="font-weight:bold;font-size:18px;margin-left:-81px;">Please review the below information regarding the Legal Expert </P><br /><br />
				<p>Name: Test</p><br />
				<p>Address:Test</p><br />
				<p>Cases Handled:2</p><br />
				<p>Reviews: Good </p>
			<br /><br /><br /><br />
	
	</div>
</div>

<?php } else {?>


<div class="bar">

	<div class="mid_wrap">
    	<div class="bar-left">
        	<ul>
			<?php foreach($subcat as $catlist){ 
			$roadcount=$frontend_obj->getcategoryinnercount($_GET['cid'],$catlist->id);
			//print_r($catlist);
			?>           					
				<li><a href="dashboard1.php?cid=<?php echo $_GET['cid']; ?>&sid=<?php echo $catlist->id; ?>"><?php echo ucfirst($catlist->department_name); ?></a></li>
             <?php } ?>  
            </ul>
        </div>
	
    	
        <div class="bar-right1">
		<div class="container">

<div class="barChart">

<div class="mid_wrap">
    <p>Total Posted Cases: <span></span><?php echo count($getallresults);?></span>, Completed Cases: <span><?php echo $closedcompcnt;?>
	
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
				
			
            <h3>1635</h3>
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
                        <p>$6175</p>
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
            <h4>9867</h4>
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

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    			<script type="text/javascript">
					  google.charts.load('current', {'packages':['corechart']});
					  google.charts.setOnLoadCallback(drawChart);
					  function drawChart() {
				
						//if(<?php echo $closedcompcnt;?>!='0' || <?php echo $opencmpcnt;?>!='0'){
						
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
						
						//} else {
						
						//<p>No Compliants</p>
						
						//}
						
						
      				}
    			</script>
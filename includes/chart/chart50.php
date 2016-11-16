<?php 

$cid=$_GET['cid'];
$sid=$_GET['sid'];
$countid=$_GET['countid'];
$fromdate=$_GET['fromdate'];
$todate=$_GET['todate'];
$status=$_GET['status'];
//$date='date_added';

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


  $res = "SELECT  MONTHNAME(`date_added`) AS MONTH ,SUM(`price`) AS TotalSales, COUNT(  `complaint_category` ) as TOTAL FROM tb_complaints WHERE ".$where_clause." GROUP BY MONTH(  `date_added` ) ASC";
						$result = mysql_query($res);
						//$catcompliants=mysql_fetch_object($result);
						
	echo $res2="SELECT  (`date_added`) AS DD ,SUM(`price`) AS TotalSales, COUNT(  `complaint_category` ) as TOTAL FROM tb_complaints WHERE ".$where_clause." GROUP BY DD ASC";
						
						
						$result2 = mysql_query($res2);
						
						
				
				




$months = array();
$complaints=array();
$amount=array();
$dd=array();

while($row=mysql_fetch_array($result))
				{
	//$x=strtotime($row['date_added']);
	//$y=date('M-Y', $x);
	
	
	$mm=$row['MONTH'];
	$gg=$row['TOTAL'];
	$kk=$row['TotalSales'];
	//echo $date=$row['DD'];
	
	//$kk=$format;
	
	
	$months[]="'".$mm."'";
	$complaints[]=$gg;
	$amount[]=$kk;
	//$dd[]="'".$date."'";
	 $point[] = array('k' => $kk , 'y'=> $gg);
	$list=implode(',',$months); 
	//$list=$months;
	$list = implode(',',$months );
	$total=implode(',',$complaints);
	$totalamt=implode(',',$amount);
	//$dates=implode(',',$dd);
}

echo "<br>";
//print_r($total);
//print_r($dates);
//print_r($kk);

/*------------end of query1-----------*/

	while($row2=mysql_fetch_array($result2))
	{
		
	$gg1=$row2['TOTAL'];
	$kk1=$row2['TotalSales'];
	$getdate=$row2['DD'];
	
	
	$complaints[]=$gg1;
	$amount[]=$kk1;
	$dd[]="'".$getdate."'";
	 $point1[] = array('k' => $kk1 , 'y'=> $gg1);
	//$list=implode(',',$months); 
	//$list=$months;
	
	$total=implode(',',$complaints);
	$totalamt=implode(',',$amount);
	$dates=implode(',',$dd);
	}
//print_r($dates);

?>


<!doctype html>
<html>
<!--<script src="includes/chart/jquery.min.js"></script>-->
<!--<script src="https://code.highcharts.com/highcharts.js"></script>-->
<script src="includes/chart/highcharts.js"></script>
<!--<script src="includes/chart/exporting.js"></script>-->

<!--<script src="https://code.highcharts.com/modules/exporting.js"></script>-->

<script>

$(function () {
    $('#container').highcharts({
	
        chart: {
            type: 'column'
        },
        title: {
            text: 'Monthly Complaints Progress'
        },
       /* subtitle: {
            text: 'Source: WorldClimate.com'
        },*/
        xAxis: {
            /*categories: ['1','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],*/
			
			categories: [<?php echo $list; ?>],
			
			
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total Complaints'
            }
        },
         tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">Complaints: </td>' +
                '<td style="padding:0"><b>{point.y}</b></td><tr>' + '<br/><br/> ' + '<tr><td style="color:{series.color};padding:0">Amount: </td>'+'<td style="padding:0"><b>${point.k}</b></td> </tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.1,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Months',
           /* data: [91, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]*/
			 
			/*data: [<?php //echo $total; ?>]*/
			data: <?php echo json_encode($point, JSON_NUMERIC_CHECK); ?>
        }]/*, {
            name: 'New York',
            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

        }, {
            name: 'London',
            data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

        }, {
            name: 'Berlin',
            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

        }*/
    });
});
</script>

<script>

$(function () {
    $('#container2').highcharts({
	
        chart: {
            type: 'column'
        },
        title: {
            text: 'Daily Complaints Progress'
        },
       /* subtitle: {
            text: 'Source: WorldClimate.com'
        },*/
        xAxis: {
            /*categories: ['1','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],*/
			
			categories: [<?php echo $dates; ?>],
			
			
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total Complaints'
            }
        },
         tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">Complaints: </td>' +
                '<td style="padding:0"><b>{point.y}</b></td><tr>' + '<br/><br/> ' + '<tr><td style="color:{series.color};padding:0">Amount: </td>'+'<td style="padding:0"><b>${point.k}</b></td> </tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.1,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Months',
           /* data: [91, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]*/
			 
			/*data: [<?php //echo $total; ?>]*/
			data: <?php echo json_encode($point1, JSON_NUMERIC_CHECK); ?>
        }]/*, {
            name: 'New York',
            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

        }, {
            name: 'London',
            data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

        }, {
            name: 'Berlin',
            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

        }*/
    });
});
</script>


</html>
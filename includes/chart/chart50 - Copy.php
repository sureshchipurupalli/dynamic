<?php 

$query= mysql_query("SELECT MONTHNAME(  `date_added` ) AS MONTH ,SUM(`price`) AS TotalSales, COUNT(  `complaint_category` ) as TOTAL FROM  `tb_complaints` WHERE  `complaint_category` =".$_GET['cid']." GROUP BY MONTH(  `date_added` ) ASC  ");


$months = array();
$complaints=array();
$amount=array();

while($row = mysql_fetch_array($query)){
	//$x=strtotime($row['date_added']);
	//$y=date('M-Y', $x);
	$mm=$row['MONTH'];
	$gg=$row['TOTAL'];
	$kk=$row['TotalSales'];
	
	
	
	$months[]="'".$mm."'";
	$complaints[]=$gg;
	$amount[]=$kk;
	 $point[] = array('k' => $kk , 'y'=> $gg);
	$list=implode(',',$months);
	//$list=$months;
	$list = implode(',',$months );
	$total=implode(',',$complaints);
	$totalamt=implode(',',$amount);
}
//print_r($list);
echo "<br>";
//print_r($total);
//print_r($point);

	


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


</html>
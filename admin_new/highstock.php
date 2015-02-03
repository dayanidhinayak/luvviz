<?php

include_once("function.php");

$online = array();

$phone=array();

$pos=array();

$timeval=array();



$query=mysql_query("SELECT  t.*,ot.`order_type`,o.`order_ondate`  as `tot_price` FROM  `temp_billinfo` t,  `order_details` o , `order_type` ot WHERE t.`bill_id` = o.`id` AND  t.`bill_id` =ot.`billid` AND  o.`status` =1  and month(o.`order_ondate`)=month('$date')");

while($res=mysql_fetch_array($query))

{
if($res['order_type']=='ONLINE CART')
$online[]=$res['tot_price'];

if($res['order_type']=='PHONE')
$phone[]=$res['tot_price'];

if($res['order_type']=='POS')
$pos[]=$res['tot_price'];

$timeval[]=$res['order_ondate'];


}

//foreach($data as $d=>$t) echo "[".$timeval[$d].",".$data[$d]."],";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">



<head>



<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />



<script src="jquery-1.7.2.min.js"></script>







<script>



$(function() {

	var seriesOptions = [],

		yAxisOptions = [],

		seriesCounter = 0,

		names = ['ONLINE CART','PHONE','POS'],

		colors = Highcharts.getOptions().colors;

	$.each(names, function(i, name) {

if(name=='ONLINE CART')

				var datass=[ <?php  foreach($online as $d=>$t) echo "[$timeval[$d],$online[$d]],";?>];

				

			  if(name=='PHONE')

			   var datass=[<?php  foreach($phone as $d=>$t) echo "[$timeval[$d],$phone[$d]],";?>];

			if(name=='POS')

			var datass=[<?php  foreach($pos as $d=>$t) echo "[$timeval[$d],$phone[$d]],";?>];



			


			seriesOptions[i] = {

				name: name,

				data:datass

				

				

			};



			// As we're loading the data asynchronously, we don't know what order it will arrive. So

			// we keep a counter and create the chart when all the data is loaded.

			seriesCounter++;



			if (seriesCounter == names.length) {

				createChart();

			}

		

	});



	







	// create the chart when all data is loaded

	function createChart() {



		chart = new Highcharts.StockChart({

		    chart: {

		        renderTo: 'container'

		    },



		    rangeSelector: {

		        selected: 4

		    },



		    yAxis: {

		    	labels: {

		    		formatter: function() {

		    			return (this.value > 0 ? '+' : '') + this.value ;

		    		}

		    	},

		    	plotLines: [{

		    		value: 0,

		    		width: 2,

		    		color: 'silver'

		    	}]

		    },

		    

		    plotOptions: {

		    	series: {

		    		compare: 'value'

		    	}

		    },

		    

		    tooltip: {

		    	pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.change}%)<br/>',

		    	valueDecimals: 2

		    },

		    

		    series: seriesOptions

		});

	}



});





</script>

<script src="highstock.js"></script>

<title>Untitled Document</title>



</head>







<body>



<div id="container" style="height: 500px; min-width: 500px"></div>







</body>



</html>
<?php 
include_once('../function.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>::Map Cart ::</title>
<link rel="stylesheet" type="text/css" href="../style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../menu.css" media="screen" />

</head>

<body>
<div id="topbar100">
			<div id="topbar">
				<div style="padding:0px 10px; float:right; margin-right:10px; margin-top:5px;">
					
				</div>
			</div>
		</div>
		<div id="menubar100">
			<div id="menubar">
				<div class="menubar-left">
				
				</div>
		  </div>
		</div>
		
		<?php include_once("../menubar.php");?>
<div id="container100" style=" margin-top:10px; background:#ffffff;">
			<div id="container" style="">
			
			 	<div class="about-cont" style=" font-weight:normal;">
				<div class="container1-top" style="  height:35px;  background:#efefef; font-size:20px; text-align:left; line-height:1.8; padding-left:10px; border-bottom: 1px solid rgb(196, 196, 196); background:url(../img/titlebar.png) repeat-x; border-radius:5px 5px 5px 5px; -moz-border-radius:5px 5px 5px 5px; margin-top:1%; width:99%;color: #3856a0;">
								Orders To Be Delivered Today<br/>
				</div>
<table>

<tr>
     <td>Purchase Order Id</td>
     <td>Order Ondate</td>
     <!--<td>Delivery date</td>-->
</tr>
<?php
$date=date("Y-m-d");
//echo "select distinct(`order_id`)  from `purchase_order` where `approval_status`='0' and `status`='0' and `delivery_date` like '$date%'";
$que=mysql_query("select distinct(`order_id`)  from `purchase_order` where `approval_status`='0' and `status`='0' and `delivery_date` like '$date%'") or die(mysql_error()); 
while($res=mysql_fetch_array($que))
{
$q1=mysql_query("select * from `purchase_order` where `order_id`='$res[order_id]'");
$r1=mysql_fetch_array($q1);
?>
<tr>
<td><a href="podetails.php?oid=<?php echo $res['order_id']?>" ><?php echo $res['order_id']?></a></td>
<td><?php echo $r1['entry_date']?></td>

</tr>
<?php
}
?>
</table>
</div>
			</div>
		</div>
		
		<div id="footer100">
			<div id="footer" class="font1">
				<span style="float:left; margin-left:30px;">
					All Rights Reserved @ Map Cart
				</span>
				<span style="float:right; margin-right:30px;">
					
				</span>
			</div>
		</div>
</body>

</html>

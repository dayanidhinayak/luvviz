<?php
include_once("../function.php");
//echo $_SESSION['user'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="menu1.css" />

<script type="text/javascript" src="cssverticalmenu.js">

/***********************************************

* CSS Vertical List Menu- by JavaScript Kit (www.javascriptkit.com)
* Menu interface credits: http://www.dynamicdrive.com/style/csslibrary/item/glossy-vertical-menu/ 
* This notice must stay intact for usage
* Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and 100s more

***********************************************/

</script>
</head>
<body>
<div id="topbar100">
			<div id="topbar">
				<div style="padding:0px 10px; float:right; margin-right:10px; margin-top:5px;">
					
				</div>
			</div>
		</div>
		
		
		<div id="container100" style=" margin-top:10px; background:#ffffff;">
			<div id="container" style="">
			 	<div class="about-cont" style=" font-weight:normal;">
				<div class="container1-top" style="  height:35px;  background:#efefef; font-size:20px; text-align:left; line-height:1.8; padding-left:10px; border-bottom: 1px solid rgb(196, 196, 196); background:url(../img/titlebar.png) repeat-x; border-radius:5px 5px 5px 5px; -moz-border-radius:5px 5px 5px 5px; margin-top:1%; width:99%;color: #3856a0;">
									Approve purchase Order<br/>
				</div>
	  		  	<div style="width:250px; float:left; margin-top:20px;">
					<?php include_once('menubar1.php')?>
			</div>
			
			<div style="width:680px;  margin-top:20px; float:left; margin-left:20px;">
<table>
	<tr><td colspan="4">Purchase Order Details</td></tr>
	<tr><td>Purchase Order Id</td>
<td>Order Ondate</td>
<td>Delivery date</td>
	</tr>
<?php
$q=mysql_query("select distinct(`order_id`) from `purchase_order` where `order_by`='$_SESSION[user]' and `approval_status`='1' and `status`='0'");
while($rs=mysql_fetch_array($q))
{
$q1=mysql_query("select * from `purchase_order` where `order_id`='$rs[order_id]'");
$r1=mysql_fetch_array($q1);

?>
<tr><td><a href="app_detail.php?oid=<?php echo $rs['order_id']?>" ><?php echo $rs['order_id']?></a></td>
<td><?php echo $r1['entry_date']?></td>
<td><?php echo $r1['delivery_date']?></td>
</tr>
<?php
}
?>
</table>
</div>
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

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
								Order By ONLINE CART SYSTEM<br/>
				</div>

<table>
<th colspan="4"></th>
<tr>
     <td>Bill Id</td>
	 <td>Billing Name</td>
	 <td>Phone No</td>
	 <td>View Details</td>
</tr>
<?php 
//$date=date("Y-m-d");
//echo "select `slno`,`id`,`billing_name`,`billing_phn` from `order_details` where `order_ondate` like '$date%'";
$q=mysql_query("select o.`slno`,o.`id`,o.`billing_name`,o.`billing_phn` from `order_details` o,`order_type` ot where o.`id`=ot.`billid` and ot.`order_type`='ONLINE CART' and o.`status`='0'");
while($r=mysql_fetch_array($q))
{
?>
<tr>
     <td><?php echo $r['id'];?></td>
	 <td><?php echo $r['billing_name'];?></td>
	 <td><?php echo $r['billing_phn'];?></td>
      <td><a href="view_cart_detail.php?id=<?php echo $r['slno'];?>">View Details</a></td>
</tr>
<?php } ?>
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

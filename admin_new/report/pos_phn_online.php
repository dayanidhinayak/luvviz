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
								Total Sales Of POS<br/>
				</div>
<div style="float:left">
<table>

<tr>
    <td>Product Name</td>
	<td>Quantity</td>
	<td>Price</td>
</tr>
<?php
$tot=0;
$q=mysql_query("select p.`product_name`,p.`selling_price`,t.`product_id`,sum(t.`quantity`) as `quantity` from `order_details` od,`temp_billinfo` t,`product` p,`order_type` ot where od.`status`='1' and ot.`billid`=od.`id` and ot.`order_type`='POS' and od.`id`=t.`bill_id` and t.`product_id`=p.`id` group by t.`product_id`");
while($r=mysql_fetch_array($q))
{
$price=$r['selling_price']*$r['quantity'];
$tot+=$price;
?>
<tr>
    <td><?php echo $r['product_name'];?></td>
	<td><?php echo $r['quantity'];?></td>
	<td><?php echo $price;?></td>
</tr>
<?php } ?>
<tr>
    <td>Total:</td><td><?php echo $tot;?></td>
</tr>
</table>
</div>

<div style="float:left">

<table>
<th colspan="3">Total Sales Of Phone Attendant</th>
<tr>
    <td>Product Name</td>
	<td>Quantity</td>
	<td>Price</td>
</tr>
<?php
$tot1=0;
$q1=mysql_query("select p.`product_name`,p.`selling_price`,t.`product_id`,sum(t.`quantity`) as `quantity` from `order_details` od,`temp_billinfo` t,`product` p,`order_type` ot where od.`status`='1' and ot.`billid`=od.`id` and ot.`order_type`='PHONE' and od.`id`=t.`bill_id` and t.`product_id`=p.`id` group by t.`product_id`");
while($r1=mysql_fetch_array($q1))
{
$price1=$r1['selling_price']*$r1['quantity'];
$tot1+=$price1;
?>
<tr>
    <td><?php echo $r1['product_name'];?></td>
	<td><?php echo $r1['quantity'];?></td>
	<td><?php echo $price1;?></td>
</tr>
<?php } ?>
<tr>
    <td>Total:</td><td><?php echo $tot1;?></td>
</tr>
</table>
</div>

<div style="float:left">

<table>
<th colspan="3">Total Sales In Online Cart</th>
<tr>
    <td>Product Name</td>
	<td>Quantity</td>
	<td>Price</td>
</tr>
<?php
$tot2=0;
$q2=mysql_query("select p.`product_name`,p.`selling_price`,t.`product_id`,sum(t.`quantity`) as `quantity` from `order_details` od,`temp_billinfo` t,`product` p,`order_type` ot where od.`status`='1' and ot.`billid`=od.`id` and ot.`order_type`='ONLINE CART' and od.`id`=t.`bill_id` and t.`product_id`=p.`id` group by t.`product_id`");
while($r2=mysql_fetch_array($q2))
{
$price2=$r2['selling_price']*$r2['quantity'];
$tot2+=$price2;
?>
<tr>
    <td><?php echo $r2['product_name'];?></td>
	<td><?php echo $r2['quantity'];?></td>
	<td><?php echo $price2;?></td>
</tr>
<?php } ?>
<tr>
    <td>Total:</td><td><?php echo $tot2;?></td>
</tr>
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

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
								Product Wise Sale<br/>
				</div>
<table>

<tr>
     <td>Product Id</td>
	 <td>Product Name</td>
	 <td>Quantity</td>
	 <td>Price</td>
	 
</tr>
<?php 
$tot=0;
//echo "select p.`product_name`,t.`product_id`,t.`quantity` from `order_details` od,`temp_billinfo` t,`product` p where od.`status`='1' and od.`id`=t.`bill_id` and t.`product_id`=p.`id`";
$q=mysql_query("select p.`product_name`,p.`selling_price`,t.`product_id`,sum(t.`quantity`) as `quantity` from `order_details` od,`temp_billinfo` t,`product` p where od.`status`='1' and od.`id`=t.`bill_id` and t.`product_id`=p.`id` group by t.`product_id`") or die(mysql_error());
while($r=mysql_fetch_array($q))
{
$price=$r['selling_price']*$r['quantity'];
$tot+=$price;
?>
<tr>
     <td><?php echo $r['product_id'];?></td>
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

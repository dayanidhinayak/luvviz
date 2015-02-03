<?php
include_once("function.php");
$date=date("Y-m-d");
if(isset($_SESSION['user']))
{
$user=$_SESSION['user'];

$pass=$_SESSION['pass'];
$query=mysql_query("select * from `login` where `user_name`='$user' and `password`='$pass'") or die(mysql_error());
$a=mysql_num_rows($query);

if($a!=1)
{

header("location:index.php");
}

}
else
{

header("location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LUVVIZ</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen"  />
<link href="admin_002.css" rel="stylesheet" type="text/css" media="all">
<style>
	table{
	border-collapse:collapse;
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
	color:#333333;
	
	}
	tr{
	height:35px;
	 text-shadow: 0 1px 0 #FFFFFF;
	 	}
th{
background-image: -moz-linear-gradient(center top , #F9F9F9, #ECECEC);
text-align:left;
}
</style>
</head>

<body>
		<div id="topbar">
			<div id="topbar_content">
				<div id="logo">
				</div>
				<div id="logoicon">
					<img src="images/order.png" style="float:left; margin-top:2px; margin-left:10px;" />
					<img src="images/customer.png" style="float:left;  margin-left:10px;"  />
					<img src="images/message.png" style="float:left; margin-top:2px;  margin-left:10px;" />
				</div>	
				
				<div id="searchbar">
					<table >
						<tr>
							<td style="border:1px solid #000000;">
							<input type="text" name="" style="width:200px; height:24px; float:left;" />
							
							<select style="float:left;padding:5px; height:30px;">
									<option name="">Everywhere</option>
							</select>
								
								<input type="submit" name="submit" value="" style="background:url(images/search.png); width:30px; height:30px; border:none; float:left;" />                            </td>
							
						</tr>
					</table>
				</div>
				
				<div id="selectbar" style="margin-left:0%;">
					<select style="float:left; padding:5px; height:27px; background:#efefef; border:none; border-radius:2px; -moz-border-radius:2px;">
									<option name="">Quick Acce</option>
					</select>
				</div>
				
				<div id="topmenubar" style="width:27%; ">
					<div class="topmenu">
						D Demo
					</div>
					<div class="separator">
						<img src="images/separator.png" />
					</div>
					<div class="topmenu">
						My Preferences
					</div>
					<div class="separator">
						<img src="images/separator.png" />
					</div>
					<div class="topmenu">
						View My Shop
					</div>
					
					<div class="separator">
						<img src="images/separator.png" />
					</div>
					<div class="topmenu">
						<a href="inventory_management/admin_logout.php" style="color:#fff; text-decoration: none;">
							<img src="images/logout.png" style="float:left; margin-right:5px; " />Logout
						</a>
					</div>
				</div>
			</div>
		</div>
		
<?php include_once("menubar.php");?>
		
		
		<div id="container">
			<h3>Dashboard</h3>
			
			<div id="container_content">
				<div id="container_left">
					<h4>Quick Links</h4>
					<div id="quicklinksbar">
					<div class="box" style="margin-left:0%;">
						<a href="product_sale.php"><img src="images/package_go.png"  style="margin-top:15%;"/></a><br/>
						Products sold recently
					</div>
					<div class="box">
						<img src="images/cart_add.png"  style="margin-top:15%;"/><br/>
						New Order
					</div>
					<div class="box">
						<img src="images/book.png"  style="margin-top:15%;"/><br/>
						New Price Rule for catalog
					</div>
					<div class="box">
						<img src="images/package_add.png"  style="margin-top:15%;"/><br/>
						New Product
					</div>
					<div class="box">
						<img src="images/plugin_add.png"  style="margin-top:15%;"/><br/>
						New Module
					</div>
					<div class="box" style="margin-left:0%;">
						<img src="images/cart_remove.png"  style="margin-top:15%;"/><br/>
						New Price Rule for cart
					</div>
					<div class="box">
						<img src="images/pageadd.png"  style="margin-top:15%;"/><br/>
						New Page CMS
					</div>
					<div class="box">
						<img src="images/adv.png"  style="margin-top:15%;"/><br/>
						Abandoned Carts
					</div>
					<a href="inventory_management/inventory_details.php">
					<div class="box">
						<img src="images/adv.png"  style="margin-top:15%;"/><br/>
						Inventory Check
					</div>
					</a>
					<a href="inventory_management/print_barcode.php" target = "_blank">
					<div class="box">
						<img src="images/adv.png"  style="margin-top:15%;"/><br/>
						Print Barcode
					</div>
					</a>
					<a href="inventory_management/search_detail.php" target = "_blank">
					<div class="box">
						<img src="images/adv.png"  style="margin-top:15%;"/><br/>
						Search orderdetails
					</div>
					</a>
					
				</div>
				<div id="separation">
				</div>
				<div class="adminbox">
					<h5>Configuration Checklist</h5>
					<div class="checklist">
						<img src="images/cross.png" style="float:left; margin-right:10px;" />URL rewriting
					</div>
					<div class="checklist">
						<img src="images/cross.png" style="float:left; margin-right:10px;" />Browser cache & compression					
					</div>
					<div class="checklist" style="color:#339900;">
						<img src="images/tick.png" style="float:left; margin-right:10px;" />Smarty optimization
					</div>
					<div class="checklist" style="color:#FFCC00;">
						<img src="images/error.png" style="float:left; margin-right:10px;" />Combine, Compress & Cache
					</div>
					<div class="checklist" style="color:#339900;">
						<img src="images/tick.png" style="float:left; margin-right:10px;" />Smarty optimization
					</div>
					<div class="checklist" style="color:#339900;">
						<img src="images/tick.png" style="float:left; margin-right:10px;" />Smarty optimization
					</div>
				</div>
				
				<div class="adminbox" style="margin-left:3%;">
					<h5>Luvviz News</h5>
					<ul style="padding-left:5px;">
						<li class="list"><img src="images/news.png"  style="float:left; margin-right:5px;" />Optimize your Performances with CSS...</li>
						<li class="list" style="font-style:italic; color:#666666;">Everybody wants to maximize their store’s loading speed. In this need for speed era, every second counts to retain customers from bouncing off y...</li>
						<li class="list"><img src="images/news.png"  style="float:left; margin-right:5px;" />Optimize your Performances with CSS...</li>
						<li class="list"><img src="images/news.png"  style="float:left; margin-right:5px;" />Optimize your Performances with CSS...</li>
					</ul>
				</div>
				</div>
				
				<div id="container_right">
					<h4 style="padding-left:0px;">Your Information</h4>
					<div class="box1" style="margin-left:0%;">
						<h5>This month's activity </h5>
						<table cellpadding="10" cellspacing="0" style="width:100%;">
							<tr class="blue">
								<td>Sales</td>
								<?php
								
								
								$que=mysql_query("SELECT  sum(t.`tot_price`)  as `tot_price` FROM  `temp_billinfo` t,  `order_details` o WHERE t.`bill_id` = o.`id` AND o.`status` =1 and month(o.`order_ondate`)=month('$date')");
$res=mysql_fetch_array($que);
$tot=$res['tot_price'];
							
								
							if($tot!=0)
							{	
								?>
								
								<td style="text-align:right; font-weight:bold;"><?php echo $tot;?></td>
								<?php
								}
								else
								{
								?>
								<td style="text-align:right; font-weight:bold;">0.00</td>
								<?php
								}
								?>
							</tr>
							<tr>
								<td>Total registrations</td>
								
				<?php
				$q1=mysql_query("select count(`slno`) as `slno` from `user_details` where month(`joining_time`)=month('$date')");
				$r1=mysql_fetch_array($q1);
				$total=$r1['slno'];
				if($total!=0)
				{
				
				
				
				?>
								<td style="text-align:right; font-weight:bold;"><?php echo $total?></td>
								<?php
								}
								else
								{
								?>
								<td style="text-align:right; font-weight:bold;">0</td>
								<?php
								}
								?>
							</tr>
							<tr class="blue">
								<td>Total orders </td>
								<?php
								$query=mysql_query("SELECT  count(t.`slno`) as slno 
FROM  `temp_billinfo` t,  `order_details` o
WHERE t.`bill_id` = o.`id` 
AND o.`status` =1 and month(o.`order_ondate`)=month('$date')");
$result=mysql_fetch_array($query);
$val=$result['slno'];
if($val!=0)
{
?>
								<td style="text-align:right; font-weight:bold;"><?php echo $val?></td>
								<?php
								}
								else
								{
								?>
								<td style="text-align:right; font-weight:bold;">0</td>
								<?php
								}
								?>
							</tr>
							<tr>
								<td>Product pages viewed</td>
								<td style="text-align:right; font-weight:bold;">0</td>
							</tr>
						</table>
					</div>
					<div class="box1">
						<h5>Customer service </h5>
						<table cellpadding="10" cellspacing="0" style="width:100%;">
							<tr class="blue">
								<td>Unread threads </td>
								<td style="text-align:right; font-weight:bold;">0,00 €</td>
							</tr>
							<tr>
								<td>Pending threads </td>
								<td style="text-align:right; font-weight:bold;">0</td>
							</tr>
							<tr class="blue">
								<td>Closed threads</td>
								<td style="text-align:right; font-weight:bold;">0</td>
							</tr>
							<tr>
								<td>Product pages viewed</td>
								<td style="text-align:right; font-weight:bold;">0</td>
							</tr>
						</table>
					</div>
					
					<div class="box1" style="width:98.5%; margin-left:0%; height:auto;">
							<h5>Statistics / This week's sales </h5>
							<img src="images/graph.jpg"  width="100%"/>
					</div>
					
					
				</div>
				
				
			</div>
		</div>
		
		<?php
		include_once("footer.php");
		?>

</body>
</html>

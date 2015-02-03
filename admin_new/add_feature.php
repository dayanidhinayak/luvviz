<?php 
ini_set("display_errors",1);
include_once("../function.php");
$id=$_GET['id'];
$q=mysql_query("select * from `order_details` where `id`='$id'");
$r=mysql_fetch_array($q);

$tot1=0;
						
						$q1=mysql_query("select `quantity`,`tot_price`,`recurrent_price` from `temp_billinfo` where `bill_id`='$r[id]'") or die(mysql_error());
					while($r1=mysql_fetch_array($q1))
					{
																										 if($r1['quantity']>1)
																{
																				if($r1['recurrent_price']!="")
																				{
																				$price=$r1['recurrent_price'];
																				}
																				else
																				{
																				$price=$r1['tot_price'];
																				}
																}
																else
																{
																				$price=$r1['tot_price'];
																}
																$tot1+=$price;	
																}
							$tot=number_format($tot1,2);									
						?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen"  />
<link href="../admin_002.css" rel="stylesheet" type="text/css" media="all">
<style>
	table{
	border-collapse:collapse;
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
	color:#333333;
	
	
	}
	tr{
	height:35px;
	 
	 	}
		tr th{
		background-image: -moz-linear-gradient(center top , #F9F9F9, #ECECEC);
    color: #333333;
    font-size: 14px;
	font-family:Arial, Helvetica, sans-serif;
 
    line-height: 29px;
    margin: 0;
    padding: 0 0 0 10px;
	text-align:left;
    text-shadow: 0 1px 0 #FFFFFF;
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
				
				<div id="selectbar">
					<select style="float:left;padding:5px; height:27px; background:#efefef; border:none; border-radius:2px; -moz-border-radius:2px;">
									<option name="">Quick Acce</option>
					</select>
				</div>
				
				<div id="topmenubar">
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
						<img src="images/logout.png" style="float:left; margin-right:5px;" />Logout
					</div>
					<div class="separator">
						<img src="images/separator.png" />
					</div>
					<div class="topmenu">
						View My Shop
					</div>
				</div>
			</div>
		</div>
		
		<?php include_once("../menubar.php");?>
		
		<div id="container">
			<h3>Dashboard</h3>
			
			<div id="container_content" style=" background:none; border:none;">
			
			<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
		<div style="float:left; padding-left:1%;"><h3>Order #<?php echo $id;?>  <?php echo $r['billing_name'];?> </h3></div>
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><img src="images/process1.png" /><br/>Back to list</div>
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><img src="images/process.png" /><br/>Partial refund</div>
			<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><img src="images/package_add.png" /><br/>Add a product </div>
			</div>
			
			
			
			<div style="width:100%;  float:left; ">
				
				<div class="orderbox" style="margin-top:5%; width:98%;">
					<div class="orderheading">
						<img src="images/cart.gif" style="float:left; margin-right:5px;" />
						Products
					</div>
					<div style="float:left; width:98%; padding:1%;">
					<table cellpadding="5" cellspacing="0" style="width:100%; background:#FFFFFF; border:1px solid #CCCCCC; ">
						<tr>
							<th>&nbsp;</th>
							<th>Product</th>
							<th>Unit Price *</th>
							<th>Qty</th>
							<th>Available quantity</th>
							<th>Total *</th>
							<th>Action</th>
					   </tr>
					   <?php 
					   $que=mysql_query("select t.*,p.`product_name`,p.`image`,p.`price` from `temp_billinfo` t,`product` p where t.`bill_id`='$id' and `t`.`product_id`=`p`.`id`")or die(mysql_error());
							$cnt=mysql_num_rows($que);
							while($res=mysql_fetch_array($que))
							{
					   ?>
					   
					   <tr>
					   		<td><img src="<?php echo $res['image'];?>" /></td>
							<td><?php echo $res['product_name'];?></td>
							<td><?php echo $res['price'];?></td>
							<td><?php echo $res['quantity'];?></td>
							<?php 
							$q2=mysql_query("select `quantity` from `stock` where `product_id`='$res[product_id]'");
							$r2=mysql_fetch_array($q2);
							?>
							<td><?php echo $r2['quantity'];?></td>
							
							<?php 
							
							 if($res['quantity']>1)
																{
																				if($res['recurrent_price']!="")
																				{
																				$price=$res['recurrent_price'];
																				}
																				else
																				{
																				$price=$res['tot_price'];
																				}
																}
																else
																{
																				$price=$res['tot_price'];
																}
							?>
							
							
							<td><?php echo $price;?> </td>
							<td><img src="images/edit.gif" /><img src="images/delete.gif" /></td>
					   </tr>
					  
					  <?php } ?>
					
					</table>
					
				
					</div>
				</div>
				
			</div>
		</div>
		
		<div id="footer">
			Map Cart Admin Panel<br/>
			<span style="color:#666666;">Load Time:0.081s</span>
		</div>

</body>
</html>

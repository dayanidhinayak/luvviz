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
<script type="text/javascript" src="jquery.min.js" charset="utf-8"></script>
<script>
function getdispatch(id,desc,blid,slno) {
//alert(id);
if(barcode=prompt("Add barcodenumber")) {
if(quantity=prompt("Add quantity"))  {
$.post("dispatch.php",{'did':id,'descrip':desc,'blid':blid,'slno':slno,'code':barcode,'quantity':quantity},function(rt) 
{
if(rt==2)
{
alert("invalid barcode.");

}
else if(rt==1) {
	alert("invalid quantity");																				 //code
}
else{
alert("Successfully product dispatched.");																					 
}
});
}
}
}
</script>
</head>

<body>
		
		<?php
		include_once('topbar.php');
		include_once("../menubar.php");?>
		
		<div id="container">
			<h3>Dashboard</h3>
			
			<div id="container_content" style=" background:none; border:none;">
			
			<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
		<div style="float:left; padding-left:1%;"><h3>Order #<?php echo $id;?>  <?php echo $r['billing_name'];?> </h3></div>
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><img src="images/process1.png" /><br/>Back to list</div>
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><img src="images/process.png" /><br/>Partial refund</div>
			<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><img src="images/package_add.png" /><br/>Add a product </div>
			</div>
			
			<div style="width:100%; height:30px; float:left; padding-top:1%; margin-top:1%; background:#EBEDF4; border:1px solid #CCCCCC;">
				<div style="width:70%;float:left;">
				<div class="topmenu1">
					Date: <span style="font-weight:bold;">10/12/2012 17:23:49</span>
				</div>
				<div class="topmenu1">
					Messages: <span style="font-weight:bold;">0</span>
				</div>
				<div class="topmenu1">
					New Customer Messages: <span style="font-weight:bold;">0</span>
				</div>
				<div class="topmenu1">
					Products: <span style="font-weight:bold;">2</span>
				</div>
				<div class="topmenu1">
					Total: <span style="font-weight:bold;"><?php echo $tot;?> </span>
				</div>
				</div>
				<div style="width:30%;float:left;">
				<div class="topmenu1" style="float:left; border:none;">
					<div style="width:auto; float:left; padding:1%; padding-left:5%;  padding-right:5%; border-radius:2px; -moz-border-radius:2px;  text-shadow: 0 1px 0 #FFFFFF; background:#efefef; color:#000000; font-family:Arial, Helvetica, sans-serif; font-size:12px; border:1px solid #cccccc;">
					<img src="images/tab-invoice.gif" height="16" style="float:left; margin-right:5px;" />View Invoice
						
					</div>
				</div>
				<div class="topmenu1" style="float:left; border:none;">
					<a href="billaddress.php?id=<?php echo $id;?>">																																						  
					<div style="width:auto; float:left; padding:1%; padding-left:5%;  padding-right:5%; border-radius:2px; -moz-border-radius:2px;   text-shadow: 0 1px 0 #FFFFFF; background:#efefef; color:#000000; font-family:Arial, Helvetica, sans-serif; font-size:12px; border:1px solid #cccccc;">
					<img src="images/delivery.gif" height="16" style="float:left; margin-right:5px;" />Create Address
						
					</div>
					</a>																 
				</div>
				
				<div class="topmenu1" style="float:left; border:none;">
				<a href="billview.php?bilid=<?php echo $id;?>">																 
					<div style="width:auto; float:left; padding:1%; padding-left:5%;  padding-right:5%; border-radius:2px; -moz-border-radius:2px;   text-shadow: 0 1px 0 #FFFFFF; background:#efefef; color:#000000; font-family:Arial, Helvetica, sans-serif; font-size:12px; border:1px solid #cccccc;">
					<img src="images/printer.gif" height="16" style="float:left; margin-right:5px;" />Print Order
						
					</div>
				</a>
				</div>
				</div>
			</div>
			
			<div style="width:100%; height:auto; float:left; margin-top:1%;">
				<table style="width:100%; ">
					<tr>
						<td style="width:15%;"><select>
							<option value="1" >Awaiting cheque payment</option>
						</select></td>
						<td style="width:73%;">
							<input type="submit" name="submit" value="Add"  />
						</td>
						<td style="width:10%;text-align:right;">
							Orders:
						</td>
					</tr>
				</table>
			</div>
			
				<div id="container_left">
					
					
				<div class="adminbox" style="width:95%;">
					<table cellpadding="5" cellspacing="0" style="width:100%;">
						<tr>
							<th><img src="images/5.gif" /></th>
							<th>Delivered</th>
							<th>Demo Demo</th>
							<th style="text-align:right;">03/8/2013 07:20:07</th>
						</tr>
						<tr>
							<td><img src="images/1.gif" /></td>
							<td>Awaiting cheque payment</td>
							<td></td>
							<td style="text-align:right;">10/12/2012 17:23:49</td>
						</tr>
					</table>
					
				</div>
				
				
				<div class="orderbox">
					<div class="orderheading">
						<img src="images/user.gif" style="float:left; margin-right:5px;" />
						Customer Information
					</div>
					<div style="float:left; width:98%; padding:1%;">
					<span style="font-weight:bold; color:#000000; font-size:14px;"><?php echo $r['billing_name'];?> (#<?php echo $id;?>  )</span><br/>
<span style="color:#000000;">(<?php echo $r['user_id'];?>)</span><br/><br/>

Account registered:<span style="font-weight:bold; font-size:14px;"> <?php echo $r['order_ondate'];?></span><br/>
Valid orders placed: <span style="font-weight:bold; font-size:14px;">1</span><br/>
Total spent since registration: <span style="font-weight:bold; font-size:14px;"><?php echo $tot;?></span>
</div>
				</div>
				
				
				
				<div class="orderbox" style="margin-top:53%;">
					<div class="orderheading">
						<img src="images/shipping.gif" style="float:left; margin-right:5px;" />
						Shipping Address
					</div>
					<div style="float:left; width:98%; padding:1%;">
					<table style="width:100%;">
						<tr>
							<td >
						<select>
							<option value="1" >Awaiting cheque payment</option>
						</select>
						</td>
						<td><input type="submit" name="submit" value="change" /></td>
					</tr>
					<tr>
					<td>
					<?php echo $r['billing_name'];?><br/>
<?php echo  $r['billing_address'];?><br/>
<?php echo  $r['billing_city'];?><br/>
<?php echo  $r['billing_sate'];?><br/>
<?php echo  $r['billing_pin'];?><br/>
<?php echo  $r['billing_country'];?><br/>
<?php echo  $r['billing_phn'];?>
</td>
<td>
	<img src="images/edit.gif" />
	<img src="images/google.gif" />
</td>
</tr>
</table>
</div>
				</div>
				
				
				</div>
				<div id="container_right">
					
					<div class="orderbox" style="margin-top:2%;">
					<div class="orderheading">
						<img src="images/details.gif" style="float:left; margin-right:5px;" />
						Documents
					</div>
					<div style="float:left; width:98%; padding:1%; ">
					<table cellpadding="5" cellspacing="0" style="width:100%; background:#FFFFFF; border:1px solid #CCCCCC;">
						<tr>
							<th>Date</th>
						<th>Document</th>
						<th>Number</th>
						<th>Amount</th>
						<th>&nbsp;</th>
					</tr>
					<tr>
					<?php 
					$date=$r['order_ondate'];
					$date1 = date("d-m-Y",strtotime($date));
					?>
						<td><?php echo $date1;?></td>
						<td>Invoice</td>
						<td>#<?php echo $id;?><img src="images/details.gif" /></td>
						<td><?php echo $tot;?></td>
						<td><img src="images/money_add.png" /><br/><img src="images/note.png" /></td>
					</tr>
				</table>
				</div>
					
					
				
				</div>
				
				
				<div class="orderbox" style="margin-top:5%;">
					<div class="orderheading">
						<img src="images/money_add.png" style="float:left; margin-right:5px;" />
						Payment
					</div>
					<div style="float:left; width:98%; padding:1%; ">
					<table cellpadding="5" cellspacing="0" style="width:100%; background:#FFFFFF; border:1px solid #CCCCCC;">
						<tr>
							<th>Date</th>
						<th>Payment method</th>
						<th>Transaction ID</th>
						<th>Amount</th>
						<th colspan="2">Invoice</th>
					</tr>
					<tr>
						<td>03/8/2013</td>
						<td>Invoice</td>
						<td>#IN000001</td>
						<td><?php echo $tot;?></td>
						<td colspan="2">gdhge</td>
					</tr>
					<tr style="border-top:1px solid #CCCCCC; background:#E6EEFF;">
						<td><input type="text" name="" style="width:100px; border:1px solid #efefef; " value="2013-03-08 10:14:34" /></td>
						<td>
							<select>
								<option value="">Bank Wire</option>
							</select>
						</td>
						<td><input type="text" name="" style="width:100px; border:1px solid #efefef; " value="2013-03-08 10:14:34" /></td>
						<td>
						<select>
								<option value="">Bank Wire</option>
							</select></td>
							
						<td>
						<select>
								<option value="">#IN000001</option>
							</select>
						</td>
						<td><input type="submit" name="submit" value="Add" /></td>
						
					</tr>
				</table>
				
				</div>
				</div>
				
				
				
				
				<div class="orderbox" style="margin-top:5%;">
					<div class="orderheading">
						<img src="images/delivery.gif"  style="float:left; margin-right:5px;" />
						Shipping
					</div>
					<div style="float:left; width:98%; padding:1%; ">
					<div style="float:left;">Recycled packaging:<img src="images/cross.png" style="float:right;" /></div>
					<div style="float:left; margin-left:1%;">Gift-wrapping:<img src="images/cross.png"style="float:right;" /></div>
					<table cellpadding="5" cellspacing="0" style="width:100%; background:#FFFFFF; border:1px solid #CCCCCC; margin-top:1%;">
						<tr>
							<th>Date</th>
						<th>Type</th>
						<th>Carrier</th>
						<th>Weight</th>
						<th>Shipping cost</th>
						<th>Tracking number</th>
					</tr>
					<tr>
						<td>2012-10-12 17:23:56</td>
						<td>Delivery</td>
						<td>My carrier</td>
						<td>0.000 kg</td>
						<td>0,00 €</td>
						<td><img src="images/edit.gif" /></td>
					</tr>
					
				</table>
				
				</div>
				</div>
				
				
				<div class="orderbox" style="margin-top:5%;">
					<div class="orderheading">
						<img src="images/delivery.gif"  style="float:left; margin-right:5px;" />
						Merchandise returns
					</div>
					<div style="float:left; width:98%; padding:1%; ">
						No merchandise returns yet. 
					</div>
				</div>
				
				<div class="orderbox" style="margin-top:5%;">
					<div class="orderheading">
						<img src="images/shipping.gif" style="float:left; margin-right:5px;" />
						Invoice Address
					</div>
					<div style="float:left; width:98%; padding:1%;">
					<table style="width:100%;">
						<tr>
							<td >
						<select>
							<option value="1" >Awaiting cheque payment</option>
						</select>
						</td>
						<td><input type="submit" name="submit" value="change" /></td>
					</tr>
					<tr>
					<td>
					<?php echo $r['shipping_name'];?><br/>
<?php echo  $r['shipping_address'];?><br/>
<?php echo  $r['shipping_city'];?><br/>
<?php echo  $r['shipping_state'];?><br/>
<?php echo  $r['shipping_pin'];?><br/>
<?php echo  $r['shipping_country'];?><br/>
<?php echo  $r['shipping_cont'];?>
</td>
<td>
	<img src="images/edit.gif" />
	
</td>
</tr>
</table>
</div>
				</div>
				
				
				
				
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
							<th>description</th>
							<th>Qty</th>
							<th>Available quantity</th>
							<th>Total *</th>
							<th>Action</th>
							<th>Dispatch</th>
					   </tr>
					   <?php 
					   $que=mysql_query("select t.*,t.quantity,p.`product_name`,p.`image`,p.`price` from `temp_billinfo` t,`product` p where t.`bill_id`='$id' and `t`.`product_id`=`p`.`id`")or die(mysql_error());
					    
					   
							$cnt=mysql_num_rows($que);
							while($res=mysql_fetch_array($que))
							
							
							{
					   ?>
					   
					   <tr>
					   
					   		<td><img src="<?php echo $res['image'];?>" width="150"  style="height: auto; border:1px solid #ccc;"/></td>
							<td><?php echo $res['product_name'];?></td>
							<td><?php echo $res['price'];?></td>
							<td><?php echo $res['description'];?></td>
							<td><?php echo $res['quantity'];?></td>
							<?php 
							$q2=mysql_query("select `quantity` from `stock` where `product_id`='$res[product_id]' and `size`='$res[description]'");
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
							<td>
							<?php
							if($res['pendingstatus']==0){
							?>
	<input type="submit" name="submit" value="pending" onclick="return getdispatch(<?php echo $res['product_id'];?>,'<?php echo $res['description'];?>',<?php echo $id;?>,<?php echo $res['slno'];?>);"/>
	<?php
}
else{
?>
<input type="button" name="button" value="dispatch" />
<?php
}
?>


							</td>
					   </tr>
					  
					  <?php } ?>
					
					</table>
					
					<div style="width:60%; float:left; margin-top:2%;">
						* For this customer group, prices are displayed as: tax included.<br/>

Merchandise returns are disabled 
					</div>
					<div style="width:40%; float:left; margin-top:2%;">
						<table cellpadding="5" cellspacing="0" style="width:100%; background:#FFFFFF; border:1px solid #CCCCCC; ">
							<tr>
								<td style="width:50%;">Products</td>
								<td style="text-align:right;"><?php echo $tot;?></td>
							</tr>
							<tr style="border-top:1px solid #CCCCCC;">
								<td>Shipping</td>
								<!--<td style="text-align:right;">8,37 €</td>-->
							</tr>
							<tr style="border-top:1px solid #CCCCCC; font-size:20px;">
								<td>Total</td>
								<td style="text-align:right;"><?php echo $tot;?></td>
							</tr>
						</table>
						
						<table  cellpadding="5" cellspacing="0" style="width:100%; background:#FFFFFF; border:1px solid #CCCCCC; margin-top:1%; ">
							<tr>
								<th><img src="images/coupon.gif" style="float:left; margin-right:5px; padding-top:3%;"/>Discount name</th>
								<th>Value</th>
								<th>Action</th>
							</tr>
							<tr>
								<td colspan="3" align="center">
								<input type="submit" name="submit" value="Add a new discount" style="border:1px solid #CCCCCC; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333; border-radius:3px; -moz-border-radius:3px;" />
								</td>
							</tr>
						</table>
					</div>
					</div>
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

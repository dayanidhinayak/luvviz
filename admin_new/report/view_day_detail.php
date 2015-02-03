<?php 
include_once('../function.php');
$id=$_GET['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>
</head>

<body>
<table>
<?php 
$q=mysql_query("select * from `order_details` where `slno`='$id'");
$r=mysql_fetch_array($q);
$billid=$r['id'];
$disc=$r['discount'];
?>
<tr>
     <td>User Type</td>
	 <td><?php echo $r['user_type'];?></td>
</tr>
<tr>
     <td>Order Type</td>
	 <?php 
	 $q1=mysql_query("select `order_type` from `order_type` where `billid`='$r[id]'");
	 $r1=mysql_fetch_array($q1);
	 ?>
	 <td><?php echo $r1['order_type'];?></td>
</tr>
<tr>
     <td>Billing Name</td>
	 <td><?php echo $r['billing_name'];?></td>
</tr>
<tr>
     <td>Phone Number</td>
	 <td><?php echo $r['billing_phn'];?></td>
</tr>
<tr>
     <td>Billing Country</td>
	 <td><?php echo $r['billing_country'];?></td>
</tr>
<tr>
     <td>Billing State</td>
	 <td><?php echo $r['billing_sate'];?></td>
</tr>
<tr>
     <td>Billing City</td>
	 <td><?php echo $r['billing_city'];?></td>
</tr>
<tr>
     <td>Billing Address</td>
	 <td><?php echo $r['billing_address'];?></td>
</tr>
<tr>
     <td>Shipping Address</td>
	 <td><?php echo $r['shipping_address'];?></td>
</tr>
<tr>
     <td>Payment Type</td>
	 <td><?php echo $r['pay_type'];?></td>
</tr>
<tr>
     <td>Discount</td>
	 <td><?php echo $r['discount'];?></td>
</tr>
<tr>
     <td>Free Product</td>
	 <td><?php echo $r['free_product'];?></td>
</tr>
<tr>
     <td><a href="order_day.php">Back</a></td>
</tr>
</table>

<table>
<tr>
     <td>product name</td>
	 <td>quantity</td>
	 <td>price</td>
</tr>
<?php 
$tot=0;
$q1=mysql_query("select t.`quantity`,t.`tot_price`,p.`product_name`,t.`product_id` from `temp_billinfo` t,`product` p where t.`bill_id`='$billid' and p.`id`=t.`product_id`");
while($r1=mysql_fetch_array($q1))
{
$tot+=$r1['tot_price'];
?>
<tr>
     <td><?php echo $r1['product_name'];?></td>
	 <td><?php echo $r1['quantity'];?></td>
	 <td><?php echo $r1['tot_price'];?></td>
</tr>
<?php } ?>
<tr>
    <td colspan="2">Total:</td>
	<td><?php echo $tot;?></td>
</tr>
<tr><td>Discount Price</td>
<?php
if($disc!="")
{
$val=$tot*($disc/100);
}
else
{
$val=0;
}

?>
<td><?php echo number_format($val,2);?></td></tr>
<tr><td>Total Price</td>
<?php
$total=$tot-$val;
?>
<td><?php echo number_format($total,2);?></td>
</tr>


</table>
</body>
</html>

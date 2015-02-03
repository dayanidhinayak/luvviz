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
?>
<tr>
     <td>User Type</td>
	 <td><?php echo $r['user_type'];?></td>
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
     <td><a href="order_pos.php">Back</a></td>
</tr>
</table>
</body>
</html>

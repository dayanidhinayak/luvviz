<?php 
include_once('../function.php');
$purchase_id=$_GET['purchase_id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>
</head>

<body>
<table>
<tr>
      <td>Product Name</td>
	  <td>Quantity</td>
	  <td>Reason</td>
</tr>
<?php 
$q=mysql_query("select `product_name`,`qty`,`reason` from `return_product` where `purchase_id`='$purchase_id'");
while($r=mysql_fetch_array($q))
{
?>
<tr>
      <td><?php echo $r['product_name'];?></td>
	  <td><?php echo $r['qty'];?></td>
	  <td><?php echo $r['reason'];?></td>
</tr>
<?php 
}
?>
<tr><td><a href="return_warehouse.php">Back</a></td></tr>
</table>
</body>
</html>

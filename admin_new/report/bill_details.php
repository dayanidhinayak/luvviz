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
<tr><td>Product Name</td>
<td>Ordered Quantity</td>
<td>Total Price</td>
</tr>
<?php
$query=mysql_query("select p.`product_name`,t.`quantity`,t.`recurrent_price` from `product` p,`temp_billinfo` t where `p`.`id`=`t`.`product_id` and `t`.`bill_id`='$id'");
while($res=mysql_fetch_array($query))
{
?>
<tr><td><?php echo $res['product_name'];?></td>
<td><?php echo $res['quantity'];?></td>
<td><?php echo $res['recurrent_price'];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>

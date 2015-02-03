<?php
include_once("function.php");
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
<td>Quantity</td>
<td>Price</td>
</tr>
<?php
$q=mysql_query("select * from `order_details` where `user_id`='asd@wew.in'");
while($r=mysql_fetch_array($q))
{

$q1=mysql_query("select t.*,p.`product_name`,p.`price` from `temp_billinfo`  t,`product` p where t.`bill_id`='$r[id]' and t.`product_id`=p.`id`");  
while($r1=mysql_fetch_array($q1))
{
$price= $r1['price']*$r1['quantity'];
?>
<tr><td><?php echo $r1['product_name'];?></td>
<td><?php echo $r1['quantity'];?></td>
<td><?php echo $price;?></td>
</tr>
<?php
}
}
?>
</table>
</body>
</html>

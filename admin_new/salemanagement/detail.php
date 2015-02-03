<?php
include_once("function.php");
$orderid=$_GET['orderid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>
</head>

<body>
<table>
<tr><td colspan="3">Order Details</td></tr>
<tr>
<td>Product Name</td>
<td>Quantity</td>
<td>Price</td>
</tr>
<?php 
$sum=0;
$que=mysql_query("select p.`product_name`,t.`tot_price`,t.`quantity` from `temp_billinfo` t,`product` p where t.`bill_id`='$orderid' and t.`product_id`=p.`id`");
while($res=mysql_fetch_array($que))
{
$val=$res['tot_price'];

?>

<tr>
<td><?php echo $res['product_name'];?></td>
<td><?php echo $res['quantity'];?></td>
<td><?php echo $val;?></td>
</tr>



<?php
$sum+=$val;
}
?>

<tr><td colspan="2">Total</td>
<td><?php echo $sum?></td>
</tr>
</table>

</body>
</html>

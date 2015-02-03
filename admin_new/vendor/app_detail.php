<?php 
include_once('../function.php');
$orderid=$_GET['oid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />

<title></title>

</head>
<body>
<form name="form1" method="post" action="insert_approv.php">
<table>
<tr><td>Purchase Order Details</td></tr>
<tr>
<td>&nbsp;</td>
<td>Product Name<input type="hidden" name="orderid" value="<?php echo $orderid?>" /></td>
<td>Ordered Quantity</td>
<td>Ordered By</td>
</tr>
<?php

$que=mysql_query("select * from `purchase_order` where `order_id`='$orderid' and `approval_status`='1' and `status`='0'");
while($res=mysql_fetch_array($que))
{
$q=mysql_query("select p.*,pro.`id` from `purchase_order` p,`product` pro where `p`.`order_id`='$orderid' and `p`.`id`='$res[id]' and `p`.`product_name`=`pro`.`product_name`")or die(mysql_error());
$r=mysql_fetch_array($q);


$pid=$r['id'];
//echo "select `quantity` from `stock` where `type`='admin` and `warehouse_id`='0' and `product_id`='$pid'";


?>
<tr>
<td><input type="checkbox" name="approve[]" value="<?php echo $res['id'];?>" /></td>
<td><?php echo $res['product_name'];?></td>
<td><?php echo $res['quantity'];?></td>
<td><?php echo $res['order_by'];?></td>
</tr>
<?php

}
?>
<tr><td><input type="submit" name="submit" value="Approve" /></td></tr>
</table>
</form>
</body>
</html>







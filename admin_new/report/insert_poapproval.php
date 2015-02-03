<?php 
include_once('../function.php');
$orderid=$_POST['orderid'];
foreach($_POST['approve'] as $val)
{
$q=mysql_query("select p.*,pro.`id` from `purchase_order` p,`product` pro where `p`.`order_id`='$orderid' and `p`.`id`='$val' and `p`.`product_name`=`pro`.`product_name`")or die(mysql_error());
$r=mysql_fetch_array($q);
$qty=$r['quantity'];
echo $qty."<br />";
$pid=$r['id'];
//echo "select `quantity` from `stock` where `type`='admin` and `warehouse_id`='0' and `product_id`='$pid'";
$q1=mysql_query("SELECT * FROM `stock` WHERE `type`='admin' and `warehouse_id`='0' and `product_id`='$pid'")or die(mysql_error());
$r1=mysql_fetch_array($q1);
$qty1=$r1['quantity'];
$qtyfinal=$qty1-$qty;
mysql_query("update `purchase_order` set `approval_status`='1' where `order_id`='$orderid' and `id`='$val'");

mysql_query("update `stock` set `quantity`='$qtyfinal' where `type`='admin' and `warehouse_id`='0' and `product_id`='$pid'")or die(mysql_error());

}



?>

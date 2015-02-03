<?php 
include_once('../function.php');
$orderid=$_POST['orderid'];
foreach($_POST['approve'] as $val)
{
//echo "select * from `purchase_order` where `order_id`='$orderid' and `id`='$val'";
$q=mysql_query("select * from `purchase_order` where `order_id`='$orderid' and `id`='$val'")or die(mysql_error());
$r=mysql_fetch_array($q);

$qty=$r['quantity'];

echo $qty;

$pname=trim($r['product_name']);

$q1=mysql_query("select `id` from `product` where `product_name`='$pname'") or die(mysql_error());

$r1=mysql_fetch_array($q1);

$id=$r1['id'];
echo $id;
//echo "select `slno` from `vendor_detail` where `email`='$_SESSION[user]'";
$q2=mysql_query("select `slno` from `vendor_detail` where `email`='$_SESSION[user]'") or die(mysql_error());
//echo "select `id` from `product` where `product_name`='$pname'";
$r2=mysql_fetch_array($q2);
$slno=$r2['slno'];

$q3=mysql_query("select `slno` from `warehouse` where `vendor_id`='$slno'") or die(mysql_error());
$r3=mysql_fetch_array($q3);
$slno3=$r3['slno'];

echo "select `quantity` from `stock` where `product_id`='$id' and `warehouse_id`='$slno3' and `type_id`='$slno' and `type`='vender'";
$q4=mysql_query("select `quantity` from `stock` where `product_id`='$id' and `warehouse_id`='$slno3' and `type_id`='$slno' and `type`='vender'");
$r4=mysql_fetch_array($q4);
$qty1=$r4['quantity'];
echo $qty1;

$finalqty=$qty+$qty1;

echo $finalqty;

mysql_query("update `stock` set `quantity`='$finalqty' where `product_id`='$id' and `warehouse_id`='$slno3' and `type_id`='$slno' and `type`='vender'");

mysql_query("update `purchase_order` set `status`='1' where `order_id`='$orderid' and `id`='$val'");

//echo $slno;
}

header("location:approve_po.php");

?>

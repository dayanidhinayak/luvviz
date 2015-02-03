<?php 
include_once("../function.php");

$poid=$_POST['poid'];
$qty=$_POST['qty'];
$reason=$_POST['reason'];
$product=$_POST['product'];

$q=mysql_query("select `id` from `product` where `product_name`='$product'");
$r=mysql_fetch_array($q);

$q1=mysql_query("select `quantity` from `stock` where `product_id`='$r[id]'");
$r1=mysql_fetch_array($q1);

$qty1=$r1['quantity']-$qty;
mysql_query("update `stock` set `quantity`='$qty1' where `product_id`='$r[id]' and `type`='vender' and `type_id`=(select `id` from `login` where `user_name`='$_SESSION[user]')");

//echo "insert into `return_product` set `product_name`='$product',`qty`='$qty',`reason`='$reason',`purchase_id`='$poid='";
mysql_query("insert into `return_product` set `product_name`='$product',`qty`='$qty',`reason`='$reason',`purchase_id`='$poid',`status`='0'");
header('location:vendor_homepage.php');

?>
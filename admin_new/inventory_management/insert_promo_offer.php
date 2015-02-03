<?php 
include_once('../function.php');

$discount=$_POST['discount'];

$frm=$_POST['frm'];
$to=$_POST['to'];
$pid=$_POST['pid'];
$code=rand(1000000000,9000000000);
echo "insert into `promo_product` set `promo_code`='$code',`from_date`='$frm',`to_date`='$to',`product_id`='$pid',`status`='0',`discount`='$discount'";
mysql_query("insert into `promo_product` set `promo_code`='$code',`from_date`='$frm',`to_date`='$to',`product_id`='$pid',`status`='0',`discount`='$discount'") or die(mysql_error());
header('location:promo_offer1.php');
?>
<?php 
include_once('function.php');

$id=$_GET['id'];
$val=$_GET['val'];
if($val=='1')
{
mysql_query("update `promo_product` set `status`='1' where `id`='$id'");
}
else
{
mysql_query("update `promo_product` set `status`='0' where `id`='$id'");
}
header("location:promo_offer.php");
?>
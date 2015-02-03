<?php 
include_once('function.php');

$id=$_GET['id'];
mysql_query("update `promo_product` set `status`='1' where `id`='$id'");
header("location:add_promo_prdct.php");
?>
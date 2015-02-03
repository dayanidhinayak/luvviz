<?php 
include_once('../function.php');
$id=$_GET['id'];
mysql_query("delete from `promo_product` where `id`='$id'");
header("location:promo_offer1.php");
?>

<?php 
include_once('function.php');

$id=$_GET['id'];
mysql_query("update `promo_offer` set `status`='1' where `id`='$id'");
header("location:add_offer.php");
?>
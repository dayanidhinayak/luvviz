<?php 
include_once('function.php');

$id=$_GET['id'];
mysql_query("update `coupon` set `status`='1' where `id`='$id'");
header("location:add_coupons.php");
?>
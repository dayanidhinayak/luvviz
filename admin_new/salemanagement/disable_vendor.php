<?php 
include_once('function.php');

$id=$_GET['id'];
mysql_query("update `vendor_detail` set `status`='1' where `slno`='$id'");
mysql_query("update `pos_user_detail` set `status`='1' where `vendor_id`='$id'");
header("location:view_vendor_detail.php");
?>

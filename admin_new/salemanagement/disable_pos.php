<?php 
include_once('function.php');

$id=$_GET['id'];
mysql_query("update `pos_user_detail` set `status`='1' where `slno`='$id'");
header("location:view_pos_detail.php");
?>

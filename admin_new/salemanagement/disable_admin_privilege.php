<?php 
include_once('function.php');

$id=$_GET['id'];
mysql_query("update `admin_detail` set `status`='1' where `slno`='$id'");
header("location:add_privilege.php");
?>
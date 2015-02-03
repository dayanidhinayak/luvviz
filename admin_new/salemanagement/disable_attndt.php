<?php 
include_once('function.php');

$id=$_GET['id'];
mysql_query("update `phn_attendant_detail` set `status`='1' where `slno`='$id'");
header("location:view_attndt_detail.php");
?>

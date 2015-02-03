<?php 
include_once('../function.php');
$id=$_GET['id'];
mysql_query("delete from `category` where `id`='$id'");
header("location:monitoring.php");
?>

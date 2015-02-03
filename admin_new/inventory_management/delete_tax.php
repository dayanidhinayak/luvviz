<?php 
include_once('../function.php');
$id=$_GET['id'];
mysql_query("delete from `taxes` where `slno`='$id'")or die(mysql_error());
header("location:taxes.php");
?>
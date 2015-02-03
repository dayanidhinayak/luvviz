<?php
include_once("function.php");
$id=$_GET['id'];
$res=mysql_query("delete from `temp_billinfo`  where `slno`='$id'");
header("location:shopping.php");
?>

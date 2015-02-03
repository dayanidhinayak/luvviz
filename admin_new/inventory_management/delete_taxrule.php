<?php 
include_once('../function.php');
$id=$_GET['id'];
mysql_query("delete from `tax_rule` where `id`='$id'")or die(mysql_error());
header("location:tax_rules.php");
?>
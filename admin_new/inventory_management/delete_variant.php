<?php 
include_once('function.php');
$id=$_GET['id'];
mysql_query("delete from `product_varient` where `product_id`='$id'");
header("location:edit_varient.php");
?>
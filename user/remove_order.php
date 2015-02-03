<?php 
include_once('function.php');

$id=$_GET['product_id'];
//echo $id;
//echo "delete from `temp_billinfo` where `product_id`='$id' and `bill_id`='$_SESSION[billid]'";
mysql_query("delete from `temp_billinfo` where `product_id`='$id' and `bill_id`='$_SESSION[billid]'")or die(mysql_error());

?>

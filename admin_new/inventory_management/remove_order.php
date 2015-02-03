<?php 
include_once('function.php');

$id=$_GET['product_id'];
echo $id;
$sql=mysql_query("delete from `temp_billinfo` where `product_id`='$id'")or die(mysql_error());

?>

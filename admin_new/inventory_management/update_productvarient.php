<?php 
include_once('function.php');

$variant=$_POST['varient'];
$value=$_POST['v_value'];
$pid=$_POST['product_id'];

mysql_query("update `product_varient` set  `description`='$value' where `product_id`='$pid' and `varient_name`='$variant'");
header("location:edit_varient.php");
?>


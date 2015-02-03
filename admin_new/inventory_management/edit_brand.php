<?php 
include_once('function.php');
$cid=$_GET['q'];
$name=$_GET['cname'];
$date=date("Y-m-d H:i:s");

mysql_query("update `brand` set `brand_name`='$name',`created`='$date' where `id`='$cid'");

?>


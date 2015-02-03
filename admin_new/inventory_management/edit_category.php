<?php 
include_once('function.php');
$cid=$_GET['q'];
$name=$_GET['cname'];
$date=date("Y-m-d H:i:s");

mysql_query("update `category` set `category_name`='$name',`modified_date`='$date' where `id`='$cid'");

?>

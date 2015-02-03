<?php 
include_once('function.php');
$warehouse_id=$_POST['warehouse_id'];
$name=$_POST['name'];
$location=$_POST['location'];
$storage=$_POST['storage'];
$vendor=$_POST['vendor'];
$date=date("Y-m-d H:i:s");

mysql_query("update `warehouse` set `warehouse_name`='$name',`location`='$location',`storage_capacity`='$storage',`vendor_id`='$vendor',`modified_ondate`='$date' where `slno`='$warehouse_id'");
header("location:view_warehouse.php");

?>

<?php 
include_once('function.php');
$name=$_POST['name'];
$location=$_POST['location'];
$storage=$_POST['storage'];
$vendor=$_POST['vendor'];
$date=date("Y-m-d H:i:s");

mysql_query("insert into `warehouse` set `warehouse_name`='$name',`location`='$location',`storage_capacity`='$storage',`vendor_id`='$vendor',`created_ondate`='$date',`status`='0'")or die(mysql_error());	

header("location:view_warehouse.php");

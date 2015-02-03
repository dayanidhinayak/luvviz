<?php 
include_once("../function.php");
$pid=$_GET['pid'];
$mid=$_GET['mid'];
mysql_query("delete from `layout` where `page_id`='$pid' and `module_id`='$mid'");
header("location:layout.php");
?>
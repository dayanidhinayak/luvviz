<?php 
include_once("../function.php");
$name=$_POST['collection'];
mysql_query("insert into `collection` set `name`='$name'");
header("location:add_collection.php");
?>
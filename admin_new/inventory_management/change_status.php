<?php
include_once("../function.php");
$pid=$_GET['q'];
//echo "update `category` set `pc_status`='0' where `id`='$pid'";
mysql_query("update `category` set `pc_status`='0' where `id`='$pid'");
?>
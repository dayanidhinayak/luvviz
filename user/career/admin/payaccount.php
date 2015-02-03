<?php
include_once('database.php'); $id=$_GET['userid'];
$point=$_GET['points'];
$table=$_GET['tname'];
$bmin=$_GET['bmin'];
$amount=$_GET['amount'];
$date=date("Y-m-d");

$query=mysql_query("insert into `$table` set `amount`='$amount', `points`='$point',`brought`='$bmin',`date`='$date'")or die(mysql_error());
//mysql_query("update `prize` set `status`='1' where `userid`='$id'")or die(mysql_error());
?>
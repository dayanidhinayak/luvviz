<?php 
include_once('../function.php');

$cname=$_POST['cname'];
$code=$_POST['code'];
$ncode=$_POST['ncode'];
$symbol=$_POST['symbol'];
$crate=$_POST['crate'];

mysql_query("insert into `currency` set `name`='$cname',`iso_code`='$code',`numeric_code`='$ncode',`symbol`='$symbol',`rate`='$crate'");
header("location:add_currency.php");
?>
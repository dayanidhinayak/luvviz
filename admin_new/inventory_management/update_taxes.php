<?php 

ini_set('allow_url_include' , true);

include_once('../function.php');

$val=$_POST['hiddenvalue'];
$name=$_POST['taxname'];
$rate=$_POST['rate'];
$status=$_POST['display'];

mysql_query("update `taxes` set `tax_name`='$name',`rate`='$rate',`status`='$status' where `slno`='$val'");
header("location:taxes.php");
?>
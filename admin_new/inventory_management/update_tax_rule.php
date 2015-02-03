<?php 
ini_set('allow_url_include' , true);
include_once('../function.php');

$name=$_POST['taxname'];
$rate=$_POST['rate'];
$status=$_POST['display'];
$tax_id=$_POST['tax_id'];

mysql_query("update `tax_rule` set `name`='$name',`tax_id`='$rate',`status`='$status' where `id`='$tax_id'");
header("location:tax_rules.php");

?>
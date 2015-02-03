<?php 
ini_set('allow_url_include' , true);
include_once('../function.php');

$name=$_POST['taxname'];
$rate=$_POST['rate'];
$status=$_POST['display'];

mysql_query("insert into `tax_rule` set `name`='$name',`tax_id`='$rate',`status`='$status'");
header("location:tax_rules.php");

?>
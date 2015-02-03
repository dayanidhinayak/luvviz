<?php 

ini_set('allow_url_include' , true);

include_once('../function.php');

$name=$_POST['taxname'];
$rate=$_POST['rate'];
$status=$_POST['display'];

mysql_query("insert into `taxes` set `tax_name`='$name',`rate`='$rate',`status`='$status'");
header("location:taxes.php");

?>
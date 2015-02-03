<?php
ini_set("dispaly_errors",1);
include_once("function.php");
$id=$_GET['a'];

$query=mysql_query("delete  from temp_billinfo where `bill_id`='$id'");
$quer=mysql_query("delete  from order_details where `id`='$id'");

?>

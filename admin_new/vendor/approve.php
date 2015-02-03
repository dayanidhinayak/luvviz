<?php
include_once("../function.php");
//echo $_SESSION['user'];
$id=$_GET['id'];
$q=mysql_query("select * from `stock` where ");

mysql_query("update `purchase_order` set `status`='1' where `id`='$id'");
header("location:approve_po.php");

?>

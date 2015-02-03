<?php
include_once("../function.php");
//echo $_SESSION['user'];
$id=$_GET['id'];
mysql_query("delete from `purchase_order` where `id`='$id'");
header("location:view_po.php");

?>

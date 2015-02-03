<?php
include_once("../function.php");
$id=$_POST['po_id'];
$pname=$_POST['pname'];
$qty=$_POST['qty'];

mysql_query("update `purchase_order` set `product_name`='$pname',`quantity`='$qty' where `id`='$id' and `order_by`='$_SESSION[user]'");
header("location:view_po.php");
?>

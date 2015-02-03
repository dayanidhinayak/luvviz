<?php
include_once("../function.php");
$id=$_GET['id'];
mysql_query("delete from `product_images` where `slno`='$id'") or die(mysql_error());
echo "Successfully image deleted.";
?>
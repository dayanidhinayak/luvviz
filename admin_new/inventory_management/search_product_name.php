<?php
include_once("../function.php");
$id=$_GET['id'];
$q=mysql_query("select `product_name` from `product`  where `id`='$id'") or die(mysql_error());
$r=mysql_fetch_array($q);
echo $r['product_name'];
?>
 
 

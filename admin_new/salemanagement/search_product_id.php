<?php
include_once("function.php");
$id=$_GET['id'];
$q=mysql_query("select `id` from `product`  where `product_name`='$id'") or die(mysql_error());
$r=mysql_fetch_array($q);
echo $r['id'];
?>
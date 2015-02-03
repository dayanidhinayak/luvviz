<?php
include_once("function.php");

 foreach($_POST['hide'] as $check) {
 echo $check;
mysql_query("update `product` set `status`='1' where `id`='$check'");
 
 
 }
header("location:view_product.php");


?>
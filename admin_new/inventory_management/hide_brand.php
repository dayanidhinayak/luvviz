<?php
include_once("function.php");

 foreach($_POST['hide'] as $check) {
mysql_query("update `brand` set `status`='1' where `id`='$check'");
 
 }
header("location:add_brand.php");

?>

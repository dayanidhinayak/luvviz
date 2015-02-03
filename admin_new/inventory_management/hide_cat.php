<?php
include_once("function.php");

 foreach($_POST['hide'] as $check) {
mysql_query("update `category` set `status`='1' where `id`='$check'");
 
 }
header("location:view_category.php");

?>

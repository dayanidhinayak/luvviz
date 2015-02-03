<?php
include_once('database.php');
$code=$_GET['co'];
mysql_query("delete from `authcode` where `code`='$code'")or die(mysql_error());
?>
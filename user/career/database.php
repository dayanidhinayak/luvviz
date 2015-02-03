<?php
ob_start();
session_start();
$con=mysql_connect("localhost","root","colourfade");
mysql_select_db("luvviz_cart",$con);
?>

<?php
ob_start();
session_start();
$con=mysql_connect("localhost","luvviz_luvviz","pass@1234");
mysql_select_db("luvviz_cart",$con);
?>

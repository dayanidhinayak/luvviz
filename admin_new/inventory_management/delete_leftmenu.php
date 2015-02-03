<?php
include_once('../function.php');
$idval=$_GET['id'];
$q=mysql_query("delete from `leftmenu` where `slno`='$idval'");
header("location:add_leftmenu.php");


?>
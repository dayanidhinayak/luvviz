<?php
include_once('../function.php');
$idval=$_GET['id'];
$q=mysql_query("delete from `imagelist` where `slno`='$idval'");
header("location:viewallimage.php");


?>
<?php
ini_set("display_errors",1);
include_once("../function.php");
$id=$_GET['id1'];
$res=mysql_query("delete from `varient_table` where id='$id'");
header("location:features.php");
?>

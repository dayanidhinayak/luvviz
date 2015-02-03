<?php
ini_set("display_errors",1);
include_once("../function.php");
$id=$_POST['hidden_id'];
$name=$_POST['uname'];
$res=mysql_query("update `varient_table` set `varient_name`='$name' where `id`='$id'" );
header("location:edit.php?ids=$id");
?>

<?php 
include_once("../function.php");

$val=$_GET['val'];
if($val=='0')
{
mysql_query("update `pagination` set `value`='1'");
}
else
{
mysql_query("update `pagination` set `value`='0'");
}
header("location:pagination.php");
?>
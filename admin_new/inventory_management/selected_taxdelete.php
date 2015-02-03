<?php
include_once("../function.php");
$value=$_POST['tax'];
foreach($value as $v)
{

mysql_query("delete from `taxes` where `slno`='$v'");

}
header("location:taxes.php");

?>
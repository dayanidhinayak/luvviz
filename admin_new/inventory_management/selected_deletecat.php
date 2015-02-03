<?php
include_once("../function.php");
$value=$_POST['product'];
foreach($value as $v)
{

mysql_query("delete from `category` where `id`='$v'");

}
header("location:categories.php");

?>

<?php 
include_once("../function.php");
$value=$_POST['product'];
foreach($value as $v)
{

mysql_query("delete from `product_varient` where `product_id`='$v'");

}
header("location:features.php");


?>
<?php
include_once("../function.php");
$value=$_POST['varient'];
foreach($value as $v)
{
echo "delete from `product_varient` where `varient_name`=(select `varient_name` from `varient_table` where `id`='$v')";
mysql_query("delete from `product_varient` where `varient_name`=(select `varient_name` from `varient_table` where `id`='$v')")or die(mysql_error());
mysql_query("delete from `varient_table` where `id`='$v'")or die(mysql_error());


}
header("location:features.php");

?>

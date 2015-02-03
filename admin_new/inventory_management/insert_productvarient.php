<?php 
include_once('function.php');
$product_id=$_POST['product_id'];
$varient=$_POST['varient'];
$desc=$_POST['name'];
$str="";
foreach($varient as $p => $q)
{
$str="`varient_name`='$q',`description`='$desc[$p]'";
echo $str;
mysql_query("insert into `product_varient` set `product_id`='$product_id',$str");
//echo $p."---------------------------------".$q."--------$desc[$p]";
$str="";

}
header("location:add_product.php");

?>

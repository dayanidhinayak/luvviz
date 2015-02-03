<?php 
ini_set('allow_url_include' , true);
include_once('../function.php');
$pid=$_POST['product'];
$pid1=$_POST['product1'];
//echo $pid1;
$str='';
foreach($pid1 as $id)
{
echo $id.'<br/>';
$str.=$id.',';
}
echo "insert into `mypc_detail` set `product_id`='$pid',`related_id`='$str'";
mysql_query("insert into `mypc_detail` set `product_id`='$pid',`related_id`='$str'");
header("location:set_product.php");
?>
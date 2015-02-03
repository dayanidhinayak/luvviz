<?php 
include_once('function.php');

$id=$_GET['id'];
//echo $id;
//echo "delete from `temp_billinfo` where `product_id`='$id' and `bill_id`='$_SESSION[billid]'";

$que=mysql_query("select * from `temp_billinfo` where `product_id`='$id' and `bill_id`='$_SESSION[billid]'");
$res=mysql_fetch_array($que);
$price=$res['tot_price'];
$qty=$res['quantity'];
$val=$price/$qty;
$new_price=$price-$val;
$verifyqty=$qty-1;
if($verifyqty>='1')
{
mysql_query("update `temp_billinfo` set `quantity`='$verifyqty',`tot_price`='$new_price' where `product_id`='$id' and `bill_id`='$_SESSION[billid]'")or die(mysql_error());
}
else
{
mysql_query("delete from `temp_billinfo` where `product_id`='$id' and `bill_id`='$_SESSION[billid]'");
}
?>

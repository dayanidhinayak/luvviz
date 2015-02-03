<?php
include_once("../function.php");
$id=$_GET['id'];
$dispsql=mysql_query("select * from `dispatch` where `billid`='$id'");
$no=mysql_num_rows($dispsql);
if($no>0){
mysql_query("update `order_details` set `status`='1' where `id`='$id'") or die(mysql_error());
//echo "Delivered";
$billsql=mysql_query("select * from `temp_billinfo` where `bill_id`='$id'");
while($resbillsql=mysql_fetch_array($billsql)){
//echo $resbillsql['description'];
$billqty=$resbillsql['quantity'];
$stockquan=mysql_query("select * from `stock` where `product_id`='$resbillsql[product_id]' and `size`='$resbillsql[description]'");
$resstockquan=mysql_fetch_array($stockquan);
//echo $resstockquan['quantity'];
$stockqty=$resstockquan['quantity'];
$less=$stockqty-$billqty;
mysql_query("update `stock` set `quantity`='$less' where `product_id`='$resbillsql[product_id]' and `size`='$resbillsql[description]'");
}
}
else{
echo 1;
}
?>
<?php
ini_set('allow_url_include' , true);
include_once("../function.php");
$id=$_REQUEST['did'];
$desc=$_REQUEST['descrip'];
$billid=$_REQUEST['blid'];
$bilslno=$_REQUEST['slno'];
$barcode=$_REQUEST['code'];
$quantity=$_REQUEST['quantity'];
$date=date("Y-m-d H:i:s");
$sql=mysql_query("select * from `stock` where `product_id`='$id' and `size`='$desc'");
$res=mysql_fetch_array($sql);
if($barcode==$res['productcode']){
    if($quantity<=$res['quantity']){
//$dispatch_quantity=$res['quantity']-$quantity;

mysql_query("insert into `dispatch` set `billid`='$billid',`barcode`='$barcode',`dispatch_quantity`='$quantity',`date`='$date',`product_id`='$id',`size`='$desc',`bilslno`='$bilslno'");
mysql_query("update `temp_billinfo` set `pendingstatus`='1' where `product_id`='$id' and `description`='$desc' and `slno`='$bilslno'");
//mysql_query("update `stock` set `quantity`='$dispatch_quantity' where `product_id`='$id' and `size`='$desc'");

}
else{
    echo 1;
}

}
else{
    echo 2;
}

?>

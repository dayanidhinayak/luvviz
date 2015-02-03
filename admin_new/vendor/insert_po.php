<?php
include_once("../function.php");
echo $_SESSION['user'];
$q=mysql_query("select max(`order_id`) as `order_id` from `purchase_order`");
$r=mysql_fetch_array($q);
$oid=$r['order_id']+1;
$delivery=$_POST['delivery'];
$date=date("Y-m-d H:i:s");
$pname=$_POST['product_name'];
$pid=$_POST['prod_id'];
$qty=$_POST['quantity'];
$str="";
foreach ($pid as $p =>$q)
{
 $str=$str."`product_name`='$pid[$p]',`quantity`='$qty[$p]'";
//echo "insert into `purchase_order` set `order_id`='$oid',`entry_date`='$date',`delivery_date`='$delivery',`order_by`='$_SESSION[user]',$str".'<br/>';

mysql_query("insert into `purchase_order` set `order_id`='$oid',`entry_date`='$date',`delivery_date`='$delivery',`order_by`='$_SESSION[user]',$str") or die(mysql_error());

$str="";


}
echo $str.'<br/>';
//echo "insert into `purchase_order` set `order_id`='$oid', `product_name`='$pname',`quantity`='$qty',`entry_date`='$date',`delivery_date`='$delivery',`order_by`='$_SESSION[user]'";
//mysql_query("insert into `purchase_order` set `order_id`='$oid', `product_name`='$pname',`quantity`='$qty',`entry_date`='$date',`delivery_date`='$delivery',`order_by`='$_SESSION[user]'")or die(mysql_error());


header("location:purchase_order.php");


?>

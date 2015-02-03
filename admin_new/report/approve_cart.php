<?php 
include_once('../function.php');
$bill_id=$_POST['bill_id'];

$q1=mysql_query("select `user_id ` from `order_details` where `id`='$bill_id'");
$r1=mysql_fetch_array($q1);
$email=$r1['user_id'];



$query=mysql_query("select o.*,t.* from `order_details` o,`temp_billinfo` t where `o`.`id`='$bill_id' and  `o`.`id`=`t`.`bill_id`");
while($result=mysql_fetch_array($query)) 
{
$qty=$result['quantity'];
echo $qty;

		$q1=mysql_query("SELECT * FROM `stock` WHERE `type`='admin' and `warehouse_id`='0' and `product_id`='$result[product_id]'")or die(mysql_error());
		$r1=mysql_fetch_array($q1);
		$qty1=$r1['quantity'];
		echo $qty1;
		
if($qty1<$qty)
{
echo "Insufficient Product In Stock.";
}
else
{
$remainqty=$qty1-$qty;
mysql_query("update `stock` set `quantity`='$remainqty' where `type`='admin' and `warehouse_id`='0' and `product_id`='$result[product_id]'")or die(mysql_error());

mysql_query("update `order_details` set `status`='1' where `id`='$bill_id'");

$subj="Approved Order";

$message=" Your Order Has Been Approved By Admin\r\n";



$to=$email;

mail($to,$subj,$message);


}
}
header("location:order_cart.php");
?>

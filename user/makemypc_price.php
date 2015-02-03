<?php 
include_once("function.php");
$x='';
$value=$_GET['id'];

$val=explode(",",$value);
foreach($val as $v)
{

$x.="`id`='$v' or";

}

$a=str_replace("or`id`='' or","",$x);
//echo "select `selling_price` from `product` where $a";
$que=mysql_query("select sum(`selling_price`) as tot from `product` where $a")or die(mysql_error());
$res=mysql_fetch_array($que);
$sum=$res['tot'];
echo $sum;

?>

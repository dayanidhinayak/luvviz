<?php
include_once("function.php");
$productid=$_POST['pid'];
echo $_SESSION['billid'];
foreach($_POST as $p)
{
if($p!="Enter" && $p!="select")
{
//echo $p."<br/>";
$q=mysql_query("select * from `product` where `id`='$p'");
$r=mysql_fetch_array($q);


$q1=mysql_query("select * from `temp_billinfo` where `bill_id`='$_SESSION[billid]' and `product_id`='$p'");
$cnt=mysql_num_rows($q1);
if($cnt=='0')
{

//$xcnt=mysql_num_rows($xque1);

//echo $r['product_name']."-----------------------------".$r['price']."<br />";
$str="insert into `temp_billinfo` set `bill_id`='$_SESSION[billid]',`product_id`='$p',`quantity`='1',`tot_price`='$r[price]'";
echo $str."<br />";

mysql_query($str);
}
else
{
$r1=mysql_fetch_array($q1);
$qty=$r1['quantity']+1;
$price=$r1['tot_price']+$r['price'];


$que= "update `temp_billinfo` set `quantity`='$qty',`tot_price`='$price' where `bill_id`='$_SESSION[billid]' and `product_id`='$p'";
mysql_query($que)or die(mysql_error());


}

}
}

header("location:shopping.php");
?>

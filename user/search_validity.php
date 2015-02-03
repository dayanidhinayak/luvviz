<?php 
include_once("function.php");
$code=$_GET['q'];
$q=mysql_query("select * from `promo_offer` where `promo_code`='$code'");
$r=mysql_fetch_array($q);
$date=date("Y-m-d");
if($date>=$r['from_date'] && $date<=$r['to_date'] && $r['status']=='0' && $r['number']>='1')
{
echo $r['discount'];

}
else
{
echo "This Coupon code is not valid";

}

?>
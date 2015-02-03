<?php
include_once("function.php");
$catid=$_POST['catname'];
foreach($_POST['pidval'] as $x=>$x1)
{

$pid=$_POST['pidval'][$x];
mysql_query("insert into `topseller` set `categoryid`='$catid',`productid`='$pid'");
mysql_query("update `category` set `top_seller_status`='1' where `id`='$catid'");
mysql_query("update `product` set `top_sellers`='1' where `id`='$pid'");

}
header("location:topsell.php");
?>

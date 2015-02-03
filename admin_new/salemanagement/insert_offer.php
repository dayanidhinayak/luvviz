<?php 
include_once('function.php');

$discount=$_POST['discount'];
$number=$_POST['number'];
$frm=$_POST['frm'];
$to=$_POST['to'];
$cid=$_POST['cid'];
$code=rand(100000000,900000000);
mysql_query("insert into `promo_offer` set `promo_code`='$code',`from_date`='$frm',`to_date`='$to',`number`='$number',`status`='0',`created_by`='$cid',`discount`='$discount'");
header('location:add_offer.php');
?>
<?php 
include_once('function.php');

$id=$_POST['uid'];
$frm=$_POST['frm'];
$to=$_POST['to'];

mysql_query("update `promo_offer` set `from_date`='$frm',`to_date`='$to' where `id`='$id'");
header('location:add_offer.php');
?>
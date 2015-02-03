<?php
include_once('function.php');


$uid=$_POST['uid'];
$pass=$_POST['pass'];
$name=$_POST['name'];
$email=$_POST['email'];
$phn=$_POST['phn'];
$add=$_POST['address'];
$country=$_POST['country'];
$state=$_POST['state'];
$pin=$_POST['pin'];
mysql_query("update `login` set `password`='$pass' where `user_name`='$email' and `status`='3'");
//echo "update `phn_attendant_detail` set `name`='$name',`phone`='$phn',`address`='$add',`country`='$country',`state`='$state',`pin`='$pin' where where `email`='$email'";
mysql_query("update `phn_attendant_detail` set `name`='$name',`phone`='$phn',`address`='$add',`country`='$country',`state`='$state',`pin`='$pin'  where `email`='$email'") or die(mysql_error());
header("location:add_phn_attnd.php");
?>
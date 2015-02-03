<?php
include_once('../function.php');

$hdn=$_POST['hdn'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$name=$_POST['name'];
$email=$_POST['email'];
$phn=$_POST['phn'];
$add=$_POST['address'];
$country=$_POST['country'];
$state=$_POST['state'];
$pin=$_POST['pin'];
mysql_query("update `login` set `password`='$pass' where `user_name`='$email' and `status`='2'");
mysql_query("update `pos_user_detail` set `name`='$name',`phone`='$phn',`address`='$add',`country`='$country',`state`='$state',`pin`='$pin' where `email`='$email'");
header("location:add_pos.php");
?>

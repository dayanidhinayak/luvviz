<?php
session_start();
include_once("function.php");



$uname=$_POST['email'];
$pass=$_POST['pwd'];


$sql=mysql_query("select * from `user_details` where `email`='$uname' and `password`='$pass'") or die(mysql_error());
$cnt=mysql_num_rows($sql);

if($cnt>='1')
{
$_SESSION['user_id']=$uname;
$_SESSION['pass']=$pass;
header("location:index.php");
}

else header("location:login.php");


?>

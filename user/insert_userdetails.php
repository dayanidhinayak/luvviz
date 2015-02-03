<?php
include_once("function.php");
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$name=$fname." ".$lname;
//$email=$_GET['email'];
//$password=$_GET['password'];
$contact=$_GET['Input2'];
$country=$_GET['area'];
$state=$_GET['state'];
$city=$_GET['city'];
$pin=$_GET['pin'];
$address=$_GET['add'];
$ip=$_SERVER['SERVER_ADDR'];

//echo "insert into `order_details` set `id`='$_SESSION[billid]',
//`billing_name`='$name',
//`billing_phn`='$contact',
//`billing_country`='$country',
//`billing_sate`='$state',
//`billing_city`='$city',
//`billing_pin`='$pin',
//`billing_address`='$address',
//`status`='0'";


$query=mysql_query("insert into `order_details` set `id`='$_SESSION[billid]',
`billing_name`='$name',
`billing_phn`='$contact',
`billing_country`='$country',
`billing_sate`='$state',
`billing_city`='$city',
`billing_pin`='$pin',
`billing_address`='$address',
`status`='0'")or die(mysql_error());

//mysql_query("insert into `login` set `user_name`='$email',`password`='$password',`status`='-1'");

?>


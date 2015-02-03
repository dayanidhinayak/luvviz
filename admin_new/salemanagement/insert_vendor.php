<?php 
include_once('function.php');


//$uname=$_POST['uname'];
$pass=$_POST['pass'];
$name=$_POST['name'];
$email=$_POST['email'];
$phn=$_POST['phn'];
$add=$_POST['address'];
$country=$_POST['country'];
$state=$_POST['state'];
$pin=$_POST['pin'];

$q=mysql_query("select * from `vendor_detail` where `email`='$email'");
$r=mysql_num_rows($q);
if($r==0)
{
mysql_query("insert into `vendor_detail` set `name`='$name',`email`='$email',`phone`='$phn',`address`='$add',`country`='$country',`state`='$state',`pin`='$pin',`status`='0'");
mysql_query("insert into `login` set `user_name`='$email',`password`='$pass',`status`='5'");
$msg="Successfully Added An User";
}
else
{
$msg="An Vendor in this user name already Exists...";

}


header("location:view_vendor_detail.php?msg=$msg");
?>

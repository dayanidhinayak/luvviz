<?php 
include_once('../function.php');


//$uname=$_POST['uname'];
$pass=$_POST['pass'];
$name=$_POST['name'];
$email=$_POST['email'];
$phn=$_POST['phn'];
$add=$_POST['address'];
$country=$_POST['country'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$vendor=$_POST['vendor'];
$cid=$_POST['cid'];

$q=mysql_query("select * from `pos_user_detail` where `email`='$email'");
$r=mysql_num_rows($q);
if($r==0)
{
mysql_query("insert into `pos_user_detail` set `name`='$name',`email`='$email',`phone`='$phn',`address`='$add',`country`='$country',`state`='$state',`pin`='$pin',`vendor_id`='$vendor',`status`='0',`created_by`='$cid'");


mysql_query("insert into `login` set `user_name`='$email',`password`='$pass',`status`='2'");
$msg="Successfully Added An User";
}

else
{
$msg="An POS in this user name already Exists...";

}
header("location:add_pos.php");


?>

<?php 
include_once('function.php');
$user=$_POST['uname'];
$pass=$_POST['pass'];

$q=mysql_query("select * from `login` where `user_name`='$user' and `password`='$pass'") or die(mysql_error());
$a=mysql_num_rows($q);
if($a!=1)
{
 header("location:index.php");
}
$_SESSION['user']=$user;
$_SESSION['pass']=$pass;

$rs=mysql_fetch_array($q);
$status=$rs['status'];
if($status==1 || $status==4)
{
if($status==4)
{
$qq=mysql_query("select `status` from `admin_detail` where `email`='$user'");
$rr=mysql_fetch_array($qq);
if($rr['status']=='0')
{
header("location:admin_homepage.php");
}
else
{
header("location:index.php");
}
}
else
 header("location:admin_homepage.php");
}
elseif($status==2)
{
$que=mysql_query("select `status` from `pos_user_detail` where `email`='$user'");
$r=mysql_fetch_array($que);
if($r['status']=='0')
{
header("location:../pos/pos_order.php");
}
else
{
header("location:index.php");
}
}
elseif($status==3)
{
$query=mysql_query("select `status` from `phn_attendant_detail` where `email`='$user'");
$result=mysql_fetch_array($query);
if($result['status']=='0')
{
header("location:../phone/pos_order.php");
}
else
{
header("location:index.php");
}
}

elseif($status==5)
{
$query=mysql_query("select `status` from `vendor_detail` where `email`='$user'");
$result=mysql_fetch_array($query);
if($result['status']=='0')
{
header("location:vendor/vendor_homepage.php");
}
else
{
header("location:index.php");
}
}


elseif($status==-1)
{

header("location:../user/user_homepage.php");

}

else
{
header("location:index.php");
}
?>

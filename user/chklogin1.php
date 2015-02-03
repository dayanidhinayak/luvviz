<?php
include_once("function.php");
$uname=$_GET['email'];
$pass=$_GET['pwd'];


$sql=mysql_query("select * from `user_details` where `email`='$uname' and `password`='$pass'") or die(mysql_error());
$cnt=mysql_num_rows($sql);

if($cnt>='1')
{
$_SESSION['id']=$uname;
$_SESSION['pass']=$pass;
echo "1";

}

else 

echo "0";

?>

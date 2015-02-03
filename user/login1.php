<?php
include_once("function.php");
$uname=$_GET['email'];



$sql=mysql_query("select * from `user_details` where `email`='$uname'") or die(mysql_error());
$cnt=mysql_num_rows($sql);

if($cnt>='1')
{
$_SESSION['id']=$uname;

echo "1";

}

else 

echo "0";

?>

<?
include_once ("database.php");

if(isset($_POST['submit']))
{
  $result=uniqid();
$userid=htmlentities($_POST['userid']);

$fet=mysql_query("select * from `register` where `userid`='$userid'");
$res=mysql_fetch_array($fet);
$email=$res['email'];

 mysql_query("update `register` set `pass` = '$result' WHERE `userid` = '$userid'");
 $cpass="update `login_ch` set `password` = '$result' WHERE `username` = '$userid'";
	mysql_query("$cpass");	
		$message="your new Password  is=".$result;
	       $subject="email verification";
	       $from="career@luvviz.com";
                mail($email,$subject,$message,"From: $from\n");
}
header("location:login.php?msg=$msg");
?>
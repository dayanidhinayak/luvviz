<?php
include_once("function.php");
if(isset($_POST['submit'])){
$user=htmlentities($_POST['usernm']);
$res=mysql_query("select * from `userlogin` where `username`='$user'");
$no=mysql_num_rows($res);
if($no>=1){
header("location:mail.php");
}
else{
header("location:forgetpwd.php");
}
}
$username=$_POST['usernm'];
//echo $username;
$to =$username;
$subject = "forget password.";

$link = "www.luvviz.com/luvviz/user/changepwd.php?username=$username";
$message = "Please click the following link to activate your account: ".$link; 
$from = "www.luvviz.com";
$headers = "From: $from";
mail($to,$subject,$message,$headers); 
header("location:forgetpwd.php");
?>

<?php
include_once('database.php');
if(isset($_POST['carrer_submit'])){
$name=htmlentities($_POST['uname']);
$contactno=htmlentities($_POST['contactno']);
$emailid=htmlentities($_POST['emailid']);
mysql_query("insert into `details` set `name`='$name',`contactno`='$contactno',`email`='$emailid'");
$to="career@luvviz.com";
$subject = "career request";
//$link = "www.luvviz.com/luvviz/user/changepwd.php?username=$username";
$link=$name."/".$contactno."/".$emailid;
$message = "Please check your career details: ".$link; 
$from = "www.luvviz.com";
$headers = "From: $from";
mail($to,$subject,$message,$headers); 
$msg="Your request has been submitted";
header("location:login.php?mess=$msg");
}
?>

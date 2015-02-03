<?php
session_start();
include_once("function.php");
$email=$_POST['mail'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pass=$_POST['pwd'];
$gender=$_POST['gender'];
$q=mysql_query("select `slno` from `user_details` where `email`='$email'") or die(mysql_error());
$numrow=mysql_num_rows($q);
if($numrow==0)
{
mysql_query("insert into `user_details` set `first_name`='$fname',`last_name`='$lname',`email`='$email',`password`='$pass',`gender`='$gender'")or die(mysql_error());

$msg="Dear $fname Congratulations! Your new account has been successfully created!<br/>You can now take advantage of member priviledges to enhance your online shopping experience with us.<br/>If you have ANY questions about the operation of this online shop, please email the store owner.<br/> confirmation has been sent to the provided email address. If you have not received it within the hour, please contact us.";
$to=$email;

$subject="Welcome and thank you for registering at Call And Shop !";

$header="from: Mapkart.com";

$message="
Your account has now been created and you can log in by using your email address and password by visiting our website or at the following URL: \r\n";

$message.="http://www.mapkart.com/cake/mapkart/login.php \r\n";

$message.="Upon logging in, you will be able to access other services including reviewing past orders, printing invoices and editing your account information.
 \r\n";

$message.="Thanks,\r \n";

$message.="Mapkart.com\r \n";
$sentmail = mail($to,$subject,$message,$header);

header("location:login.php?msg=$msg");
}

else{
    $msg="An account already exists with the same email address. Login or create an account with another email address.";
    header("location:register.php?msg=$msg");
}



?>
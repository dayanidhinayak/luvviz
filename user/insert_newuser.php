<?php
include_once("function.php");
if($_POST['email']!="" && $_POST['fname']!="" && $_POST['lname']!="" && $_POST['pwd']!=""){
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pass=$_POST['pwd'];
$gender=$_POST['gender'];
$q=mysql_query("select `slno` from `user_details` where `email`='$email'") or die(mysql_error());
$numrow=mysql_num_rows($q);
if($numrow==0)
{
mysql_query("insert into `user_details` set `first_name`='$fname',`last_name`='$lname',`email`='$email',`password`='$pass',`gender`='$gender'")or die(mysql_error());
echo "insert into `user_details` set `first_name`='$fname',`last_name`='$lname',`email`='$email',`password`='$pass',`gender`='$gender'";
$_SESSION['id']=$email;
$_SESSION['pass']=$pass;
$to =$email;
$subject = "New account created.";
$message ="Dear $fname Congratulations! Your new account has been successfully created!Username=$email and Password=$pass"; 
$from = "www.luvviz.com";
$headers = "From: $from";
mail($to,$subject,$message,$headers);
$msg="Dear $fname Congratulations! Your new account has been successfully created!";

//header("location:check1.php?msg=$msg");
header("location:index.php?msg=$msg");
}

else{
    $msg="An account already exists with the same email address. Login or create an account with another email address.";
	//echo "An account already exists with the same email address. Login or create an account with another email address.";
    header("location:creataccount.php?msg=$msg");
}

}else{
$msg="Please fillup all required fields";
 header("location:checkout.php?msg=$msg");
}


?>

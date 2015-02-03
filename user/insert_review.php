<?php
include_once('function.php');

$name=$_POST['name'];
$review=$_POST['review'];
$idval=$_POST['hidden'];
$rating=$_POST['rating'];
$captcha=$_SESSION['captcha'];
$capt=$_POST['captcha'];

$date=date("Y-m-d");

if($capt==$captcha)
{
	mysql_query("insert into review set `name`='$name',`review`='$review',`rating`='$rating',`product_id`='$idval',`date`='$date'");
	$msg=1;
}
else{
	$msg=0;
}
	unset($_SESSION['captcha']); 
	header("location:oneproduct.php?idvalue=$idval&msg=$msg");
 
?>

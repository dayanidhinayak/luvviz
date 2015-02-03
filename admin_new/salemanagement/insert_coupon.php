<?php 
include_once('function.php');

$cname=$_POST['cname'];
$ccode=$_POST['ccode'];
$discount=$_POST['discount'];
$image = $_FILES['img']['name'];


$file1=getexatfilename($image);
$ext1=getext($image);

 if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif")
						
						{
						
						$folder="images/";
						 $filename = $folder . $image;
						 
						 $copied = copy($_FILES['img']['tmp_name'], $filename);
					 
					 //echo "insert into `coupon` set `name`='$cname',`code`='$ccode',`discount`='$discount',`image`='$filename',`status`='0'";
					 
					 mysql_query("insert into `coupon` set `name`='$cname',`code`='$ccode',`discount`='$discount',`image`='$filename',`status`='0'");
							}
	


header('location:add_coupons.php');
?>
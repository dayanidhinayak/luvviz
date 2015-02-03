<?php
ini_set('display_errors', 1);
include_once('../function.php');
$pname=$_POST['pname'];
$pname1=$_POST['pname1'];
$link=$_POST['link'];	
$status=$_POST['status'];	

$image = $_FILES['img_name']['name'];
$file1=getexatfilename($image);

$ext1=getext($image);

 if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif")

						{
	$folder="img/";

						 $filename = $folder . $image;
						 
	 $copied = copy($_FILES['img_name']['tmp_name'], $filename);
	 if($copied)
	 {
	 echo $filename;
	 }
	 }
mysql_query("insert into `leftmenu` set `icon`='$filename',`name`='$pname',`pagename`='$pname1',`href`='$link',`status`='$status'");
header("location:add_leftmenu.php");
?>	

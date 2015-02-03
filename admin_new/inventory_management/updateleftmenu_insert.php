<?php
ini_set('display_errors', 1);
include_once('../function.php');
$pname=$_POST['pname'];
$pname1=$_POST['pname1'];
$link=$_POST['link'];	
$status=$_POST['status'];	
echo $pname1;
$hdn=$_POST['hdn'];
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
if($image=='')
{
mysql_query("update `leftmenu` set `name`='$pname',`pagename`='$pname1',`href`='$link',`status`='$status' where `slno`='$hdn'");
}
else{
mysql_query("update `leftmenu` set `icon`='$filename',`name`='$pname',`pagename`='$pname1',`href`='$link',`status`='$status' where `slno`='$hdn'");
}
header("location:add_leftmenu.php");
?>
<?php
ini_set('display_errors', 1);
include_once('../function.php');
$prior=$_POST['prior'];
$link=$_POST['link'];	
$alt=$_POST['alt'];	
$type=$_POST['type'];
$pos=$_POST['pos'];
$catid=$_POST['catid'];
$tittle=$_POST['tittle'];
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
mysql_query("insert into `index_image` set `image`='$filename',`priority`='$prior',`link`='$link',`alt`='$alt',`type`='$type',`position`='$pos',`tittle`='$tittle',`category_id`='$catid'");
header("location:image_add.php");
?>	

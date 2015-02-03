<?php 
include_once('function.php');
$name=$_POST['flovour_tag'];
$date=date("Y-m-d");
$image = $_FILES['prodct_img']['name'];

$file1=getexatfilename($image);

$ext1=getext($image);

 if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif")

						{
	$folder="image/";

						 $filename = $folder . $image;
						 
						 $copied = copy($_FILES['prodct_img']['tmp_name'], $filename);
						 
						 mysql_query("insert into `flavour` set `flavour_name`='$name',`image`='$filename',`entry_date`='$date'")or die(mysql_error());
						 
						 }
	header("location:addflavor.php");
		
?>
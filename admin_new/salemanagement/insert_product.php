<?php 

include_once('function.php');

$name=$_POST['name'];



$desc=$_POST['desc'];

$price=$_POST['price'];

$image = $_FILES['prodct_img']['name'];

$file1=getexatfilename($image);

$ext1=getext($image);

 if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif")

						{
	$folder="img/";

						 $filename = $folder . $image;
	 $copied = copy($_FILES['prodct_img']['tmp_name'], $filename);
	 
	 echo "insert into `product` set `product_name`='$name',`description`='$desc',`price`='$price',`image`='$filename'";

			mysql_query("insert into `product` set `product_name`='$name',`description`='$desc',`price`='$price',`image`='$filename'")or die(mysql_error());				
			}
header("location:addcake.php");
?>
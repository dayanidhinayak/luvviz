<?php
include_once('function.php');
$pid=$_POST['pid'];

for($i=1;$i<20;$i++)
{
$timestamp=time();
$val=$timestamp.$i;

$var3=img.$i;
//echo $var3;
$image = $_FILES[$var3]['name'];
//echo $image;

$file1=getexatfilename($image);
$ext1=getext($image);

 if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif")
						
						{
						
						$folder="image/";
						$upload_exts = end(explode(".", $_FILES[$var3]["name"]));
						 $filename = $folder .$val.".".$upload_exts;
						 
						 $copied = copy($_FILES[$var3]['tmp_name'], $filename);
						 
			if($copied )
			{
echo "insert into `product_images` set `product_id`='$pid',`image`='$filename'";

mysql_query("insert into `product_images` set `product_id`='$pid',`image`='$filename'")or die(mysql_error());

echo "U ve successfully entered.";
} 
else
{echo "not entered";
} 

} 



}

header("location:product.php");


?>

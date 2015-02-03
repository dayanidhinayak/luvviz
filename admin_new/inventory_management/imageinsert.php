<?php
ini_set('allow_url_include' , true);
include_once('../function.php');

$val=time();
$image =$_FILES['img']['name'];

$a==0;
foreach($image as $i=>$i1)
{
echo $i."-----".$i1;
$a++;

$ext1=end(explode(".", $i1));

 if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif" )

						{
						 $folder="photo/";
 						$filename = $folder . $val.$a.".".$ext1;
						$im=$_FILES['img']['tmp_name'][$i];
						//var_dump($im);
						$copied = copy($im, $filename);
						
						 
						 mysql_query("insert into `imagelist` set `image`='$filename'")or die(mysql_error());
						echo "insert into `imagelist` set `image`='$filename'";
						 }
						

						 echo "Your Images has been uploaded";
						header("location:addimage.php");
//echo $i."<br/>";
//echo "not enter in condition";
}

?>

<?php
	include_once('../function.php');
	
	$id=$_POST['hdn'];
	$priority=$_POST['prior'];
	$image =$_FILES["image"]["name"];
	$ext1 = end(explode(".", $_FILES["image"]["name"]));
	//echo $upload_exts;
	if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif")

	{
						
						 $folder="img/";

                                                $filename = $folder . $image;	
						if (file_exists( $folder. $_FILES["image"]["name"]))
						{
						echo "<div class='error'>"."(".$_FILES["image"]["name"].")".
						" already exists. "."</div>";
						}
						else {
						
						 $copied = copy($_FILES['image']['tmp_name'], $filename);
						}
	 
	$sql=mysql_query("update `index_image` set `image`='$filename',`priority`='$priority'  where `id`='$id'")or die(mysql_error());
	//echo "update `index_image` set `image`='$filename1',`priority`='$priority'  where `id`='$id'";
	}
	else
	{
	//echo "elsee";
	$sql=mysql_query("update `index_image` set `priority`='$priority' where `id`='$id'")or die(mysql_error());
	}
	
	
	
	
	
	
	if($sql)
	{
	$msg="Successfully Updated";
	}
	else
	{
	$msg="Updation failed";
	}
	
	header("location:all_images.php?msg=$msg");
	?>

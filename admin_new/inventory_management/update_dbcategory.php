<?php
	include_once('../function.php');
	$name=$_POST['product_name'];
	$display=$_POST['display'];
	$desc=$_POST['textarea'];
	$id=$_POST['hidden'];
	$priority=$_POST['priority'];
	$image =$_FILES["image"]["name"];
	$timestamp=time();
	
	$file_exts = array("jpg", "jpeg", "gif", "png");
	$upload_exts = end(explode(".", $_FILES["image"]["name"]));
	echo $upload_exts;
	if ((($_FILES["image"]["type"] == "image/gif")
	|| ($_FILES["image"]["type"] == "image/jpeg")
	|| ($_FILES["image"]["type"] == "image/png"))
	&& in_array($upload_exts, $file_exts))
	{
						if ($_FILES["image"]["error"] > 0)
						{
						echo "Return Code: " . $_FILES["image"]["error"] . "<br>";
						}
						// Enter your path to upload file here
						
						if (file_exists("images/" . $_FILES["image"]["name"]))
						{
						echo "<div class='error'>"."(".$_FILES["image"]["name"].")".
						" already exists. "."</div>";
						}
						else move_uploaded_file($_FILES["image"]["tmp_name"],
						"../inventory_management/img/" . $timestamp . ".".$upload_exts);
						$filename="img/" .$timestamp . ".".$upload_exts;
						}
	else
	{
	echo "<div class='error'>Invalid file</div>";
	$filename="";
	}
	
	echo $filename."ghjkj";
	if($filename!='')
	{
	echo "ifff";
	 
	$sql=mysql_query("update`category` set `category_name`='$name',`status`='$display',`description`='$desc',`priority`='$priority',`img`='$filename' where `id`='$id'")or die(mysql_error());
	}
	else
	{
	echo "elsee";
	$sql=mysql_query("update`category` set `category_name`='$name',`status`='$display',`description`='$desc',`priority`='$priority' where `id`='$id'")or die(mysql_error());
	}
	
	
	
	
	
	
	if($sql)
	{
	$msg="Successfully Updated";
	}
	else
	{
	$msg="Updation failed";
	}
	
	header("location:categories.php?msg=$msg");
	?>

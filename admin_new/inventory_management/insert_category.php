<?php
	ini_set('display_errors', 1);
	include_once('../function.php');
	$name=$_POST['product_name'];
	$display=$_POST['display'];
	$parent=$_POST['idval'];
	$date=date("Y-m-d H:i:s");
	$desc=$_POST['textarea'];
	$image =$_FILES["image"]["name"];
	$priority=$_POST['priority'];
	$mpriority=$_POST['mpc_priority'];
	
	
	$timestamp=time();
	echo $timestamp;
	
	//foreach($_POST as $a=> $b)
	//{
	
	//echo $a."---------".$b.'<br/>';
	//}
	
	
	
	$q=mysql_query("select `category_name` from `category` where `category_name`='$name' and `parent`='$parent'");
	$cnt=mysql_num_rows($q);
	if($cnt==0)
	{
				
	
	
	
	$file_exts = array("jpg", "jpeg", "gif", "png");
	$upload_exts = end(explode(".", $_FILES["image"]["name"]));
	//echo $upload_exts;
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
						
						}
	else
	{
	echo "<div class='error'>Invalid file</div>";
	}
	$filename="img/" .$timestamp . ".".$upload_exts;
	//echo $filename;
	
	//echo "insert into `category` set `category_name`='$name',`entry_ondate`='$date',`img`='$filename',`parent`='$parent',`status`='$display',
	//`description`='$desc',`priority`='$priority'";
	
	 $query=mysql_query("insert into `category` set `category_name`='$name',`entry_ondate`='$date',`img`='$filename',`parent`='$parent',`status`='$display',
	`description`='$desc',`priority`='$priority',`mpc_priority`='$mpriority'")or die(mysql_error());	
	$msg="Successfully Added category $name"; 
	mysql_query("insert into `brand` set `brand_name`='$name'");
	
	//$query=mysql_query("UPDATE `category` SET `img`='$filename' WHERE `parent`='$res[parent]'")or die(mysql_error());
	
	if($query)
	{
		echo "image uploaded";
		}
		else echo "image not uploaded";
	}
	
	
	else
	{
	$msg="An category With This name Alredy Exists..You Can't Enter Duplicate category name..";
	
	}
	header("location:categories.php?msg=$msg");
?>

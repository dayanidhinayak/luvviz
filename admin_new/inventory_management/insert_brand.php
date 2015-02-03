<?php

	ini_set('display_errors', 1);

	include_once('../function.php');

	$name=$_POST['product_name'];

	$display=$_POST['display'];

	

	$date=date("Y-m-d H:i:s");



	$image =$_FILES["image"]["name"];

	$priority=$_POST['priority'];

	

	

	$timestamp=time();

	echo $timestamp;

	

	//foreach($_POST as $a=> $b)

	//{

	

	//echo $a."---------".$b.'<br/>';

	//}

	

	

	

	$q=mysql_query("select `brand_name` from `brand` where `brand_name`='$name'");

	$cnt=mysql_num_rows($q);

	if($cnt==0)

	{

	mysql_query("insert into `brand` set `brand_name`='$name',`created`='$date',`status`='$display',

	`priority`='$priority'")or die(mysql_error());	

	$msg="Successfully Added brand $name"; 			

	

	$sql=mysql_query("SELECT `id` FROM `brand` WHERE `brand_name`='$name'")or die(mysql_error());

	$res=mysql_fetch_array($sql);

	

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

						

						if (file_exists("icons/" . $_FILES["image"]["name"]))

						{

						echo "<div class='error'>"."(".$_FILES["image"]["name"].")".

						" already exists. "."</div>";

						}

						else move_uploaded_file($_FILES["image"]["tmp_name"],

						"../inventory_management/icons/" . $timestamp . ".".$upload_exts);

						

						}

	else

	{

	echo "<div class='error'>Invalid file</div>";

	}

	$filename="icons/" .$timestamp . ".".$upload_exts;

	//echo $filename;

	 

	$query=mysql_query("UPDATE `brand` SET `icon`='$filename' WHERE `id`='$res[id]'")or die(mysql_error());

	

	if($query)

	{

		echo "image uploaded";

		}

		else echo "image not uploaded";

	}

	

	

	else

	{

	$msg="A Brand With This name Alredy Exists..You Can't Enter Duplicate brand name..";

	

	}

	header("location:brandadd.php?msg=$msg");

?>
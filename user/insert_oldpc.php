<?php
	ini_set('display_errors', 1);
	include_once('function.php');
	$name=$_POST['name'];
	$address=$_POST['add'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$specification=$_POST['textarea'];
	$brand=$_POST['brand'];
	$price=$_POST['price'];
	$image =$_FILES["image"]["name"];
	$timestamp=time();
	//echo "test";
	$file_exts = array("jpg", "jpeg", "gif", "png");
	$upload_exts = end(explode(".", $_FILES["image"]["name"]));
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
						else 
						move_uploaded_file($_FILES["image"]["tmp_name"],
						"oldpc_image/" . $timestamp . ".".$upload_exts);
						
	}
	else
	{
	echo "<div class='error'>Invalid file</div>";
	}
	$filename="oldpc_image/" .$timestamp . ".".$upload_exts;
	
	$query=mysql_query("insert into `old_pc` set `name`='$name',`address`='$address',`emailid`='$email',`contact`='$contact',`specification`='$specification',`price`='$price',`image`='$filename'")or die(mysql_error());
	if($query)
	{
	$msg="Your ad for $name with $specification of brand $brand and price=$price is successfully addes to our website.\r\n Thank you.\r\n Further information will be sent you via email.\r\n";
	$subject="Ad Submiited";
	$headers = 'From:MAPKART' . "\r\n" .
    'Reply-To: ' . "\r\n" ;
    //echo "xxx"; 
	mail($email,$subject,$msg,$headers);
	
	}
	else {
	//echo "yyy";
	$msg1="Your ad is not submitted try again";
	}
	header("location:old_pc.php?msg=$msg1");
	?>

<?php 
ini_set("display_error",1);
	include_once("function.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>


<body>
Category:
<?php
$sql=mysql_query("select `category_name` from `category` where `parent`='4'")or die(mysql_error());
	 while($result=mysql_fetch_array($sql))
	{?>
	<?php echo $result['category_name'];?>
	<br />
	<?php }?>
	<br />
Brand:
<?php 
$sql1=mysql_query("select distinct(`brand_id`) from `product` where category_id like '%|4|%'")or die(mysql_error());
	while($result1=mysql_fetch_array($sql1))
	{?>

<?php

 $sql2=mysql_query("SELECT `brand_name` FROM `brand` WHERE `id`='$result1[brand_id]'")or die(mysql_error());
			$result2=mysql_fetch_array($sql2);
			echo $result2['brand_name'];?><br />
<?php } ?>



</body>
</html>

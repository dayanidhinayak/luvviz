<?php 
include_once('function.php');
$catid=$_GET['catid'];

$query=mysql_query("select * from `category` where `id`='$catid'")or die(mysql_error());
$res=mysql_fetch_array($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />

<title>Untitled Document</title>

</head>



<body>

			<form name="form" action="edit_category.php" method="post" enctype="multipart/form-data">

<table>

<th colspan="2">Add Category<input type="hidden" name="cid" value="<?php echo $catid?>"</th>

<tr>

     <td>Category Name</td>

	 <td><input type="text" name="name" value="<?php echo $res['category_name'];?>" /></td>

</tr>

<tr><td colspan="2"><input type="submit" name="submit" value="Add" /></td></tr>

</table>

</form>	

</body>

</html>
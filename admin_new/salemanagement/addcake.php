<?php 

include_once('function.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />

<title>Cobbler Online</title>

</head>



<body>

<form name="form" action="insert_product.php" method="post" enctype="multipart/form-data">

<table>

<th colspan="2">Add Product</th>



<tr>

     <td>Product Name</td>

	 <td><input type="text" name="name" /></td>

</tr>

<tr>

     <td>Description About Product</td>

	 <td><textarea name="desc"></textarea></td>

</tr>

<tr>

     <td>Product Price</td>

	 <td><input type="text" name="price" /></td>

</tr>

<tr>

     <td>Product Image</td>

	 <td><input type="file" name="prodct_img" /></td>

</tr>

<tr><td colspan="2"><input type="submit" name="submit" value="Add" /></td></tr>

</table>

</form>

</body>

</html>
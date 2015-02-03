<?php
include_once("function.php");
$pid=$_GET['pid'];
$que=mysql_query("select * from `product` where `id`='$pid'");
$res=mysql_fetch_array($que);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>
</head>

<body>
<form name="form" action="edit_product.php" method="post" enctype="multipart/form-data">

<table>

<th colspan="2">Add Product</th>



<tr>

     <td>Product Name<input type="hidden" name="pid" value="<?php echo $pid?>"  /></td>

	 <td><input type="text" name="name"  value="<?php echo $res['product_name'];?>"/></td>

</tr>

<tr>

     <td>Description About Product</td>

	 <td><textarea name="desc"><?php echo $res['description'];?></textarea></td>

</tr>

<tr>

     <td>Product Price</td>

	 <td><input type="text" name="price"  value="<?php echo $res['price'];?>"/></td>


</tr>

<tr><td colspan="2"><input type="submit" name="submit" value="Edit" /></td></tr>

</table>

</form>
</body>
</html>

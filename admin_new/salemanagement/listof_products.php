<?php
include_once("function.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>
</head>

<body>
<table style="margin-left:100px;">
<tr><td colspan="5">Product Details</td></tr>
<tr><td>Product Name</td>
<td>Product Id</td>
<td>Price</td>
<td>Action</td>
</tr>

<?php
$query=mysql_query("select * from `product`");
while($res=mysql_fetch_array($query))
{

?>
<tr><td><?php echo $res['product_name'];?></td>
<td><?php echo $res['id'];?></td>
<td><?php echo $res['price'];?></td>
<td><a href="price_edit.php?pid=<?php echo $res['id'];?>">Edit</a></td>
</tr>
<?php
}
?>



</table>
</body>
</html>

<?php
include_once("../function.php");
//echo $_SESSION['user'];
$id=$_GET['id'];
$que=mysql_query("select po.`quantity`,p.`product_name` from `purchase_order` po,`product` p where po.`id`='$id' and p.`id`=po.`product_name`");
$res=mysql_fetch_array($que);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>
</head>
<body>
<form name="form1" method="post" action="po_update.php">
	<table>
		<tr><td>Edit Purchase Order Details</td></tr>
		<tr><td>Product name<input type="hidden" name="po_id" value="<?php echo $id?>" /></td>
			<td><input type="text" name="pname" value="<?php echo $res['product_name'];?>" /></td></tr> 

<tr><td>Product Quantity</td>
			<td><input type="text" name="qty" value="<?php echo $res['quantity'];?>" /></td></tr> 

<tr><td colspan="2"><input type="submit" name="submit" value="Update" /></td></tr>

</table>
<form>
</body></html>

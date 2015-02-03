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

			<form name="form" action="insert_warehouse.php" method="post" >

<table>

<th colspan="2">Add Warehouse</th>



<tr>

     <td>Warehouse Name</td>

	 <td><input type="text" name="name" /></td>

</tr>

<tr>

     <td>Location</td>

	 <td><input type="text" name="location" /></td>

</tr>

<tr>

     <td>Storage Capacity</td>

	 <td><input type="text" name="storage" /></td>

</tr>

<tr>

     <td>Vendor Group</td>

	 <td><select name="vendor">
 <option value="">Select</option>
	<?php
		$que=mysql_query("select * from `vendor_detail` ");
		while($res=mysql_fetch_array($que))
{


	?>
 <option value="<?php echo $res['slno'];?>"><?php echo $res['name'];?></option>
<?php
}
?>
	
	 	</select>
	 </td>

</tr>

<tr><td colspan="2"><input type="submit" name="submit" value="Add" /></td></tr>
</table>

</form>
</body>
</html>

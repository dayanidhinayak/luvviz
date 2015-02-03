<?php
include_once("function.php");
$wid=$_GET['warehouseid'];
$que=mysql_query("select w.*,v.`name`,v.`slno` from `warehouse` w,`vendor_detail` v where `w`.`slno`='$wid' and `w`.`vendor_id`=`v`.`slno`")or die(mysql_error());
$res=mysql_fetch_array($que);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>
</head>

<body>
<form name="form" action="update_warehouse.php" method="post" enctype="multipart/form-data">

<table>

<th colspan="2">Edit Warehouse</th>



<tr>

     <td>Warehouse Name<input type="hidden" name="warehouse_id" value="<?php echo $wid?>"  /></td>

	 <td><input type="text" name="name"  value="<?php echo $res['warehouse_name'];  ?>"/></td>

</tr>

<tr>

     <td>Location</td>

	 <td><input type="text" name="location" value="<?php echo $res['location'];  ?>" /></td>

</tr>

<tr>

     <td>Storage Capacity</td>

	 <td><input type="text" name="storage" value="<?php echo $res['storage_capacity'];  ?>" /></td>

</tr>

<tr>

     <td>Vendor Group</td>

	 <td><select name="vendor">
 <option value="<?php echo $res['id'];?>"><?php echo $res['name'];?></option>
	<?php
		$que=mysql_query("select * from `vendor_detail` where `name`!='$res[name]' ");
		while($res=mysql_fetch_array($que))
{


	?>
 <option value="<?php echo $res['id'];?>"><?php echo $res['name'];?></option>
<?php
}
?>
	
	 	</select>
	 </td>

</tr>

<tr><td colspan="2"><input type="submit" name="submit" value="Update" /></td></tr>

</table>

</form>

</body>
</html>

<?php 
include_once('function.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>
</head>

<body>
<div style="float:left">
<form name="form" action="insert_vendor.php" method="post">
<table>
<?php
if(isset($_GET['msg']))
{

$msg=$_GET['msg'];
}
else
{
$msg='';
}
?>
<tr><td style="font-size:18px;color:#FF3333;"><?php echo $msg;?></td></tr>
<tr>
     <td>Email Id</td>
	 <td><input type="text" name="email" /></td>
</tr>
<tr>
     <td>Vender Password</td>
	 <td><input type="password" name="pass" /></td>
</tr>

<tr>
     <td>Shop Name</td>
	 <td><input type="text" name="name" /></td>
</tr>

<tr>
     <td>Phone Number</td>
	 <td><input type="text" name="phn" /></td>
</tr>
<tr>
     <td>Shop Address</td>
	 <td><textarea name="address"> </textarea></td>
</tr>
<tr>
     <td>Country</td>
	 <td><input type="text" name="country" /></td>
</tr>
<tr>
     <td>State</td>
	 <td><input type="text" name="state" /></td>
</tr>
<tr>
     <td>Zip</td>
	 <td><input type="text" name="pin" /></td>
</tr>
<tr>
     
	 <td colspan="2"><input type="submit" name="submit" value="Submit" /></td>
</tr>
</table>
</form>
</div>

<div style="float:left">
<table>
<th>Existing Venders</th>
<tr>
     <td>Name</td>
	 <td>User Name</td>
	 <td>created</td>
	<td>View/Edit</td>
	 <td>Disable</td>
</tr>
<?php 
//echo "select p.`name`,p.`created`,p.`id`,l.`user_name` from `vendor_detail` p,`login` l where p.`status`='0' and l.`id`=p.`id`";
$qq=mysql_query("select * from `vendor_detail`  where `status`='0'") or die(mysql_error());
while($r=mysql_fetch_array($qq))
{
$date = date("Y-m-d",strtotime($r['created']));
?>
<tr>
     <td><?php echo $r['name'];?></td>
	 <td><?php echo $r['email'];?></td>
	 <td><?php echo $date;?></td>
	 <td><a href="view_vendor_detail.php?id=<?php echo $r['slno'];?>">View/Edit</a></td>
	 <td><a href="disable_vendor.php?id=<?php echo $r['slno'];?>">Disable</a></td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>

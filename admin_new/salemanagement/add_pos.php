<?php 
include_once('function.php');
$q1=mysql_query("select `status` from `login` where `user_name`='$_SESSION[user]'");
$r1=mysql_fetch_array($q1);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>
</head>

<body>
<div style="float:left">
<form name="form" action="insert_pos.php" method="post">
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
     <td>Password</td>
	 <td><input type="password" name="pass" /></td>
</tr>
<?php 
if($r1['status']==1 || $r1['status']==4)
{
$q2=mysql_query("select `slno` from `admin_detail` where `email`='$_SESSION[user]'");
$r2=mysql_fetch_array($q2);
?>
<tr>
     <td>Select Vendor</td>
	 <td><select name="vendor">
	 <?php 
	 $que=mysql_query("select * from `vendor_detail` where `status`='0'");
	 while($rs=mysql_fetch_array($que))
	 {
	 ?>
	 <option value="<?php echo $rs['slno'];?>"><?php echo $rs['name'];?></option>
	 <?php } ?>
	 </select>
	 </td>
</tr>
<?php } 
else
{
$q2=mysql_query("select `slno` from `vendor_detail` where `email`='$_SESSION[user]'");
$r2=mysql_fetch_array($q2);

?>
<tr>
 <td>Vendor Name</td>
 <input type="hidden" name="vendor" value="<?php echo $r2['slno'];?>" />
  <td><input type="text" name="ven" value="<?php echo $_SESSION['user']?>" readonly="" /></td>
  </tr>

<?php } ?>
<tr>
     <td>User Name</td>
	 <td><input type="text" name="name" /></td>
</tr>

<tr>
     <td>Phone Number</td>
	 <td><input type="text" name="phn" /></td>
</tr>
<tr>
     <td>Address</td>
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
     <input type="hidden" name="cid" value="<?php echo $r2['slno'];?>" />
	 <td colspan="2"><input type="submit" name="submit" value="Submit" /></td>
</tr>
</table>
</form>
</div>
<div style="float:left">
<table>
<th>Existing POS</th>
<tr>
     <td>Name</td>
	 <td>User Name</td>
	 <td>created</td>
	<td>View/Edit</td>
	 <td>Disable</td>
</tr>
<?php 

$q=mysql_query("select * from `pos_user_detail`  where `status`='0' and `created_by`='$r2[slno]'");
while($r=mysql_fetch_array($q))
{
$date = date("Y-m-d",strtotime($r['created']));
?>
<tr>
     <td><?php echo $r['name'];?></td>
	 <td><?php echo $r['email'];?></td>
	 <td><?php echo $date;?></td>
	 <td><a href="view_pos_detail.php?id=<?php echo $r['slno'];?>">View/Edit</a></td>
	 <td><a href="disable_pos.php?id=<?php echo $r['slno'];?>">Disable</a></td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>

<?php 
include_once('function.php');
$q1=mysql_query("select `status` from `login` where `user_name`='$_SESSION[user]'");
$r1=mysql_fetch_array($q1);
if($r1['status']==1 || $r1['status']==4)
{
$q2=mysql_query("select `slno` from `admin_detail` where `email`='$_SESSION[user]'");
$r2=mysql_fetch_array($q2);
}
else
{
$q2=mysql_query("select `slno` from `vendor_detail` where `email`='$_SESSION[user]'");
$r2=mysql_fetch_array($q2);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>
</head>

<body>
<table>
<th>Existing POS</th>
<tr>
     <td>Name</td>
	 <td>User Name</td>
	 <td>created</td>
	<td>Enable</td>
</tr>
<?php 
//echo "select p.*,l.`user_name` from `pos_user_detail` p,`login` l where `status`='0' and l.`id`=p.`id`";
$q=mysql_query("select * from `pos_user_detail`  where `status`='1' and `created_by`='$r2[slno]'");
while($r=mysql_fetch_array($q))
{
$date = date("Y-m-d",strtotime($r['created']));
?>
<tr>
     <td><?php echo $r['name'];?></td>
	 <td><?php echo $r['email'];?></td>
	 <td><?php echo $date;?></td>
	 <td><a href="enable_pos_action.php?id=<?php echo $r['slno'];?>">Enable</a></td>
</tr>
<?php } ?>
</table>
</body>
</html>

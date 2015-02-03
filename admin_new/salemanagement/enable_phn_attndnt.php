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
<div style="float:left">
<table>
<th>Disabled Phone Attendants</th>
<tr>
     <td>Name</td>
	 <td>User Name</td>
	 <td>created</td>
	
	 <td>Enable</td>
</tr>
<?php 
//echo "select p.`name`,p.`created`,p.`id`,l.`user_name` from `vendor_detail` p,`login` l where p.`status`='0' and l.`id`=p.`id`";
$qq=mysql_query("select * from `phn_attendant_detail` where `status`='1'") or die(mysql_error());
while($r=mysql_fetch_array($qq))
{
$date = date("Y-m-d",strtotime($r['created']));
?>
<tr>
     <td><?php echo $r['name'];?></td>
	 <td><?php echo $r['email'];?></td>
	 <td><?php echo $date;?></td>
	 <td><a href="enable_attndt.php?id=<?php echo $r['slno'];?>">Enable</a></td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>

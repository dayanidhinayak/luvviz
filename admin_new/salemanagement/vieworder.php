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
<tr><td colspan="5">Order Details</td></tr>
<tr><td>Order No</td>
<td>Customer Name</td>
<td>Customer Address</td>
<td>Contact No</td>
<td>Order Ondate</td></tr>

<?php
$query=mysql_query("select * from `order_details`");
while($res=mysql_fetch_array($query))
{

?>
<tr><td><a href="detail.php?orderid=<?php echo $res['id'];?>"><?php echo $res['id'];?></a></td>
<td><?php echo $res['name'];?></td>
<td><?php echo $res['address'];?></td>
<td><?php echo $res['phn'];?></td>
<td><?php echo $res['order_ondate'];?></td></tr>
<?php
}
?>



</table>
</body>
</html>

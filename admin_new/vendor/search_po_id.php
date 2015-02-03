<?php
include_once("../function.php");
$inv=$_GET['q'];

$query=mysql_query("select po.`order_id`,po.`quantity`,po.`entry_date`,po.`id`,p.`product_name` from `purchase_order` po,`product` p  where `order_by`='$_SESSION[user]' and p.`id`=po.`product_name` and po.`order_id` like '$inv%'");
while($res=mysql_fetch_array($query))
{

?>
<tr>
     <td><?php echo $res['order_id'];?></td>
     <td><?php echo $res['product_name'];?></td>
	<td><?php echo $res['quantity'];?></td>
	<td><?php echo $res['entry_date'];?></td>
<?php
if($res['approval_status']==1)
{
?>
	<td><a href="po_edit.php?id=<?php echo $res['id'];?>">Edit</a></td>
<?php
}
else
{
?>
<td><a href="po_edit.php?id=<?php echo $res['id'];?>">Edit</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="po_delete.php?id=<?php echo $res['id'];?>">Delete</a></td>
<?php
}
?>
	</tr>
<?php
}
?>
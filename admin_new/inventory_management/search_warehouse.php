<?php
include_once("../function.php");
$inv=$_GET['q'];

$query=mysql_query("select w.*,v.`name` from `warehouse` w,`vendor_detail` v where `w`.`vendor_id`=`v`.`slno` and w.`warehouse_name` like '$inv%'") or die(mysql_error());
while($res=mysql_fetch_array($query))
{

?>
<tr>
<td><input type="checkbox" name="hide[]" value="<?php echo $res['slno'];?>"  /></td>
<td><?php echo $res['warehouse_name'];?></td>
<td><?php echo $res['location'];?></td>
<td><?php echo $res['storage_capacity'];?></td>
<td><?php echo $res['name'];?></td>
<td><?php echo $res['created_ondate'];?></td>
<td><a href="warehouse_edit.php?warehouseid=<?php echo $res['slno'];?>">Edit</a></td>
<?php
if($res['status']==1)
{

?>
<td>Active</td>
<?php
}
else
{
?>
<td>Hide</td>
<?php
}
?>
</tr>
<?php
}
?>

<tr><td colspan="6"><input type="submit" name="submit" value="Hide/show" /></td></tr>

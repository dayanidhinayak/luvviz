<?php
include_once("../function.php");
$inv=$_GET['q'];
//echo "select * from `product` where `product_name` like '$inv%'";
$query=mysql_query("select * from `product` where `product_name` like '$inv%'");
while($res=mysql_fetch_array($query))
{

?>
<table>
<tr>
<td><input type="checkbox" name="hide[]" value="<?php echo $res['id'];?>"  /></td>
<td><?php echo $res['product_name'];?></td>
<td><?php echo $res['price'];?></td>
<td><?php echo $res['selling_price'];?></td>
<td><?php echo $res['description'];?></td>
<td><?php echo $res['created_ondate'];?></td>
<td><a href="product_edit.php?productid=<?php echo $res['id'];?>">Edit</a></td>
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
</table>
<?php
include_once("../function.php");
$inv=$_GET['q'];

$query=mysql_query("select * from `brand` where `brand_name` like '$inv%'");
while($res=mysql_fetch_array($query))
{

?>
<tr style="display:none;" id="cat<?php echo $res['id'];?>"><td colspan="2"><input type="text" name="updval<?php echo $res['id'];?>" id="updval<?php echo $res['id'];?>" /></td>
	<td colspan="3"><input type="button" name="update" value="Update" onclick="return update_category(<?php echo $res['id'];?>);" /></td>
</tr>
<tr>
<td><input type="checkbox" name="hide[]" value="<?php echo $res['id'];?>"  /></td>

<td id="cat_old_name<?php echo $res['id'];?>"><?php echo $res['brand_name'];?></td>
<td><?php echo $res['entry_ondate'];?></td>

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
<td>
<input type="button" name="edit" value="EDIT" onclick="return edit_category(<?php echo $res['id'];?>);" />
</td>
</tr>
<?php
}
?>

<tr><td colspan="5"><input type="submit" name="submit" value="Hide/show" /></td></tr>

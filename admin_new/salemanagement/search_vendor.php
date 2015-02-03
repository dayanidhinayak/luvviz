<?php 
include_once('function.php');
$inv=$_GET['q'];

$q=mysql_query("select p.*,l.`password`,l.`user_name` from `vendor_detail` p,`login` l where l.`user_name`=p.`email` and l.`status`='5' and p.`name` like '$inv%'");
while($r=mysql_fetch_array($q))
//echo "select `name` from `vendor_detail` where `id`=$r[vendor_id]";
{
?>
<tr>
    
	<td><?php echo $r['email'];?></td>

	 <td><?php echo $r['password'];?></td>

	 <td><?php echo $r['name'];?></td>

	 

	 <td><?php echo $r['phone'];?></td>

	 <td><?php echo $r['address'];?></td>

	 <td><?php echo $r['country'];?></td>

	 <td><?php echo $r['state'];?></td>

	 <td><?php echo $r['pin'];?></td>

<?php 
if($r['status']=='0')
{
?>
<td>Active</td>
<td><a href="disable_vendor.php?id=<?php echo $r['slno'];?>">Disable</a></td>
<?php }
else
{
 ?>
<td>Disabled</td>
<td><a href="enable_vendor_action.php?id=<?php echo $r['slno'];?>">Enable</a></td>

<?php 
}
?>

    <input type="hidden" name="uid" value="<?php echo $id;?>" >
    <!--<td colspan="2"><input type="submit" name="submit" value="Update" /></td>-->
</tr>
<?php } ?>

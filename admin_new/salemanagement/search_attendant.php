<?php 
include_once('function.php');
$inv=$_GET['q'];


$q=mysql_query("select p.*,l.`password`,l.`user_name` from `phn_attendant_detail` p,`login` l where l.`user_name`=p.`email` and l.`status`='3' and p.`name` like '$inv%'");
while($r=mysql_fetch_array($q))
//echo "select `name` from `vendor_detail` where `id`=$r[vendor_id]";
{
?>
<tr>
    
	<td><?php echo $r['email'];?></td>

	 <td><?php echo $r['password'];?></td>

	 <td><?php echo $r['name'];?></td>
	

	 <td><?php echo $r['phone'];?></td>

	 <td><?php echo $r['address'];?> </td>

	 <td><?php echo $r['country'];?></td>

	 <td><?php echo $r['state'];?></td>

	 <td><?php echo $r['pin'];?></td>


    <?php 
if($r['status']=='0')
{
?>
<td>Active</td>
<td><a href="disable_attndt.php?id=<?php echo $r['slno'];?>">Disable</a></td>
<?php }
else
{
 ?>
<td>Disabled</td>
<td><a href="enable_attndt.php?id=<?php echo $r['slno'];?>">Enable</a></td>

<?php 
}
?>
</tr>
<?php } ?>

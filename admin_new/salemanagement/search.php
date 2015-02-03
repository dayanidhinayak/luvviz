<?php 
include_once('function.php');
$inv=$_GET['q'];
?>
<table style="width:1000px; ">
<?php
$q=mysql_query("select * from `pos_user_detail`  where `name` like '$inv%'");
while($r=mysql_fetch_array($q))
{
//echo "select `name` from `vendor_detail` where `slno`='$r[vendor_id]'";
$qq=mysql_query("select `name` from `vendor_detail` where `slno`='$r[vendor_id]'");
$rs=mysql_fetch_array($qq);
?>
<tr>
    	 <td><?php echo $r['email'];?></td>
    
	 <td><?php echo $r['password'];?></td>
    
	
   
	<td><?php echo $rs['name'];?></td>
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

<td><a href="disable_pos.php?id=<?php echo $r['slno'];?>">Disable</a></td>
<?php }
else
{
 ?>

<td><a href="enable_pos_action.php?id=<?php echo $r['slno'];?>">Enable</a></td>

<?php 
}
?>
  <td>  <input type="hidden" name="uid" value="<?php echo $id;?>" >
  
  <input type="button" name="submit" value="Edit" />
  </td>
    <!--<td colspan="2"><input type="submit" name="submit" value="Update" /></td>-->
</tr>
<?php } ?>

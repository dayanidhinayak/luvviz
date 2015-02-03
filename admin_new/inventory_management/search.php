<?php 
include_once('function.php');
$inv=$_GET['q'];

$q=mysql_query("select * from  product where `product_name` like '$inv%'") or die(mysql_error());

while($r=mysql_fetch_array($q))

{

$que=mysql_query("select `product_id` from `product_varient`  where `product_id`='$r[id]'");
$rs=mysql_num_rows($que);
if($rs==0)
{

?>

<tr>
   <td><?php echo $r['product_name'];?></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><a href="product_varient.php?id=<?php echo $r['id'];?>">Add Variant</a></td>
</tr>

    

	<?php
}
else
{

$q1=mysql_query("select * from `product_varient` where `product_id`='$r[id]'");

while($r1=mysql_fetch_array($q1))

{

?>
<tr>
      <td><?php echo $r['product_name'];?></td>

	<td><?php echo $r1['varient_name'];?></td>

	

	<td><?php echo $r1['description'];?></td>

	<td><a href="edit_variant_detail.php?id=<?php echo $r1['product_id'];?>">Edit</a></td>
          <td><a href="delete_variant.php?id=<?php echo $r1['product_id'];?>" onclick="return delete_confirm();">Delete</a></td>

</tr>

<?php } } } ?>

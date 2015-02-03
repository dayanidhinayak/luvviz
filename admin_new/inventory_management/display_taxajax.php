<?php 
include_once('../function.php');
$id=$_GET['q'];

if($id==1)
{
$query=mysql_query("select * from `taxes` where `status`='$id'");
}
if($id==0)
{
$query=mysql_query("select * from `taxes` where `status`='$id'");
}

while($res=mysql_fetch_array($query))
					{
				
?>
<tr>
						<tr>

						<td><input type="checkbox" name="product[]" value="<?php echo $res['id'];?>" /></td>

						<td><?php echo $res['id'];?></td>

						
						<td><?php echo $res['tax_name']?></td>

						<td><?php echo $res1['rate']?>%</td>
						<?php

						if($res['status']==1)

						{

						

						?>

						<td id="ena<?php echo $res['id'];?>"><img src="../images/tick.png" onclick="return enable(<?php echo $res['id'];?>,<?php echo $res['status']?>);" /></td>

						<?php

						}

						else

						{

						?>

						<td id="ena<?php echo $res['id'];?>"><img src="../images/disabled.gif" onclick="return enable(<?php echo $res['id'];?>,<?php echo $res['status']?>);"/></td>

						<?php

						}

						?>

						<td><a href="edit_product.php?id=<?php echo $res['id'];?>"><img src="../images/edit.gif" /></a>&nbsp;

						

						<a href="delete_product.php?id=<?php echo $res['id'];?>" onclick="return confirmation('<?php echo $res['product_name']?>')">

							<img src="../images/delete.gif"    />

						</a>

						

						</td>

						</tr>
						<?php

						$slno++;

						}

						?>
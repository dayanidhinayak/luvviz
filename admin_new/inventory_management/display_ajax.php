<?php 
include_once('../function.php');
$id=$_GET['q'];

if($id==1)
{
$query=mysql_query("select p.*,s.`quantity` from `product` p,`stock` s where `p`.`id`=`s`.`product_id` and `p`.`status`='$id'");
}
if($id==0)
{
$query=mysql_query("select p.*,s.`quantity` from `product` p,`stock` s where `p`.`id`=`s`.`product_id` and `p`.`status`='$id'");
}

while($res=mysql_fetch_array($query))
					{
				$catid=$res['category_id'];
				$val=str_replace("|","",$catid);
				$query1=mysql_query("select * from `category` where `id`='$val' and `parent`!=0");
				$res1=mysql_fetch_array($query1);
?>
<tr>
						<td><input type="checkbox" name="product[]" value="<?php echo $res['id'];?>" /></td>
						<td><?php echo $res['id'];?></td>
						<td><img src="<?php echo $res['image'];?>" style="width:30px; height:30px;" /></td>
						<td><?php echo $res['product_name']?></td>
						<td><?php echo $res1['category_name']?></td>
						
						
						
						<td><?php echo $res['selling_price']?></td>
						<td><?php echo $res['price']?></td>
						<td><?php echo $res['quantity']?></td>
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
						<td><img src="../images/edit.gif" />&nbsp;
						
						<a href="delete_product.php?id=<?php echo $res['id'];?>" onclick="return confirmation('<?php echo $res['product_name']?>')">
							<img src="../images/delete.gif"    />
						</a>
						
						</td>
						</tr>
						<?php
						$slno++;
						}
					
						?>

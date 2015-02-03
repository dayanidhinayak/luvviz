<?php 
include_once('../function.php');
$id=$_GET['q'];

if($id==1)
{
$query=mysql_query("select * from `index_image` where  `status`='$id'");
}
if($id==0)
{
$query=mysql_query("select * from `index_image` where `status`='$id'");
}

while($result=mysql_fetch_array($query))
					{
					
					?>
					<tr id="<?php echo $result['id'];?>">
						<td><input type="checkbox"  name="product[]" value="<?php echo $result['id'];?>" /></td>
						<td><?php echo $result['id']?></td>
						
						<td><?php echo $result['position'];?></td>
						<td  align="center"><img src="<?php echo $result['image'];?>" style="width:50px; height:50px;" /></td>
						<?php
						if($result['status']==1)
						{
						
						
						?>
						<td id="ena<?php echo $result['id'];?>"><img src="../images/tick.png" onclick="return enable(<?php echo $result['id'];?>,<?php echo $result['status']?>);" /></td>
						<?php
						}
						else
						{
						?>
						<td id="ena<?php echo $result['id'];?>"><img src="../images/disabled.gif" onclick="return enable(<?php echo $result['id'];?>,<?php echo $result['status']?>);"/></td>
						<?php
						}
						?>
						<td><a href="update_image.php?id=<?php echo $result['id'];?>"><img src="../images/edit.gif" /></a> &nbsp;
						<img src="../images/delete.gif" class="btnDelete"  />&nbsp;
						<input type="hidden" name="hiddenvalue" id="hiddenvalue" value="<?php echo $result['id'];?>" />
						</td>
					</tr>
					<?php
					$slno++;
					}
					?>
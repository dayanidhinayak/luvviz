<?php 
include_once('../function.php');
$id=$_GET['q'];

if($id==1)
{
$query=mysql_query("select * from `category` where `parent`!='0' and `status`='$id'");
}
if($id==0)
{
$query=mysql_query("select * from `category` where `parent`!='0' and `status`='$id'");
}

while($result=mysql_fetch_array($query))
					{
					
					?>
					<tr id="<?php echo $result['id'];?>">
						<td><input type="checkbox"  /></td>
						<td><?php echo $slno?></td>
						
						<td><?php echo $result['category_name'];?></td>
						<td  align="center"><?php echo $result['description'];?></td>
						<?php
						if($result['status']==1)
						{
						
						
						?>
						<td><img src="../images/tick.png" /></td>
						<?php
						}
						else
						{
						?>
						<td><img src="../images/disabled.gif" /></td>
						<?php
						}
						?>
						<td><img src="../images/edit.gif" /> &nbsp;
						<img src="../images/delete.gif" class="btnDelete"  />&nbsp;
						<input type="hidden" name="hiddenvalue" id="hiddenvalue" value="<?php echo $result['id'];?>" />
						</td>
					</tr>
					<?php
					$slno++;
					}
					?>
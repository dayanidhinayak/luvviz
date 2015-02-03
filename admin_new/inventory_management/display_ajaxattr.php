<?php 
include_once('../function.php');
$id=$_GET['q'];
$slno=1;
if($id==1)
{
$q11=mysql_query("SELECT p.* 
FROM  `product` p,  `product_varient` pv
WHERE p.`id` = pv.`product_id` AND p.`status`='$id'  
AND p.`id` NOT 
IN (SELECT  `product_id` 
FROM  `stock` 
WHERE  `quantity` >0
)");
}
if($id==0)
{
$q11=mysql_query("SELECT p.* 
FROM  `product` p,  `product_varient` pv
WHERE p.`id` = pv.`product_id` AND p.`status`='$id' 
AND p.`id` NOT 
IN (SELECT  `product_id` 
FROM  `stock` 
WHERE  `quantity` >0
)");


}
while($r11=mysql_fetch_array($q11))
{
?>
<tr><td><?php echo $slno?></td>
				<td><?php echo $r11['product_name']?></td>
				<?php
			if($r11['status']==1)
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
				<td><img src="../images/edit.gif" />&nbsp;
					<a href="delete_attr.php?id=<?php echo $r11['id'];?>" onclick="return confirmation_selected();"> <img src="../images/delete.gif"    /></a></td>
				</tr>
				<?php
				
				$slno++;
				}
				?>

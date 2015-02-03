<?php 
include_once('../function.php');
$slno=1;
$str="";

if(isset($_GET['idval']) && ($_GET['idval']!=""))
{
$idval=$_GET['idval'];
$str.="and p.`id`='$idval'";
}
if(isset($_GET['nameval']) && ($_GET['nameval']!=""))
{
$nameval=$_GET['nameval'];
$str.="and p.`product_name` like '$nameval%' ";
}
$q11=mysql_query("SELECT p.* 
FROM  `product` p,  `product_varient` pv
WHERE p.`id` = pv.`product_id` $str 
AND p.`id` NOT 
IN (SELECT  `product_id` 
FROM  `stock` 
WHERE  `quantity` >0
)");
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

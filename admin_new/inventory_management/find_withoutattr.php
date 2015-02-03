<?php 
include_once('../function.php');
$slno=1;
$str="";

				$s="";
				$que1=mysql_query("select distinct `product_id` from `product_varient`");
				$res1=mysql_fetch_array($que1);
				$s.=$res1['product_id'];
				while($res=mysql_fetch_array($que1))
				{
				if($res['product_id']!=$res1['product_id'])
				{
				$s.=" AND `id` !=".$res['product_id'];
				}
				}
				
if(isset($_GET['idval']) && ($_GET['idval']!=""))
{
$idval=$_GET['idval'];
$str.="and `id`='$idval'";
}
if(isset($_GET['nameval']) && ($_GET['nameval']!=""))
{
$nameval=$_GET['nameval'];
$str.="and `product_name` like '$nameval%' ";
}

if(isset($_GET['description']) && ($_GET['description']!=""))
{
$description=$_GET['description'];
$str.="and `description` like '$description%' ";
}

//echo "SELECT * FROM  `product` WHERE `id` != $s $str
//AND `id` NOT 
//IN (SELECT  `product_id` 
//FROM  `stock` 
//WHERE  `quantity` >0
//)";

$q111=mysql_query("SELECT * FROM  `product` WHERE `id` != $s $str
AND `id` NOT 
IN (SELECT  `product_id` 
FROM  `stock` 
WHERE  `quantity` >0
)");
while($r111=mysql_fetch_array($q111))
{

?>
<tr style="border-top:1px solid #999999;">
						<td><?php echo $slno;?></td>
						<td><?php echo $r111['product_name']?></td>
						<td><?php echo $r111['description']?></td>
						<?php
			if($r111['status']==1)
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
					}
					
					?>

<?php 
include_once('../function.php');
$id=$_GET['q'];
$slno=1;
	$query=mysql_query("select distinct(`category_id`) from `product` where `status`='1'");
	while($res=mysql_fetch_array($query))
	{
		$cid=str_replace("|","",$res['category_id']);
if($id==1)
{
$q1=mysql_query("select * from `category` where `id`!='$cid' and `parent`!='0' and `status`='$id' ");
}
if($id==0)
{
$q1=mysql_query("select * from `category` where `id`!='$cid' and `parent`!='0' and `status`='$id' ");
}

while($r1=mysql_fetch_array($q1))
		{
	
	

	
	?>
	<tr>
			<td><?php echo $slno?></td>
			<td><?php echo $r1['category_name'];?></td>
			<td>&nbsp;</td>
			<?php
			if($r1['status']==1)
			{
			
			?>
			<td><img src="../images/tick.png" /></td>
			<?php
			}
			else
			{
			?>
			<td><img src="../images/tick.png" /></td>
			<?php
			}
			?>
			<td><img src="../images/edit.gif" />&nbsp;
					<a href="delete_cat.php?id=<?php echo $r1['id'];?>" onclick="return confirmation_selected();"> <img src="../images/delete.gif"    /></a>
			</td>
	</tr>
	
	<?php
	$slno++;
	}
	}
	
	?>

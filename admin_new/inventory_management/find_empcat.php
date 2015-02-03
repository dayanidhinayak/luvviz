<?php 
include_once('../function.php');
$slno=1;
$str="";

$val="";
	$query=mysql_query("select distinct(`category_id`) from `product` where `status`='1'");
	$rr=mysql_fetch_array($query);
	$cid1=str_replace("|","",$rr['category_id']);
	$val.=$cid1;
	while($res=mysql_fetch_array($query))
	{
		$cid=str_replace("|","",$res['category_id']);
		$val.=$cid1."and `id`!='$cid'";
		
	}
	
if(isset($_GET['idval']) && ($_GET['idval']!=""))
{
$idval=$_GET['idval'];
$str.="and `id`='$idval'";
}
if(isset($_GET['nameval']) && ($_GET['nameval']!=""))
{
$nameval=$_GET['nameval'];
$str.="and `category_name` like '$nameval%' ";
}

if(isset($_GET['description']) && ($_GET['description']!=""))
{
$description=$_GET['description'];
$str.="and `description` like '$description%' ";
}
//echo "select * from `category` where `id`!=$val $str and `parent`!=0";
$q1=mysql_query("select * from `category` where `id`!=$val $str and `parent`!=0");
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
			<td><img src="../images/disabled.gif" /></td>
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
	
	
	?>


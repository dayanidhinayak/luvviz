<?php 
include_once('../function.php');

$str="";

if(isset($_GET['idval']) && ($_GET['idval']!=""))
{
$idval=$_GET['idval'];
$str.="and `id`='$idval'";
}
if(isset($_GET['nameval']) && ($_GET['nameval']!=""))
{
$nameval=$_GET['nameval'];
$str.="and `varient_name` like '$nameval%' ";
}
$val=substr($str,3);

 
					$q=mysql_query("select * from `varient_table` where $val");
					while($r=mysql_fetch_array($q))
					{
					?>
					<tr>
						<td><input type="checkbox"  /></td>
						<td><?php echo $r['id'];?></td>
						
						<td><?php echo $r['varient_name'];?></td>
						<?php 
						$q1=mysql_query("select count(`product_id`) as `count` from `product_varient` where `varient_name`='$r[varient_name]'");
						$r1=mysql_fetch_array($q1);
						?>
						<td><?php echo $r1['count'];?></td>
						
						
						<td align="center"><img src="../images/down.gif" /></td>
						<td><img src="../images/edit.gif" /><img src="../images/delete.gif" /><img src="../images/more.png" /></td>
					</tr>
					<?php } ?>

<?php
include_once("../function.php");
$id=$_GET['q'];
$catid="|".$id."|";
?>
<table>
<?php
$que=mysql_query("select * from `product` where `category_id` like '%$catid%'");
while($res=mysql_fetch_array($que))
{
?>
<tr><td><?php echo $res['product_name'];?></td>
<td><img src="<?php echo $res['image'];?>" style="height:60px; width:60px;" /></td>
</tr>
<?php
}
?>
</table>
